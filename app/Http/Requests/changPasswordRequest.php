<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class changPasswordRequest extends FormRequest
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
            'current_password' => 'required|min:6',
            'password' => 'required|min:6',
            'password_confirmation' => 'required|same:password|min:6',
        ];
    }
    public function messages()
    {
        return [
            'current_password.required'=>'كلمه السر مطلوبه',
            'password.required'=>'كلمه السر مطلوبه',
            'password_confirmation.required'=>'كلمه السر مطلوبه',
            'current_password.min'=>'كلمه السر يجب الا تكون علي الاقل 6 احرف',
            'password.min'=>'كلمه السر يجب الا تكون علي الاقل 6 احرف',
            'password_confirmation.min'=>'كلمه السر يجب الا تكون علي الاقل 6 احرف',
            'password_confirmation.same'=>'يجب كلمه السر تكون مطابقه لتاكيد كلمه السر',


        ];
    }
}
