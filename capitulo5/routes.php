<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contato', ['uses' => 'contatoController@contato']);

