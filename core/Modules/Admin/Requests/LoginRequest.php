<?php

namespace Core\Modules\Admin\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => ['required', 'string'],
            'password' => ['required', 'string'],
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'email.required' => 'Email is not empty please try again',
    //         'email.email' => 'Not correct email try again',
    //         'password.' => 'Password is not empty try again'
    //     ];
    // }
}
