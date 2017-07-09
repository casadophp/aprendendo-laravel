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

Route::get('relacao-um-para-muitos', function() {
    $pessoa = new \App\Models\Pessoa([
        'nome' => 'Matheus Marabesi',
    ]);
    $pessoa->save();
    $pessoa->telefones()->save(new \App\Models\Telefone(['telefone' => '11 2875-1293']));
    $pessoa->telefones()->save(new \App\Models\Telefone(['telefone' => '11 3332-9191']));
    $pessoa->telefones()->save(new \App\Models\Telefone(['telefone' => '11 2665-0012']));

    echo "Pessoa e telefone criado com sucesso!";
});

Route::get('relacao-muitos-para-muitos', function() {
    $usuario = \App\Models\Usuarios::find(1);
    return $usuario->permissoes;
});

