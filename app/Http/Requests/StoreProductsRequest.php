<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductsRequest extends FormRequest
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
            'name' => 'required|string|max:50',
            'description' => 'required|string|max:200', 
            'price' => 'required|numeric', 
            'type' => 'required|integer|between:1,6', 
            'is_featured' => 'integer|between:7,10|nullable',
            'picture' => 'required|image',
            'enabled' => 'integer|between:0,1'
        ];
    }

    public function messages()
    {
    return [
        'name.required' => 'Este campo es requerido.',
        'name.string' => 'Ese formato no es compatible.',
        'name.max'  => 'Máximo 50 caracteres.',
        'description.required'  => 'Este campo es requerido.',
        'description.string'  => 'Ese formato no es compatible.',
        'description.max'  => 'Máximo 200 caracteres.',
        'price.required'  => 'Este campo es requerido.',
        'price.numeric'  => 'Ese formato no es compatible.',
        'type.required'  => 'Este campo es requerido.',
        'type.integer'  => 'Ese formato no es compatible.',
        'is_featured.integer'  => 'Ese formato no es compatible.',
        'picture.required'  => 'Este campo es requerido.',
        'picture.image'  => 'Ese formato no es compatible.',
        'enabled.integer'  => 'Ese formato no es compatible.',
        'enabled.between'  => 'Ese formato no es compatible.',
    ];
    }
}
