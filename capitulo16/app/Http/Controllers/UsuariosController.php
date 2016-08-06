<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

use App\Http\Requests;

class UsuariosController extends Controller
{

    public function getListar()
    {
        return Usuarios::all();
    }
}
