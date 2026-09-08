<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cursos/{curso}/alunos', [AlunoController::class, 'porCurso']);