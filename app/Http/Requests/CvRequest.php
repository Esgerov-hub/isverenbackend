<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Lang;

class CvRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'surname' => 'required',
            'description' => 'required',
            'birthday' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'profession_id' => 'required',
            'city_id' => 'required',
            'category_id' => 'required',
            'type_id' => 'required',
            'min_salary' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' =>  Lang::get('validation.required', ['attribute' => ':attribute']),
        ];
    }
}
