<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDepoimento extends FormRequest
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
            'nome'      => 'required|min:3',
            'cargo'     => 'required|min:3',
            'texto'     => 'required|min:3',
            'img'       => 'image|mimes:jpeg,png,jpg,webp|max:256|dimensions:max_width=300,max_height=300'
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
            'nome.required'         => 'Este campo é obrigatório',
            'nome.min'              => 'Mínimo de 3 caracteres',
            'cargo.required'        => 'Este campo é obrigatório',
            'cargo.min'             => 'Mínimo de 3 caracteres',
            'texto.required'        => 'Este campo é obrigatório',
            'texto.min'             => 'Mínimo de 3 caracteres',
            'img.mimes'             => 'Tipo do arquivo inválido',
            'img.max'               => 'Tamanho do arquivo inválido',
            'img.dimensions'        => 'As dimensões não estão corretas'
        ];
    }

}
