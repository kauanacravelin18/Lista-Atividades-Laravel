<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::all();
        return view('alunos.index', compact('alunos'));
    }

    public function show($id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.show', compact('aluno'));
    }

    public function create()
    {
        return view('alunos.create');
    }

    public function store(Request $request)
    {
        Aluno::create($request->all());
        return redirect()->route('alunos.index');
    }

    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.edit', compact('aluno'));
    }

    public function update(Request $request, $id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->update($request->all());
        return redirect()->route('alunos.index');
    }

    public function destroy($id)
    {
        Aluno::destroy($id);
        return redirect()->route('alunos.index');
    }



    public function porCurso($curso)
    {
        return Aluno::where('curso', $curso)->get();
    }

    public function porNome($palavra)
    {
        return Aluno::where('nome', 'like', '%' . $palavra . '%')->get();
    }

    public function recentes()
    {
        return Aluno::orderBy('created_at', 'desc')->take(5)->get();
    }

    public function total()
    {
        return Aluno::count();
    }
}