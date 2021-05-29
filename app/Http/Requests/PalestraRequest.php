<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PalestraRequest extends FormRequest
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

    public function rules()
    {
        return [
            'tema' => 'required',
            'palestrante' => 'required',
            'periodo'  => 'required',
            'cidade'  => 'required',
            'horas'  => 'required',
        ];
    }

    public function messages()
    {
        return [
            'tema' => 'O campo  é obrigatorio',
            'palestrante' => 'O campo  é obrigatorio',
            'periodo' => 'o campo é obrigatorio',
            'cidade' => 'o campo é obrigatorio',
            'horas' => 'o campo é obrigatorio',
        ];
    }
}
    
