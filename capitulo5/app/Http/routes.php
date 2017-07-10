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

Route::get('/', ['uses' => 'ConteudoController@index', 'middleware' => ['web', 'auth']])->name('index');
Route::auth();

Route::get('/contato', ['uses' => 'ContatoController@contato']);
Route::post('/enviar-contato', ['uses' => 'ContatoController@enviarContato']);
