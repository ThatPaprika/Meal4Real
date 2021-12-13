<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'first_name' => 'required|string|min:3|max:255',
            'last_name' => 'required|string|min:3|max:255', // 'required|numeric|between:2,100'
            'email' => 'required|string|min:2|max:255',
            'password' => 'required|string|min:6|max:16'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'first_name.required' => 'First name is mandatory and at least 3 !',
            'last_name.required' => 'Last name is mandatory and at least 3 !',
            'email.required' => 'Email is mandatory !',
            'password.required' => 'Password is mandatory and between 6 and 16 characters !'
        ];
    }
}
