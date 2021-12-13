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
            'type' =>'required|string|min:10|max:100',
            'meal_name' => 'required|string|min:10|max:30',
            'description'=> 'required|string|min:50|max:200',
            'adress'=>'required|string|min:20|max:100'  
        ];
    }

    // Custom error message
    public function messages()
    {
        return [
            'type.required' => 'Type is mandatory !',
            'type.string'=>'Type must be only letters !',
            'type.between'=>'Type must be between 10 and 100 !',
            'meal_name.required' => 'Name is mandatory !',
            'meal_name.string' => 'Name must be only letters !',
            'meal_name.between'=>'Name must be between 10 and 30 !',
            'description.required' => 'Description is mandatory !',
            'description.string' => 'Description must only have letters !',
            'description.between' => 'Description must be between 50 and 200 !',
            'adress.required' => 'Adress is mandatory !',
            'adress.string' => 'Adress must be only letters',
            'adress.between' => 'Adress must be between 20 and 100'
        ];
    }
}