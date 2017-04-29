<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests;

class ConteudoController extends Controller
{

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'telfixo' => 'required|telefonefixo'
        ]);
    }

    public function index()
    {
        return ['Laravel'];
    }
}
