<?php

namespace App\Helpers;

use App\Http\Middleware\Admin;
use App\Models\Translation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class JobHelper
{
    public static function prepareJobData($request, $guard)
    {
        $titleData = [];
        $descriptionData = [];
        $locales = Translation::where('status', 1)->get();

        foreach ($locales as $locale) {
            $code = isset($locale['code']) ? $locale['code'] : '';
            $titleData[$code] = $request->input("title.$code", '');
            $descriptionData[$code] = $request->input("description.$code", '');
        }

        if ($request->hasFile('logo')) {
            $logoName = time() . '.' . $request->logo->extension();
            $logo = $request->logo->move(public_path('uploads/jobs'), $logoName);
            $logoImage = $logo->getFilename();
        } else {
            $logoImage = NULL;
        }

        $user_id = !empty($request->user_id)? $request->user_id: auth()->guard($guard)->user()->id;
        //        dd($user_id);
        $salary = $request->min_salary . "-" . $request->max_salary;
        $jobData = [
            'title' => $titleData,
            'description' => $descriptionData,
            'status' => 0,
            'price' => (isset($request->price) ? $request->price : $salary),
            'user_id' => $user_id,
            'city_id' => $request->city_id,
            'company_id' => $request->company_id,
            'job_type_id' => $request->job_type_id,
            'email' => $request->email ?? '',
            'phone' => $request->phone ?? '',
            'logo' => $logoImage,
            'created_at' => (isset($request->created_at) ? Carbon::parse($request->created_at)->format('Y-m-d H:i:s') : Carbon::now()),
            'updated_at' => (isset($request->updated_at) ? Carbon::parse($request->updated_at)->format('Y-m-d H:i:s') : Carbon::now()->addMonth()),
        ];

//                dd($jobData);
        return $jobData;
    }
}
