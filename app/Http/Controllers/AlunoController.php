<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
  
    public function index()
    {
        return 'Listando todos os alunos.';
    }

    public function create()
    {
        return 'Formulário para criar um novo aluno.';
    }

    public function store(Request $request)
    {
        return 'Salvando um novo aluno.';
    }

    public function show($id)
    {
        return "Mostrando detalhes do aluno de ID: $id";
    }

    public function edit($id)
    {
        return "Formulário para editar o aluno de ID: $id";
    }

    public function update(Request $request, $id)
    {
        return "Atualizando o aluno de ID: $id";
    }

    public function destroy($id)
    {
        return "Removendo o aluno de ID: $id";
    }
}