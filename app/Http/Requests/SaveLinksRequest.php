<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveLinksRequest extends FormRequest
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
            'title' => ['required', 'min:3', 'max:255'],
            'description' => ['required', 'min:10', 'max:1000']
        ];
    }

    function messages()
    {
        return [
            'title.required' => 'Debe ingresar un título',
            'title.min' => 'El título debe contener al menos 3 caracteres',
            'title.max' => 'El título debe contener hasta 255 caracteres',
            'description.required' => 'Debe ingresar una descripción',
            'description.min' => 'La descripción debe contener al menos 10 caracteres',
            'description.max' => 'La descripción debe contener hasta 1000 caracteres'
        ];
    }
}
