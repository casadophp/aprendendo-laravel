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

Route::get('/layout', function() {
  return view('layout');
});

Route::get('/pagina1', function() {
  return view('pagina1');
});

Route::get('/pagina2', function() {
  return view('pagina2');
});
