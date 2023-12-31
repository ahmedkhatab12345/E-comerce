<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class brandRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return  true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:brands',
            'photo' => 'required',
            'description'=>  'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => ' اسم البراند مطلوب.',
            'name.unique' => ' اسم البراند موجود من قبل.',
            'photo.required' => '  صوره البراند مطلوبه.',
            'description.required' => '  وصف البراند مطلوب.',
        ];
    }
}
