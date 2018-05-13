<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePatientRequest extends FormRequest
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
            'name'=> 'required|string|max:60', 
            'last_name'=> 'required|string|max:60', 
            'email'=> 'required|email', 
            'age'=> 'required|integer', 
            'bloodtype'=> 'required|integer', 
            'weight'=> 'required|numeric', 
            'alergies'=> 'nullable|string|max:255', 
            'chronic'=> 'nullable|string|max:255', 
            'donate' => 'required|integer|between:0,1'
        ];
    }
}
