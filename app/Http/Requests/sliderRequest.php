<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class sliderRequest extends FormRequest
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
            'name' => 'required|unique:sliders',
            'description'=>  'required',
            'photo'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => ' اسم الاسليدر مطلوب.',
            'name.unique' => ' اسم الاسليدر موجود من قبل.',
            'description.required' => '  وصف الاسليدر مطلوب.',
            'photo.required' => '  صوره الاسليدر مطلوبه.',

        ];
    }
}
