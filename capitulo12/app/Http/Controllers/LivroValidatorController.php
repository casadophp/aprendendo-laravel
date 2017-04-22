<?php

namespace App\Http\Controllers;

use App\Http\Requests\LivroFormRequest;

class LivroValidatorController extends Controller
{
    public function salvar(LivroFormRequest $request)
    {
        $livro = new Livro();
        $livro->save($request->all());
    }
}
