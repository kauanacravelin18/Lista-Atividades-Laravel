@extends('layouts.app')
@section('title', 'Lista de Alunos')
@section('content')
    <h1>Lista de Alunos</h1>
    @if(isset($alunos) && count($alunos) > 0)
        <ul>
            @foreach($alunos as $aluno)
                <li>{{ $aluno->nome }} - {{ $aluno->curso }}</li>
            @endforeach
        </ul>
    @else
        <p>Nenhum aluno cadastrado ainda.</p>
    @endif
@endsection