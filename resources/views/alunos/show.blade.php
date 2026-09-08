@extends('layouts.app')
@section('title', 'Detalhes do Aluno')
@section('content')
    <h1>{{ $aluno->nome }}</h1>
    <p>Email: {{ $aluno->email }}</p>
    <p>Curso: {{ $aluno->curso }}</p>
    <p>Idade: {{ $aluno->idade }}</p>
@endsection