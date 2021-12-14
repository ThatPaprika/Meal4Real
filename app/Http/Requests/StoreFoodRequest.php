<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFoodRequest extends FormRequest
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
            'type' => 'required|string|min:3|max:100',
            'meal_name' => 'required|string|min:3|max:30',
            'description' => 'required|string|min:3|max:200',
            'address' => 'required|string|min:3|max:100'
        ];
    }

    // Custom error message
    public function messages()
    {
        return [
            'type.required' => 'Type is mandatory !',
            'type.string' => 'Type must be only letters !',
            'type.between' => 'Type must be between 3 and 100 !',
            'meal_name.required' => 'Name is mandatory !',
            'meal_name.string' => 'Name must be only letters !',
            'meal_name.between' => 'Name must be between 3 and 30 !',
            'description.required' => 'Description is mandatory !',
            'description.string' => 'Description must be a short text !',
            'description.between' => 'Description must be between 3 and 200 characters !',
            'address.required' => 'Adress is mandatory !',
            'address.string' => 'Address must be valid !',
            'address.between' => 'Address must be between 3 and 100 characters !'
        ];
    }
}
