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

Route::get('/phpinfo', function() {
    phpinfo();
});

Route::get('/contato/{id}/nome/{nome}', function($id, $nome) {
    printf('Olá %s, o seu ID é %s', $nome, $id);
})->where('id', '[0-9]+');

Route::any('/formulario', function() {
    if (Request::isMethod('put')) {
        return 'Olá, essa requisição veio pelo método PUT';
    }

    if (Request::isMethod('patch')) {
        return 'Olá, essa requisição veio pelo método PATCH';
    }

    if (Request::isMethod('delete')) {
        return 'Olá, essa requisição veio pelo método DELETE';
    }

    if (Request::isMethod('post')) {
        return print_r(Request::all(), true);
    }

    // O formulário HTML é exibido caso a requisição for GET
    return '<form method="post" action="/formulario"> 
            Nome: 
            <input type="text" name="nome" /> 
            Email
            <input type="text" name="email" /> 
            Mensagem
            <textarea name="mensagem"></textarea> 
            <input type="submit" value="Enviar/> 
            </form>';

});

Route::controller('rotas', 'Rotas');