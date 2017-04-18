<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivroValidatorController extends Controller
{
    public function salvar(Request $request)
    {
        $this->validate($request, [
            'titulo' => 'required',
            'autor' => 'required',
        ]);

        if (strlen($request->input('autor')) < 3) {
            return 'Autor deve possuir no mínimo 3 letras';
        }

        $livro = new Livro();
        $livro->save($request->all());
    }
}
