<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{

    public function salvar(Request $request)
    {
        if ($request->input('titulo') == '') {
            return 'Título não pode ser vazio';
        }

        if ($request->input('autor') == '') {
            return 'Autor não pode ser vazio';
        }

        if (strlen($request->input('autor')) < 3) {
            return 'Autor deve possuir no mínimo 3 letras';
        }

        $livro = new Livro();
        $livro->save($request->all());
    }
}
