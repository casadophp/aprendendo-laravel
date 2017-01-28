<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exibir-dados', function () {
    return view('exibindo_dados');
});

Route::get('/exibir-dados-vazios', function () {
    return view('exibindo_dados', [
        'titulo' => '',
        'texto' => '',
    ]);
});

Route::get('/exibir-dados-reais', function () {
    return view('exibindo_dados', [
        'titulo' => 'Meu título',
        'texto' => 'Meu texto bem criativo',
    ]);
});

Route::get('/exibir-dados-nao-escapados', function () {
    return view('exibindo_dados_nao_escapados', [
        'conteudo' => '<h1>Olá, sou apenas um título</h1>'
    ]);
});

Route::get('/estrutura-de-controle', function () {
    return view('estrutura_de_controle', [
        'lista' => [],
    ]);
});
