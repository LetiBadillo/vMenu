<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrdersRequest extends FormRequest
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
            'user_id' => 'required|integer', 
            'total' => 'required|numeric', 
        ];
    }
    public function messages()
    {
    return [
        'user_id.required' => 'Este campo es requerido.',
        'user_id.integer' => 'Ese formato no es compatible.',
        'total.required'  => 'Este campo es requerido.',
        'total.numeric'  => 'Ese formato no es compatible.',
    ];
    }
}
