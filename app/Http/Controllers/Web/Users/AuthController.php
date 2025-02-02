<?php

namespace App\Http\Controllers\Web\Users;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\JobContact;
use App\Models\User;
use App\Notifications\Mail;
use App\Repositories\PermissionRepositoryImpl;
use App\Repositories\RoleRepositoryImpl;
use App\Repositories\UserRepositoryImpl;
use App\Rules\PhoneNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Validator;
class AuthController extends Controller
{
    protected $userRepository;
    protected $roleRepository;
    protected $permissionRepository;

    public function __construct(UserRepositoryImpl $userRepository, RoleRepositoryImpl $roleRepository, PermissionRepositoryImpl $permissionRepository)
    {
        $this->userRepository = $userRepository;
        $this->roleRepository = $roleRepository;
        $this->permissionRepository = $permissionRepository;
    }

    public function register(Request $request)
    {
        $valdate = Validator::make($request->all(), [
            'name_surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:255', 'unique:users',new PhoneNumber],
            'password' => ['required'],
            'accept' => ['required'],
            'role' => ['required']
        ],[
            'name_surname.required' => 'Ad və Soyad boş olmamalıdır',
            'phone.required' => 'Əlaqə nömrəsi boş olmamalıdır',
            'phone.unique' => 'Əlaqə nömrəsi artıq qeydiyyatda vardır',
            'email.required' => 'E-poçt boş olmamalıdır',
            'email.unique' => 'E-poçt  artıq qeydiyyatda vardır',
            'password.required' => 'Şifrə boş olmamalıdır',
            'accept.required' => 'Şərtləri qəbul etməlisiz',
        ]);
        if ($valdate->fails())
        {
            return response()->json([
                'success' => false,
                'error' => $valdate->messages()
            ]);
        }

        try {
            $name_surname = $request->name_surname;
            $name_surname = explode(" ", $name_surname);

            $name = $name_surname[0];
            $surname = $name_surname[1] ?? $name_surname[0];
            $userData = [
                'name' => $name,
                'surname' => $surname,
                'email' => $request->email,
                'phone' => $request->phone,
                'password' => $request->password,
                'status' => 0
            ];

            $user = $this->userRepository->create($userData);

            $role = $request->has('role');
            if ($role) {
                $roles = $this->roleRepository->findBySlug($request->role);
                $user->roles()->attach($roles);
            }
            $message =  "Zəhmət olmasa hesabınıza daxil olmaq üçün təsdiq edin";
            $mail_data = [
                'title' => 'Hesabın təsdiq edilməsi',
                'subject' => $message,
                'email' => $request->email,
                'password' => $request->password,
                'url' => 'https://isveren.az/register/activity/'.$user->id
            ];
            Notification::route('mail', $mail_data['email'])->notify(new Mail($mail_data));
            return   ['success' => true, 'message' => $message, 'redirect' => url('/')];
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,'error' => ['Xəta baş verdi: ' . $e->getMessage()]]);
        }
    }

    public function login(Request $request)
    {
        $valdate = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required']
        ],[
            'email.required' => 'E-poçt boş olmamalıdır',
            'password.required' => 'Şifrə boş olmamalıdır',
        ]);
        if ($valdate->fails())
        {
            return response()->json([
                'success' => false,
                'error' => $valdate->messages()
            ]);
        }
        $user  = User::with('userRole')->where(['email'=>$request->email,'status' => 1])->first();
        if (empty($user->id))
        {
            return response()->json([
                'success' => false,
                'error' => ['Hesab tapılmadı']]);
        }
        $loginState = ['email' => $request->email,'password' => $request->password];
        if (auth('web')->attempt($loginState)) {
            if (!empty(auth()->guard('web')->user()->userRole->role) && $user->userRole->role->slug == 'users')
            {
                $response = [
                    'success' => true,
                    'message' => 'Daxil olundu',
                    'redirect' => url('/user/account')
                ];
            }else{
                $response = [
                    'success' => true,
                    'message' => 'Daxil olundu',
                    'redirect' => url('/user/account')
                ];
            }

            return $response;
        }else{
            return response()->json([
                'success' => false,
                'error' => ['Login və ya şifrə düzgün deyil']
            ]);
        }
    }

    public function forget_password(Request $request)
    {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255']
        ]);

        $user  = User::where(['email'=>$request->email])->first();

        if (empty($user))
            $mail_data = [
                'mail' => $user->email,
                'url' => config('app.frontend_url') . '/edit-password/',
                'name' => $user->name,
                'surname' => $user->surname,
                'dedicated'=>'forget_password'
            ];


        Notification::route('mail', $mail_data['mail'])->notify(new Mail($mail_data));
    }

    public function status($id)
    {
        $user = User::where(['id'=>$id,'status'=>0])->first();
        if (empty($user->id))
        {
            return back()->with('error', 'Hesab tapılmadı');
        }
        $up = User::where(['id'=>$id,'status'=>0])->update(['status' => 1]);
        if ($up)
        {
            $userActive = User::with('userRole')->where(['id'=>$id,'status'=>1])->first();
            if ($userActive) {
                auth('web')->login($userActive);
                if (!empty(auth()->guard('web')->user()->userRole->role) && $userActive->userRole->role->slug == 'users')
                {
                    return redirect(route('web.user.dashboard'))->with('success', Lang::get('web.register_success'));
                }else{
                    return redirect(route('web.user.dashboard'))->with('success', Lang::get('web.register_success'));
                }
            }else{
                return redirect(route('web.home'))->with('error', Lang::get('web.register_error'));
            }
        }else{
            return redirect(route('web.home'))->with('error', Lang::get('web.register_error'));
        }
    }

    public function jobContact(Request $request)
    {
        $valdate = Validator::make($request->all(), [
            'fullname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:255', new PhoneNumber],
            'resume' => [ 'required', 'file', 'mimes:pdf,doc,docx', 'max:2048'],
        ], [
            'fullname.required' => 'Ad və Soyad boş olmamalıdır',
            'phone.required' => 'Əlaqə nömrəsi boş olmamalıdır',
            'email.required' => 'E-poçt boş olmamalıdır',
            'resume.required' => 'CV boş olmamalıdır',
            'resume.file' => 'CV fayl formatında olmalıdır',
            'resume.mimes' => 'CV yalnız PDF, DOC və ya DOCX formatında ola bilər',
            'resume.max' => 'CV maksimum 2MB olmalıdır',
        ]);

        if ($valdate->fails())
        {
            return response()->json([
                'success' => false,
                'error' => $valdate->messages()
            ]);
        }

        try {

            $job = Job::where(['id' => $request->job_id, 'status' => 1])->first();
            if ($request->hasFile('resume')) {
                $resume = time() . '.' . $request->resume->extension();
                $request->resume->move(public_path('uploads/job-contact'), $resume);
            } else {
                return response()->json([
                    'success' => false,
                    'error' => ['resume' => 'CV faylı yüklənə bilmədi. Zəhmət olmasa təkrar yoxlayın.']
                ]);
            }

            $data = [
                'company_id' => $request->company_id ?? null,
                'job_id' => $request->job_id,
                'user_id' => $request->user_id,
                'fullname' => $request->fullname,
                'email' => $request->email,
                'phone' => $request->phone,
                'messages' => $request->messages,
                'resume' => $resume,
                'send_date' => Carbon::now(),
                'status' => 0
            ];

            $sendData = JobContact::create($data);
            $companyMessage =  "Zəhmət olmasa ".$request->fullname." tərəfindən ". json_decode($job, true)['title']['az'] ."- iş elana göndərilən cv-ə baxış keçirin.";
            $mail_data = [
                'title' => json_decode($job, true)['title']['az'] ."- iş elana gələn müraciətə",
                'subject' => $companyMessage,
                'email' => $request->email,
                'phone' => $request->phone,
                'resume' => $resume,
                'send_date' => Carbon::now()
            ];
            Notification::route('mail', $job['email'])->notify(new Mail($mail_data));
            $userMessage = 'Müraciətiniz uğurla tamamlandı.';
            return   ['success' => true, 'message' => $userMessage];
        } catch (\Exception $e) {
            return back()->with('error', ['Xəta baş verdi: ' . $e->getMessage()]);
        }
    }

    public function logout()
    {
        \Session::flush();
        \auth()->guard('web')->logout();
        return redirect(route('web.home'));
    }
}
