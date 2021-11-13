<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\PagesController@home');

Route::get('/cardapio', 'App\Http\Controllers\PagesController@cardapio');

Route::get('/cadastro', 'App\Http\Controllers\PagesController@cadastro');

Route::get('/pedido', 'App\Http\Controllers\PagesController@pedido');

Route::post('/cadastrar', 'App\Http\Controllers\PagesController@cadastrar');

Route::post('/realizarpedido', 'App\Http\Controllers\PagesController@rPedido');

