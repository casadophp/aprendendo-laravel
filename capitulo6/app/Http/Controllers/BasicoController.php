<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class BasicoController extends Controller
{
    public function basico() {
        return View('post');
    }

    public function basicoPut() {
        RETURN View('put');
        }

    public function post(Request $request) {
        dd($request);
    }

    public function put(Request $request) {
        dd($request);
    }

    protected function getListaPessoas() {
        return [
        0 => [ 
            'id' => 0,
            'nome' => 'Michael'
        ], 1 => [
            'id' => 1,
            'nome' => 'Matheus'
        ]];
    }
    
    public function deletarForm() {
        return View('deletar', ['dados' => $this->getListaPessoas()]);
    }

    public function deletar(Request $request) {
        dd($request);
    }
}
