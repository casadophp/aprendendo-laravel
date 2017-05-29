<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivroFormRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo' => 'required|minha_regra_customizada',
            'autor' => 'required|min:3',
        ];
    }
}
