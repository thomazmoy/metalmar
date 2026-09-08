<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContato extends FormRequest
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
            'nome'      => 'required|min:3|max:255',
            'email'     => 'required|min:3',
            'telefone'  => 'required|min:3',
            'assunto'   => 'required|min:3',
            'mensagem'  => 'required|min:3',
            'situacao'  => 'nullable',
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
            'email.required'        => 'Este campo é obrigatório',
            'email.min'             => 'Mínimo de 3 caracteres',
            'telefone.required'     => 'Este campo é obrigatório',
            'telefone.min'          => 'Mínimo de 3 caracteres',
            'assunto.required'      => 'Este campo é obrigatório',
            'assunto.min'           => 'Mínimo de 3 caracteres',
            'mensagem.required'     => 'Este campo é obrigatória',
            'mensagem.min'          => 'Mínimo de 3 caracteres',
        ];
    }

}
