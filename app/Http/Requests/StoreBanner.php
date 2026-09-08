<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBanner extends FormRequest
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
            'titulo'            => 'required|min:3',
            'linkbanner'        => 'required|min:3',
            'imgbanner'         => 'image|mimes:jpeg,png,jpg,webp|max:2048|dimensions:max_width=2000,max_height=800',
            'imgmobile'         => 'image|mimes:jpeg,png,jpg,webp|max:1024|dimensions:max_width=800,max_height=1000'
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
            'titulo.required'           => 'Este campo é obrigatório',
            'titulo.min'                => 'Mínimo de 3 caracteres',
            'linkbanner.required'       => 'Este campo é obrigatório',
            'linkbanner.min'            => 'Mínimo de 3 caracteres',
            'imgbanner.mimes'           => 'Tipo do arquivo inválido',
            'imgbanner.max'             => 'Tamanho do arquivo inválido',
            'imgbanner.dimensions'      => 'As dimensões não estão corretas',
            'imgmobile.mimes'           => 'Tipo do arquivo inválido',
            'imgmobile.max'             => 'Tamanho do arquivo inválido',
            'imgmobile.dimensions'      => 'As dimensões não estão corretas'
        ];
    }

}
