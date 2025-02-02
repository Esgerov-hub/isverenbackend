<?php

namespace App\Helpers;
use Carbon\Carbon;

class CvHelper
{
    public static function prepareCvData($request, $guard,$cv)
    {
        if ($request->hasFile('image')) {
            $logoName = time() . '.' . $request->image->extension();
            $logo = $request->image->move(public_path('uploads/cv'), $logoName);
            $logoImage = $logo->getFilename();
        } else {
            $logoImage = !empty($cv['image'])? $cv['image']: NULL;
        }

        if ($request->hasFile('cv_file')) {
            $fileName = time() . '.' . $request->cv_file->extension();
            $file = $request->cv_file->move(public_path('uploads/cv'), $fileName);
            $fileStore = $file->getFilename();
        } else {
            $fileStore = !empty($cv['cv_file'])? $cv['cv_file']: NULL;;
        }

        $user_id = auth()->guard($guard)->user()->id;


        $education = [];
        if (!empty($request->education)){
            $education = array_filter($request->education, function($item) {
                return !is_null($item['name']) && !is_null($item['specialty_name']) || !is_null($item['start_date']) || !is_null($item['end_date']);
            });
        }


        $experiences = [];
        if (!empty($request->experiences)){
            $experiences = array_filter($request->experiences, function($item) {
                return !is_null($item['company']) && !is_null($item['position']) || !is_null($item['start_date']) || !is_null($item['end_date']);
            });
        }
        $awards = [];
        if (!empty($request->awards)){
            $awards = array_filter($request->awards, function($item) {
                return !is_null($item['certificates_name']) || !is_null($item['certificates_date']);
            });
        }
        $lang = [];
        if (!empty($request->lang)){
            $lang = array_filter($request->lang, function($item) {
                return !is_null($item['lang']) || !is_null($item['levels']);
            });
        }
        $skill = [];
        if (!empty($request->skill)){
            $skill = array_filter($request->skill, function($item) {
                return !is_null($item);
            });
        }

        $portfolio = [];
        if (!empty($request->portfolio)){
            $portfolio = array_filter($request->portfolio, function($item) {
                return !is_null($item['portfolio_name']) || !is_null($item['portfolio_link']);
            });
        }

        $data = [
            "user_id" => $user_id,
            "city_id" => $request->city_id,
            "image" => $logoImage,
            "name" => $request->name,
            "surname" => $request->surname,
            "description" => $request->description,
            "birthday" => $request->birthday,
            "phone" => $request->phone,
            "email" => $request->email,
            "marriage" => !empty($request->marriage)? 1: 0,
            "gender" => ($request->gender == 'man')? 1:2,
            "profession_id" => $request->profession_id,
            "category_id" => $request->category_id,
            "sub_category_id" => $request->sub_category_id,
            "work_exp" => $request->work_exp,
            "education_type" => $request->education_type,
            "type_id" => $request->type_id,
            "min_salary" => $request->min_salary,
            "max_salary" => $request->max_salary,
            "cv_file" => $fileStore,
            "work_experience" => $experiences,
            "education" => $education,
            "diploma_certificate" => $awards,
            "language_skills" =>  $lang,
            "work_skills" => $skill,
            "driving_license" => $request->drive,
            "portfolio" => $portfolio,
            'created_at' => (isset($cv->id) ? NULL: Carbon::now()),
            'updated_at' => (isset($cv->id) ? Carbon::now(): NULL),
        ];
//        dd($data);
        return $data;
    }
}
