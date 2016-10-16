<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller('usuarios', 'UsuariosController');

Route::get('relacao-um-para-um', function() {
    $carro = new \App\Models\Carro([
        'descricao' => 'Carro muito legal',
        'ano' => 2000,
    ]);
    $carro->save();
    $carro->marca()->save(
        new \App\Models\Marca(['descricao' => 'Fiat'])
    );

    echo "Novo carro e marca criados com sucesso!";
});