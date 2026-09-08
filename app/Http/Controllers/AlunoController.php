<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function porCurso(Curso $curso)
    {
        $alunos = $curso->alunos;

        return view('alunos.porCurso', [
            'curso' => $curso,
            'alunos' => $alunos,
        ]);
    }
}