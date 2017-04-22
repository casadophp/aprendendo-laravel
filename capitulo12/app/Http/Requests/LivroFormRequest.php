<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivroFormRequest extends FormRequest
{

    public function rules()
    {
        return [
            'titulo' => 'required',
            'autor' => 'required|min:3',
        ];
    }
}
