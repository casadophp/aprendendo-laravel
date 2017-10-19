<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', ['uses' => 'BasicoController@basico']);
Route::get('/put', ['uses' => 'BasicoController@basicoPut']);
Route::get('/deletar', ['uses' => 'BasicoController@deletarForm']);
Route::get('/produtos', ['uses' => 'ProdutosController@lista']);

Route::post('/post', ['uses' => 'BasicoController@post']);
Route::post('/comprarproduto', ['uses' => 'ConfiraProdutosController@confira']);
Route::put('/put', ['uses' => 'BasicoController@put']);
Route::delete('/deletar', ['uses' => 'BasicoController@deletar']);
