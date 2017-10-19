<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class ConfiraProdutosController extends Controller
{

    public function __construct() {
        $this->middleware('verificarProdutos');
    }

    public function confira(Request $requests) {
        dd($requests->all());
    }
}
