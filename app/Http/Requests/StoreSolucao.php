<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSolucao extends FormRequest
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
            'titulo'        => 'required|min:3',
            'urltitulo'     => 'required|min:3|unique:solucao,urltitulo,'. $this->solucao,
            'texto'         => 'required|min:3',
            'descricao'     => 'required|min:3',
            'img'           => 'image|mimes:jpeg,png,jpg,webp|max:1024|dimensions:max_width=800,max_height=600',
            'img2'          => 'image|mimes:jpeg,png,jpg,webp|max:1024|dimensions:max_width=800,max_height=600',
            'img3'          => 'image|mimes:jpeg,png,jpg,webp|max:1024|dimensions:max_width=800,max_height=600',
            'situacao'      => 'nullable'
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
            'titulo.required'       => 'Este campo é obrigatório',
            'titulo.min'            => 'Mínimo de 3 caracteres',
            'urltitulo.required'    => 'Este campo é obrigatório',
            'urltitulo.min'         => 'Mínimo de 3 caracteres',
            'texto.required'        => 'Este campo é obrigatório',
            'texto.min'             => 'Mínimo de 3 caracteres',
            'descricao.required'    => 'Este campo é obrigatório',
            'descricao.min'         => 'Mínimo de 3 caracteres',
            'img.mimes'             => 'Tipo do arquivo inválido',
            'img.max'               => 'Tamanho do arquivo inválido',
            'img.dimensions'        => 'As dimensões não estão corretas',
            'img2.mimes'            => 'Tipo do arquivo inválido',
            'img2.max'              => 'Tamanho do arquivo inválido',
            'img2.dimensions'       => 'As dimensões não estão corretas',
            'img3.mimes'            => 'Tipo do arquivo inválido',
            'img3.max'              => 'Tamanho do arquivo inválido',
            'img3.dimensions'       => 'As dimensões não estão corretas'
        ];
    }

}