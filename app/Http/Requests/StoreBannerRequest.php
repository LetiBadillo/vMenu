<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBannerRequest extends FormRequest
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
            'product_id' => 'integer', 
            'title' => 'required|string|max:50', 
            'description' => 'required|string|max:200', 
            'price' => 'numeric', 
            'small_text' => 'string', 
            'picture' => 'required|image|mimetypes:jpg,png',
            'enabled' => 'integer|between:0,1'
        ];
    }

    public function messages()
    {
    return [
        'product_id.integer' => 'Ese formato no es compatible',
        'title.required' => 'Este campo es requerido.',
        'title.string' => 'Ese formato no es compatible.',
        'title.max'  => 'Máximo 50 caracteres.',
        'description.required'  => 'Este campo es requerido.',
        'description.string'  => 'Ese formato no es compatible.',
        'description.max'  => 'Máximo 200 caracteres.',
        'price.numeric'  => 'Ese formato no es compatible.',
        'picture.required'  => 'Este campo es requerido.',
        'picture.image'  => 'Ese formato no es compatible.',
        'picture.mimetypes'  => 'Este archivo debe ser formato .jpg o .png.',
        'enabled.integer'  => 'Ese formato no es compatible.',
        'enabled.between'  => 'Ese formato no es compatible.',
    ];
    }
}
