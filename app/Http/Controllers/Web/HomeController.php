<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Cv;
use App\Models\Job;
use App\Models\StaticPage;
use App\Models\User;
use App\Models\Category;
use App\Models\City;
use App\Models\Follower;
use App\Models\JobType;
use Illuminate\Http\Request;
use App\Services\SEOManager;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use PDF;

class HomeController extends Controller
{
    public function search(Request $request)
    {

        $categoryId = $request->input('categoryId');
        $jobTypeId = $request->input('jobTypeId');
        $citySelect = $request->input('citySelect');
        $saleSelect = $request->input('saleSelect');
        $jobsQuery = Job::where('status', 1);

        $searchParams = $request->only(['categoryId', 'jobTypeId', 'citySelect', 'saleSelect']);


        if ($categoryId) {
            $jobsQuery->whereHas('categories', function ($query) use ($categoryId) {
                $query->where('category_id', $categoryId)
                    ->orWhere('sub_category_id', $categoryId);
            });
        }

        if ($jobTypeId) {
            $jobsQuery->where('job_type_id', $jobTypeId);
        }

        if ($citySelect) {
            $jobsQuery->where('city_id', $citySelect);
        }


        if ($saleSelect) {
            list($minSalary, $maxSalary) = explode('-', $saleSelect);
            $minSalary = intval($minSalary);
            $maxSalary = intval($maxSalary);
            $jobsQuery->where('price', '>=', $minSalary)->where('price', '<=', $maxSalary);
        }

        $jobs = $jobsQuery->orderBy(DB::raw("DATE_FORMAT(created_at, '%m-%d')"), 'DESC')->paginate(5)->appends(request()->query());

        foreach ($searchParams as $key => $value) {
            $jobs->appends([$key => $value]);
        }

        $categories = Category::with('jobCategory', 'subcategory')->where('status', 1)->orderBy('name', 'ASC')->get();
        $jobType = JobType::with('job')->where('status', 1)->orderBy('name', 'ASC')->get();
        $cities = City::with('city')->where('status', 1)->orderByRaw("JSON_UNQUOTE(JSON_EXTRACT(name, '$.az')) ASC")->get();

        return view('web.search', compact('categories', 'jobType', 'jobs', 'cities', 'categoryId', 'jobTypeId', 'citySelect', 'saleSelect'));
    }

    public function home(Request $request)
    {

        // $jobs = Cache::remember('cachekey', Carbon::now()->addHour(1), function () {
        //     return Job::paginate(2);
        // });

        $categoryId = $request->input('categoryId');
        $jobTypeId = $request->input('jobTypeId');
        $citySelect = $request->input('citySelect');
        $saleSelect = $request->input('saleSelect');

        if (request()->has('categoryId') || request()->has('jobTypeId') || request()->has('citySelect') || request()->has('saleSelect')) {

            $jobs = Job::where(function ($query) use ($categoryId, $jobTypeId, $citySelect, $saleSelect) {
                $query->where('status', 1);
                if ($categoryId) {
                    $query->whereHas('categories', function ($query) use ($categoryId) {
                        $query->where('category_id', $categoryId)
                            ->orWhere('sub_category_id', $categoryId);
                    });
                }
                if ($jobTypeId) {
                    $query->where('job_type_id', $jobTypeId);
                }
                if ($citySelect) {
                    $query->where('city_id', $citySelect);
                }
                if ($saleSelect) {
                    list($minSalary, $maxSalary) = explode('-', $saleSelect);
                    $minSalary = intval($minSalary);
                    $maxSalary = intval($maxSalary);
                    $query->where('price', '>=', $minSalary)->where('price', '<=', $maxSalary);
                }
            });

            $jobCount = $jobs->orderBy(DB::raw("DATE_FORMAT(created_at, '%m-%d')"), 'DESC')->count();
            $jobs = $jobs->orderBy(DB::raw("DATE_FORMAT(created_at, '%m-%d')"), 'DESC')->get();
            // $view = view('components.web.job-data', compact('jobs'))->render();
            return response()->json(['jobCount' => $jobCount]);
        }


        if (request()->has('q')) {
            $jobs = Job::where('status', 1)
                ->where(function ($query) {
                    $searchTerm = strtolower(request('q'));
                    $query->whereRaw('LOWER(title) LIKE ?', ["%$searchTerm%"])
                        ->orWhereRaw('LOWER(description) LIKE ?', ["%$searchTerm%"]);
                    // Add more columns as needed for your search
                })
                ->orderBy(DB::raw("DATE_FORMAT(created_at, '%m-%d')"), 'DESC')
                ->paginate(20);
        } else {
            $jobs = Job::where('status', 1)->orderBy(DB::raw("DATE_FORMAT(created_at, '%y-%m-%d')"), 'DESC')->orderBy(DB::raw("DATE_FORMAT(created_at, '%d')"), 'DESC')->paginate(20);
        }

        if ($request->ajax()) {
            $view = view('components.web.job-data', compact('jobs'))->render();
            return response()->json(['html' => $view, 'jobs' => $jobs]);
        }

        $categories = Category::with('jobCategory', 'subcategory')->where('status', 1)->orderBy('name', 'ASC')->get();
        $jobType = JobType::with('job')->where('status', 1)->orderBy('name', 'ASC')->get();

        $cities = City::with('city')->where('status', 1)->orderByRaw("JSON_UNQUOTE(JSON_EXTRACT(name, '$.az')) ASC")->get();

        return view('web.home', compact('categories', 'jobType', 'jobs', 'cities'));
    }

    public function apiVacancy()
    {
        $jobs = Job::where('status', 1)->orderBy(DB::raw("DATE_FORMAT(created_at, '%y-%m-%d')"), 'DESC')->orderBy(DB::raw("DATE_FORMAT(created_at, '%d')"), 'DESC')->paginate(20);
        return response()->json($jobs);
    }

    public function vacancy(Request $request)
    {

        // $jobs = Cache::remember('cachekey', Carbon::now()->addHour(1), function () {
        //     return Job::paginate(2);
        // });

        $categoryId = $request->input('categoryId');
        $jobTypeId = $request->input('jobTypeId');
        $citySelect = $request->input('citySelect');
        $saleSelect = $request->input('saleSelect');

        if (request()->has('categoryId') || request()->has('jobTypeId') || request()->has('citySelect') || request()->has('saleSelect')) {

            $jobs = Job::where(function ($query) use ($categoryId, $jobTypeId, $citySelect, $saleSelect) {
                $query->where('status', 1);
                if ($categoryId) {
                    $query->whereHas('categories', function ($query) use ($categoryId) {
                        $query->where('category_id', $categoryId)
                            ->orWhere('sub_category_id', $categoryId);
                    });
                }
                if ($jobTypeId) {
                    $query->where('job_type_id', $jobTypeId);
                }
                if ($citySelect) {
                    $query->where('city_id', $citySelect);
                }
                if ($saleSelect) {
                    list($minSalary, $maxSalary) = explode('-', $saleSelect);
                    $minSalary = intval($minSalary);
                    $maxSalary = intval($maxSalary);
                    $query->where('price', '>=', $minSalary)->where('price', '<=', $maxSalary);
                }
            });

            $jobCount = $jobs->orderBy(DB::raw("DATE_FORMAT(created_at, '%m-%d')"), 'DESC')->count();
            $jobs = $jobs->orderBy(DB::raw("DATE_FORMAT(created_at, '%m-%d')"), 'DESC')->get();
            // $view = view('components.web.job-data', compact('jobs'))->render();
            return response()->json(['jobCount' => $jobCount]);
        }


        if (request()->has('q')) {
            $jobs = Job::where('status', 1)
                ->where(function ($query) {
                    $searchTerm = strtolower(request('q'));
                    $query->whereRaw('LOWER(title) LIKE ?', ["%$searchTerm%"])
                        ->orWhereRaw('LOWER(description) LIKE ?', ["%$searchTerm%"]);
                    // Add more columns as needed for your search
                })
                ->orderBy(DB::raw("DATE_FORMAT(created_at, '%m-%d')"), 'DESC')
                ->paginate(20);
        } else {
            $jobs = Job::where('status', 1)->orderBy(DB::raw("DATE_FORMAT(created_at, '%y-%m-%d')"), 'DESC')->orderBy(DB::raw("DATE_FORMAT(created_at, '%d')"), 'DESC')->paginate(20);
        }

        if ($request->ajax()) {
            $view = view('components.web.job-data', compact('jobs'))->render();
            return response()->json(['html' => $view, 'jobs' => $jobs]);
        }

        $categories = Category::with('jobCategory', 'subcategory')->where('status', 1)->orderBy('name', 'ASC')->get();
        $jobType = JobType::with('job')->where('status', 1)->orderBy('name', 'ASC')->get();

        $cities = City::with('city')->where('status', 1)->orderByRaw("JSON_UNQUOTE(JSON_EXTRACT(name, '$.az')) ASC")->get();

        return view('web.vacancy', compact('categories', 'jobType', 'jobs', 'cities'));
    }

    public function interact(Request $request)
    {
        //        dd('sdc');

        $jobId = $request->job_id;
        if (auth()->check()) {
            $userId = auth()->user()->id;
            $interactionType = $request->interaction;

            $follow = Follower::where('job_id', $jobId)->where('user_id', $userId)->first();

            if ($follow) {
                $follow->interaction_type = $interactionType;
                $follow->delete();
            } else {
                $follow = new Follower();
                $follow->job_id = $jobId;
                $follow->user_id = $userId;
                $follow->interaction_type = $interactionType;
                $follow->save();
            }
            return response()->json(['interaction' => $interactionType]);
        }
    }

    public function follower()
    {
        $jobs =  Job::whereHas('follower', function ($query) {
            $query->where('user_id', auth('web')->user()->id);
        })
            ->get();
        return view('web.follower', compact('jobs'));
    }

    public function jobDetails($id, SEOManager $seoManager)
    {
        $job = Job::with('jobcategory', 'city', 'jobType', 'company')->where('status', 1)->where('id', $id)->first();

        if (empty($job)) {
            return redirect(route('web.home'));
        }
        $datas = Job::with('jobcategory', 'city', 'jobType', 'jobUser', 'jobSeo')->where('status', 1)->where('company_id', $job->company_id)
            ->orderBy('id', 'DESC')->limit(3)->get();

        $jobData = json_decode($job, true);

        $language = 'az';

        if (isset($jobData['title'][$language])) {
            $title = $jobData['title'][$language] . " | " . $jobData['company']['name'][$language] . " | İşveren.az";

            // $title = iconv('UTF-8', 'ISO-8859-9//TRANSLIT', $title);

            SEOMeta::setTitle(htmlentities($title, ENT_QUOTES, 'UTF-8'));
        }

        if (isset($jobData['description'][$language])) {
            SEOMeta::setDescription($jobData['description'][$language]);
        }

        $viewed = Session::get('reads', []);
        if (!in_array($job->id, $viewed)) {
            $job->increment('reads');
            Session::push('reads', $job->id);
        }
        return view('web.job-details', compact('datas',  'job', 'title'));
    }

    public function about()
    {
        $static_pages = StaticPage::where('type', 'about')->first();
        $category_count =  Category::where('status', 1)->count();
        $job_count = Job::where('status', 1)->count();
        $user_count =  User::where('status', 1)->count();
        $follower_count = Follower::count();
        return view('web.about', compact(['static_pages', 'category_count', 'job_count', 'user_count', 'follower_count']));
    }

    public function contact()
    {
        return view('web.contact');
    }

    public function contactform(Request $request)
    {

        try {
            $valdate = Validator::make($request->all(), [
                'full_name' => 'required|string',
                'phone' => 'required|string|max:15',
                'email' => 'required|email|max:255',
                'type' => 'required',
                'messages' => 'required|string|min:20|max:512',
            ], [
                'full_name.required' => 'Ad boş olmamalıdır',
                'phone.required' => 'Əlaqə nömrəsi boş olmamalıdır',
                'email.required' => 'E-poçt boş olmamalıdır',
                'type.required' => 'Tip boş olmamalıdır',
                'messages.required' => 'Mesaj boş olmamalıdır',
            ]);
            if ($valdate->fails()) {
                return response()->json([
                    'success' => false,
                    'error' => $valdate->messages()
                ]);
            }

            if (!in_array($request->type, ['users', 'company'])) {
                return response()->json([
                    'success' => false,
                    'error' => Lang::get('web.err_type')
                ]);
            }

            $contact = new Contact();
            $contact->full_name = $request->full_name;
            $contact->phone = $request->phone;
            $contact->email = $request->email;
            $contact->type = $request->type;
            $contact->messages = $request->messages;
            $contact->save();
            return response()->json([
                'success' => true,
                'message' => Lang::get('web.contact_success')
            ]);
        } catch (\Exception $e) {
            return back()->with('error', Lang::get('web.error') . $e->getMessage());
        }
    }

    public function companies(Request $request)
    {
        if (request()->has('q')) {
            $companies = Company::select([
                'companies.id',
                'companies.name',
                'companies.address',
                'companies.description',
                'companies.logo',
                'companies.status',
                DB::raw("COUNT(j.id) AS job_count")
            ])
                ->leftJoin('jobs AS j', 'j.company_id', '=', 'companies.id')
                ->where('companies.status', 1)
                ->where(function ($query) {
                    $searchTerm = strtolower(request('q'));
                    $query->whereRaw('LOWER(companies.code) LIKE ?', ["%$searchTerm%"])
                        /*->orWhereRaw('LOWER(j.title) LIKE ?', ["%$searchTerm%"])
                        ->orWhereRaw('LOWER(j.description) LIKE ?', ["%$searchTerm%"])*/;
                    // Add more columns as needed for your search
                })
                //                 ->orderBy('companies.code', 'asc')
                ->groupBy('companies.id', 'companies.name', 'companies.address', 'companies.description', 'companies.status')
                ->paginate(5);
        } else {
            $companies = Company::select([
                'companies.id',
                'companies.name',
                'companies.code',
                'companies.address',
                'companies.description',
                'companies.logo',
                'companies.status',
                DB::raw("COUNT(j.id) AS job_count")
            ])
                ->leftJoin('jobs AS j', 'j.company_id', '=', 'companies.id')
                ->where('companies.status', 1)
                ->orderBy('companies.code', 'asc')
                ->groupBy('companies.id', 'companies.name', 'companies.address', 'companies.description', 'companies.status')
                ->paginate(5);
        }
        if ($request->ajax()) {
            $view = view('components.web.companies-data', compact('companies'))->render();
            return response()->json(['html' => $view, 'companies' => $companies]);
        }
        return view('web.companies', compact('companies'));
    }

    public function companyDetails($id, Request $request)
    {
        $categoryId = $request->input('categoryId');
        $jobTypeId = $request->input('jobTypeId');
        $citySelect = $request->input('citySelect');
        $saleSelect = $request->input('saleSelect');

        if (request()->has('categoryId') || request()->has('jobTypeId') || request()->has('citySelect') || request()->has('saleSelect')) {

            $jobs = Job::where('company_id', $id)->where(function ($query) use ($categoryId, $jobTypeId, $citySelect, $saleSelect) {
                $query->where('status', 1);
                if ($categoryId) {
                    $query->whereHas('categories', function ($query) use ($categoryId) {
                        $query->where('category_id', $categoryId)
                            ->orWhere('sub_category_id', $categoryId);
                    });
                }
                if ($jobTypeId) {
                    $query->where('job_type_id', $jobTypeId);
                }
                if ($citySelect) {
                    $query->where('city_id', $citySelect);
                }
                if ($saleSelect) {
                    list($minSalary, $maxSalary) = explode('-', $saleSelect);
                    $minSalary = intval($minSalary);
                    $maxSalary = intval($maxSalary);
                    $query->where('price', '>=', $minSalary)->where('price', '<=', $maxSalary);
                }
            });

            $jobCount = $jobs->orderBy(DB::raw("DATE_FORMAT(created_at, '%m-%d')"), 'DESC')->count();
            $jobs = $jobs->orderBy(DB::raw("DATE_FORMAT(created_at, '%m-%d')"), 'DESC')->get();
            $view = view('web.company-details', compact('jobs'))->render();
            return response()->json(['html' => $view, 'jobCount' => $jobCount]);
        }


        if (request()->has('q')) {
            $jobs = Job::where('status', 1)->where('company_id', $id)
                ->where(function ($query) {
                    $searchTerm = strtolower(request('q'));
                    $query->whereRaw('LOWER(title) LIKE ?', ["%$searchTerm%"])
                        ->orWhereRaw('LOWER(description) LIKE ?', ["%$searchTerm%"]);
                    // Add more columns as needed for your search
                })
                ->orderBy(DB::raw("DATE_FORMAT(created_at, '%m-%d')"), 'DESC')
                ->paginate(20);
        } else {
            $jobs = Job::where('status', 1)->where('company_id', $id)->orderBy(DB::raw("DATE_FORMAT(created_at, '%y-%m-%d')"), 'DESC')->orderBy(DB::raw("DATE_FORMAT(created_at, '%d')"), 'DESC')->paginate(20);
        }

        if ($request->ajax()) {
            $view = view('components.web.job-data', compact('jobs'))->render();
            return response()->json(['html' => $view, 'jobs' => $jobs]);
        }

        $categories = Category::with('jobCategory', 'subcategory')->where('status', 1)->orderBy('name', 'ASC')->get();
        $jobType = JobType::with('job')->where('status', 1)->orderBy('name', 'ASC')->get();

        $cities = City::with('city')->where('status', 1)->orderBy('name', 'ASC')->get();

        return view('web.company-details', compact('categories', 'jobType', 'jobs', 'cities'));
    }

    public function blogs(Request $request)
    {
        $blogs = Blog::with('jobcategory', 'user')->where('status', 1)->orderBy(DB::raw("DATE_FORMAT(created_at, '%y-%m-%d')"), 'DESC')->orderBy(DB::raw("DATE_FORMAT(created_at, '%d')"), 'DESC')->paginate(3);
        if ($request->ajax()) {
            $view = view('components.web.blogs-data', compact('blogs'))->render();
            return response()->json(['html' => $view, 'blogs' => $blogs]);
        }
        $blog = Blog::with('jobcategory', 'user')->where('status', 1)
            ->orderBy('reads', 'DESC')
            ->orderBy(DB::raw("DATE_FORMAT(created_at, '%y-%m-%d')"), 'DESC')
            ->orderBy(DB::raw("DATE_FORMAT(created_at, '%d')"), 'DESC')->first();

        return view('web.blogs', compact('blogs', 'blog'));
    }

    public function blogDetails($id, SEOManager $seoManager)
    {
        $blog = Blog::with('jobcategory')->where('status', 1)->where('id', $id)->first();

        if (empty($blog)) {
            return redirect(route('web.blogs'));
        }

        $datas = Blog::with('jobcategory')->where('status', 1)
            ->where('category_id', $blog->category_id)
            ->orderBy('id', 'DESC')->limit(6)->get();

        $blogData = json_decode($blog, true);

        $language = 'az';

        if (isset($blogData['title'][$language])) {
            $title = $blogData['title'][$language] . " | İşveren.az";
            SEOMeta::setTitle(htmlentities($title, ENT_QUOTES, 'UTF-8'));
        }

        if (isset($blogData['description'][$language])) {
            SEOMeta::setDescription($blogData['description'][$language]);
        }

        $viewed = Session::get('reads', []);
        if (!in_array($blog->id, $viewed)) {
            $blog->increment('reads');
            Session::push('reads', $blog->id);
        }
        return view('web.blog-details', compact('datas',  'blog', 'title'));
    }

    public function cv(Request $request)
    {
        $categoryId = $request->input('categoryId');
        $jobTypeId = $request->input('jobTypeId');
        $citySelect = $request->input('citySelect');
        $saleSelect = $request->input('saleSelect');

        if (request()->has('categoryId') || request()->has('jobTypeId') || request()->has('citySelect') || request()->has('saleSelect')) {
            $cv = Cv::with('profession', 'city', 'category')->where(function ($query) use ($categoryId, $jobTypeId, $citySelect, $saleSelect) {
                $query->where('status', 1);
                if ($categoryId) {
                    $query->where('category_id', $categoryId)->orWhere('sub_category_id', $categoryId);
                }
                if ($jobTypeId) {
                    $query->where('type_id', $jobTypeId);
                }
                if ($citySelect) {
                    $query->where('city_id', $citySelect);
                }
                if ($saleSelect) {
                    list($minSalary, $maxSalary) = explode('-', $saleSelect);
                    $minSalary = intval($minSalary);
                    $maxSalary = intval($maxSalary);
                    $query->where('min_salary', '>=', $minSalary)->where('max_salary', '<=', $maxSalary);
                }
            });

            $cvCount = $cv->orderBy(DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d %H:%i:%s')"), 'DESC')->count();
            $cv = $cv->orderBy(DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d %H:%i:%s')"), 'DESC')->get();
        } elseif (request()->has('q')) {
            $cv = Cv::with('profession', 'city', 'category','subCategory')->where('status', 1)
                ->where(function ($query) {
                    $searchTerm = strtolower(request('q'));
                    $query->whereRaw('LOWER(name) LIKE ?', ["%$searchTerm%"])
                        ->orWhereRaw('LOWER(surname) LIKE ?', ["%$searchTerm%"]);
                    // Add more columns as needed for your search
                })
                ->orderBy(DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d %H:%i:%s')"), 'DESC')
                ->paginate(20);
        } else {
            $cv = Cv::with('profession', 'city', 'category','subCategory')->where('status', 1)->orderBy(DB::raw("DATE_FORMAT(created_at, '%Y-%m-%d %H:%i:%s')"), 'DESC')->orderBy(DB::raw("DATE_FORMAT(created_at, '%d')"), 'DESC')->paginate(20);
        }

        if ($request->ajax()) {
            $view = view('components.web.cv-data', compact('cv'))->render();
            return response()->json(['html' => $view, 'cv' => $cv]);
        }

        $categories = Category::with('jobCategory', 'subcategory')->where('status', 1)->orderBy('name', 'ASC')->get();
        $jobType = JobType::with('job')->where('status', 1)->orderBy('name', 'ASC')->get();
        $cities = City::with('city')->where('status', 1)->orderBy('name', 'ASC')->get();

        return view('web.cv', compact('categories', 'jobType', 'cv', 'cities'));
    }

    public function cvDetails($id, SEOManager $seoManager)
    {
        $data = Cv::with('profession', 'city', 'category')->where('status', 1)->where('id', $id)->first();


        if (empty($data)) {
            return redirect(route('web.cv'));
        }

        $datas = Blog::with('jobcategory')->where('status', 1)
            ->where('category_id', $data->category_id)
            ->orderBy('id', 'DESC')->limit(6)->get();

        $cvData = json_decode($data->profession, true)['title']['az'] ?? '';


        if (isset($data['name']) || isset($cvData)) {
            $title = $data['name'] . " " . $data['surname'] . " " . $cvData . " | İşveren.az";
            SEOMeta::setTitle(htmlentities($title, ENT_QUOTES, 'UTF-8'));
        }

        if (isset($data['description'])) {
            SEOMeta::setDescription($data['description']);
        }

        $viewed = Session::get('reads', []);
        if (!in_array($data->id, $viewed)) {
            $data->increment('reads');
            Session::push('reads', $data->id);
        }
        return view('web.cv-details', compact('datas', 'data', 'title'));
    }

    public function professions(Request $request)
    {
        $index = $request->input('index', 'A');
        $search = $request->input('search', '');

        $query = Job::query();

        if ($search) {
            $query->where('title->az', 'like', '%' . $search . '%');
        } else {
            $query->where('title->az', 'like', $index . '%');
        }
        $query->orderBy('created_at', 'desc');

        $jobs = $query->paginate(10);

        return view('web.profession', compact('jobs', 'index'));
    }

    public function autocomplete(Request $request)
    {
        $query = $request->input('query');
        $jobs = Job::where('title->az', 'like', '%' . $query . '%')->get();

        return response()->json($jobs);
    }

    public function downloadCv($id)
    {
        $data = Cv::with(['profession', 'city', 'category'])
            ->where('status', 1)
            ->where('id', $id)
            ->firstOrFail();

        $pdf = PDF::loadView('web.users.cv-pdf', compact('data'));

        $fileName = 'isveren_' . strtolower(str_replace(' ', '_', $data->name)) . '.pdf';

        return $pdf->download($fileName);
    }

}
