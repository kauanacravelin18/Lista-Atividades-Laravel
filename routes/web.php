<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function () {
    return 'Esta é a página Sobre.';
});

Route::get('/alunos', function () {
    return 'Esta é a página de Alunos.';
});

Route::get('/contato', function () {
    return 'Esta é a página de Contato.';
});

Route::get('/produto/{id}', function ($id) {
    return "Você está vendo o produto de ID: $id";
});

Route::get('/categoria/{id}', function ($id) {
    return "Você está vendo a categoria de ID: $id";
});

Route::get('/usuario/{id}', function ($id) {
    return "Você está vendo o usuário de ID: $id";
});
