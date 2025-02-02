<?php

namespace App\Http\Controllers\Web\Users;

use App\Helpers\LogHelper;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Follower;
use App\Models\Job;
use App\Models\JobContact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Lang;
use Illuminate\Testing\Fluent\Concerns\Has;

class UsersController extends Controller
{
    public function dashboard()
    {
        return self::settings(1);
        return view('web.users.dashboard');
    }

    public function subCategory($id)
    {
        $categories = Category::where('parent_id', $id)->orderBy('name', 'ASC')->get();
        return response()->json($categories);
    }

    public function settings($id)
    {
        $user = auth()->guard('web')->user();
        return view('web.users.settings', compact('user'));
    }

    public function settings_update($id, Request $request)
    {
        try {
            $user = auth()->guard('web')->user();
            if ($request->hasFile('image')) {
                $logoName = time() . '.' . $request->image->extension();
                $logo = $request->image->move(public_path('uploads/user/image'), $logoName);
                $logoImage = $logo->getFilename();
            } else {
                $logoImage = $user->image;
            }

            if (!empty($request->password) && $request->new_password == $request->re_password) {
                $password =  Hash::make($request->new_password);
            } else {
                $password = $user->password;
            }

            $data = [
                'name' => $request->name,
                'surname' => $request->surname,
                'parent' => $request->parent,
                'email' => $request->email,
                'phone' => $request->phone,
                'image' => $logoImage,
                'password' => $password
            ];
            User::where('id', $id)->update($data);
            $log_data = [
                'user_id' => auth()->guard('web')->user()->id,
                'table' => 'users',
                'action' => 'settings_update',
                'description' => 'Success. ' . auth()->guard('web')->user()->name . ' ' . auth()->guard('web')->user()->surname . ' məlumatınız yeniləndi',
                'ip' => $_SERVER['REMOTE_ADDR']
            ];
            LogHelper::user_company_log($log_data);
            return redirect()->back()->with('success', $log_data['description']);
        }catch (\Exception $exception){
            $log_data = [
                'user_id' => auth()->guard('web')->user()->id,
                'table' => 'users',
                'action' => 'settings_update',
                'description' => 'Error. ' . auth()->guard('web')->user()->name . ' ' . auth()->guard('web')->user()->surname . ' məlumatınız yenilənmədi',
                'ip' => $_SERVER['REMOTE_ADDR']
            ];
            LogHelper::user_company_log($log_data);
            return redirect()->back()->with('errors','errors'. $exception->getMessage());
        }

    }

    public function follower()
    {
        $user = auth()->guard('web')->user();
        $jobs = Job::join('followers', 'followers.job_id', '=', 'jobs.id')->with('jobcategory', 'city', 'jobType')->where('followers.user_id', $user->id)->orderBy('followers.id', 'DESC')->paginate(10);
        return view('web.users.follower', compact('jobs'));
    }

    public function userAppeal()
    {
        $user = auth()->guard('web')->user();
        $jobs = JobContact::where('user_id', $user->id)->with(['company','job','user'])->orderBy('id', 'DESC')->paginate(10);
        return view('web.users.user-appeal', compact('jobs'));
    }
    public function companyAppeal($id)
    {
        $user = auth()->guard('web')->user();
        $job = Job::where(['user_id' => $user->id, 'id' => $id])->first();
        if (empty($job['id'])){
            return  redirect()->back();
        }
        $jobs = JobContact::where('job_id', $job->id)->with(['company','job','user'])->orderBy('id', 'DESC')->paginate(10);
        return view('web.users.company-appeal', compact('jobs'));
    }
}
