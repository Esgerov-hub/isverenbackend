<?php

namespace App\Http\Controllers\Web\Users;

use App\Helpers\JobHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\JobRequest;
use App\Models\Category;
use App\Models\City;
use App\Models\Company;
use App\Models\Job;
use App\Models\JobCategory;
use App\Models\JobType;
use App\Models\User;
use App\Repositories\JobRepositoryImpl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{

    public function index()
    {
        $user = auth()->guard('web')->user();
        $jobs = Job::with('jobcategory', 'city', 'jobType')->where('user_id', $user->id)->orderBy('id','DESC')->paginate(10);
        return view('web.users.jobs.list', compact('jobs'));
    }

    public function create()
    {
        $cities = City::orderBy('name', 'ASC')->get();
        $users = User::orderBy('name', 'ASC')->get();
        $user_id = auth()->guard('web')->user();
        $companies = Company::orderBy('name', 'ASC')->where('user_id', $user_id->id)->get();        $categories = Category::with('jobCategory', 'subcategory')
            ->where('status', 1)
            ->get();
        $subcategories = Category::whereNotNull('parent_id')->orderBy('name', 'ASC')->get();


        $types = JobType::orderBy('name', 'ASC')->get();

        return view('web.users.jobs.create', compact('companies', 'cities', 'users', 'categories', 'types', 'subcategories'));
    }

    public function store(JobRequest $jobRequest)
    {

        try {
            $guard = 'web';
            $jobData = JobHelper::prepareJobData($jobRequest, $guard);
            $job  = Job::create($jobData);
            if (!empty($job->id)) {
                JobCategory::create(['job_id' => $job->id, 'category_id' => $jobRequest->category_id, 'sub_category_id' => $jobRequest->sub_category_id]);
                return redirect()->route('web.user.jobs.list')->with('success', 'Vakansya adı uğurla əlavə edildi');
            }
        } catch (\Exception $e) {
            return back()->with('errors', 'Xəta baş verdi: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        $job = Job::with('jobcategory')->where('id', $id)->first();
        $cities = City::orderBy('name', 'ASC')->get();
        $users = User::orderBy('name', 'ASC')->get();
        $companies = Company::orderBy('name', 'ASC')->get();
        $categories = Category::with('jobCategory', 'subcategory')
            ->where('status', 1)
            ->get();
        $subcategories = Category::whereNotNull('parent_id')->orderBy('name', 'ASC')->get();
        $types = JobType::orderBy('name', 'ASC')->get();

        return view('web.users.jobs.edit', compact('job', 'companies', 'cities', 'users', 'categories', 'types', 'subcategories'));
    }

    public function update(Request $jobRequest, $id)
    {
        try {
            $guard = 'web';
            $jobData = JobHelper::prepareJobData($jobRequest, $guard);
//            dd($jobData);

            if (Job::where('id', $id)->first()) {
                Job::where('id', $id)->update($jobData);
                JobCategory::where('job_id', $id)->update(['category_id' => $jobRequest->category_id, 'sub_category_id' => $jobRequest->sub_category_id]);
                return redirect()->route('web.user.jobs.list')
                    ->with('success', 'Vakansya uğurla dəyişdirildi');
            }else{
                return redirect()->route('web.user.jobs.list')
                    ->with('errors', 'Vakansyada heç bir dəyişiklik yoxdur');
            }
        } catch (\Exception $e) {
            return back()->with('errors', 'Xəta baş verdi: ' . $e->getMessage());
        }
    }
}
