<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePrivacidade extends FormRequest
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
            'titulo'    => 'required|min:3',
            'texto'     => 'required|min:3',
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
            'titulo.required'   => 'Este campo é obrigatório',
            'titulo.min'        => 'Mínimo de 3 caracteres',
            'texto.required'    => 'Este campo é obrigatório',
            'texto.min'         => 'Mínimo de 3 caracteres',
        ];
    }

}
