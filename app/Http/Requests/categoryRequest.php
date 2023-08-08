<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class categoryRequest extends FormRequest
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
            'name' => 'required|unique:categories',
            'description' => 'required',
            'photo'=>  'required',

        ];
    }

    public function messages()
    {
        return [
            'name.required' => ' اسم الكاتيجوري مطلوب.',
            'name.unique' => ' اسم الكاتيجوري موجود من قبل.',
            'description.required' => '  وصف الكاتيجوري مطلوب.',
            'photo.required' => '  صوره الكاتيجوري مطلوبه.',

        ];
    }
}
