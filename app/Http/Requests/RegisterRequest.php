<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name' => 'bail|required|string|max:255',
            'email' => 'bail|required|string|email|max:255|unique:users',
            'password' => 'bail|required|string|min:8|confirmed',
        ];
    }

    public function messages() 
    {
        return [
            'name.required' =>  trans('language.message.name_required'),
            'name.max' => trans('language.message.name_max'),
            'email.required' => trans('language.message.name_required'),
            'email.email' => trans('language.message.email_email'),
            'email.unique' => trans('language.message.email_unique'),
            'password.required' => trans('language.message.password_required'),
            'password.min' => trans('language.message.password_min'),
            'password.confirmed' => trans('language.message.password_confirmed'),
        ];
    }
}
