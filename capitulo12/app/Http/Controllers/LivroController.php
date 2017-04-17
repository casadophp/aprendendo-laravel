<?php

namespace App\Http\Controllers;

use App\Livro;
use Illuminate\Http\Request;

class LivroController extends Controller
{

    public function salvar(Request $request)
    {
        if ($request->input('titulo') == '') {
            return false;
        }

        if ($request->input('autor') == '') {
            return false;
        }

        $livro = new Livro();
        $livro->save($request->all());
    }
}
