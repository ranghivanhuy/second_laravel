<?php

namespace App\Http\Requests\Users;

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
            'name' => 'required',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name cannot be blank',
            'email.required' => 'Email cannot be blank',
            'email.email' => 'Invalid email',
            'email.unique' => 'Email already exists',
            'password.required' => 'Password cannot be blank',
            'password_confirmation.required' => 'Password confirmation cannot be blank',
            'password_confirmation.same' => 'Password confirmation doest not match'
        ];
    }
}
