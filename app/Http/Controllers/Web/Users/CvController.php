<?php

namespace App\Http\Controllers\Web\Users;

use App\Helpers\CvHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\CvRequest;
use App\Models\Category;
use App\Models\City;
use App\Models\Cv;
use App\Models\Job;
use App\Models\JobType;
use Illuminate\Http\Request;

class CvController extends Controller
{

    protected $uses;

    public function __construct()
    {
        $this->user = auth()->guard('web')->user();
    }

    public function list()
    {
        $data = Cv::where('user_id', $this->user->id)->first();
        $cities = City::orderBy('name', 'ASC')->get();
        $categories = Category::where('status', 1)->orderBy('name', 'ASC')->get();
        $professions = Job::where('status', 1)
            ->orderBy('title', 'ASC')
            ->get()
            ->unique('title');
             $subcategories = Category::whereNotNull('parent_id')->where('status', 1)->orderBy('name', 'ASC')->get();
        $types = JobType::orderBy('name', 'ASC')->get();
        return view('web.users.cv', compact('data','professions', 'cities', 'categories', 'types', 'subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CvRequest $cvRequest)
    {
        try {
            $guard = 'web';
            $cv = null;
            $cvData = CvHelper::prepareCvData($cvRequest, $guard,$cv);
            $cv  = Cv::create($cvData);
            if (!empty($cv->id)) {
                return redirect()->back()->with('success', 'Cv uğurla əlavə edildi');
            }else {
                return redirect()->back()->with('success', 'Cv uğurla əlavə edilmedi');
            }
        } catch (\Exception $e) {
            return back()->with('errors', 'Xəta baş verdi: ' . $e->getMessage());
        }
    }

    public function update(CvRequest $cvRequest, $id)
    {
        try {
            $cv = Cv::where(['id' => $id, 'user_id' => $this->user->id])->first();

            $guard = 'web';
            $cvData = CvHelper::prepareCvData($cvRequest, $guard,$cv);

            $cv  = Cv::where(['id' => $id, 'user_id' => $this->user->id])->update($cvData);
            if (!empty($cv)) {
                return redirect()->back()->with('success', 'Cv uğurla düzəliş edildi');
            }else {
                return redirect()->back()->with('success', 'Cv uğurla düzəliş edilmedi');
            }
        } catch (\Exception $e) {
            return back()->with('errors', 'Xəta baş verdi: ' . $e->getMessage());
        }
    }

}
