<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            'fullname' => 'bail|required|string',
            'student_no' => 'bail|required|string|unique:students',
            'address' => 'bail|required',
        ];
    }

    public function messages()
    {
        return [
            'fullname.required' => trans('language.message.fullname_required'),
            'student_no.required' => trans('language.message.student_no_required'),
            'student_no.unique' => trans('language.message.student_no_unique'),
            'address.required' => trans('language.message.address_required'),
            
            
        ];
    }
}
