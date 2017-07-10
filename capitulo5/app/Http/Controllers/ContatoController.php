<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContatoController extends Controller
{
    public function contato()
    {
        return View('contato');
    }

    public function enviarContato(Request $request)
    {
        dd($request->all());
    }

}

