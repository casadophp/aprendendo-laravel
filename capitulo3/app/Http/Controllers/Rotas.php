<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Rotas extends Controller
{

    public function getIndex()
    {
        return 'Olá, estou na rota Index do controller Rotas';
    }

    public function postIndex()
    {
        return 'Olá, estou no verbo POST';
    }

    public function getRequisicaoComVerboGet()
    {
        return 'Olá, estou no verbo GET e na rota requisicao-com-o-verbo-get';
    }
}
