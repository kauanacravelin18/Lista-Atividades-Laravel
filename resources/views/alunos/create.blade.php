@extends('layouts.app')
@section('title', 'Cadastrar Aluno')
@section('content')
    <h1>Cadastrar Aluno</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('alunos.store') }}" method="POST">
        @csrf

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ old('nome') }}">
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="{{ old('email') }}">
        <br>

        <label for="curso">Curso:</label>
        <input type="text" name="curso" id="curso" value="{{ old('curso') }}">
        <br>

        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade" value="{{ old('idade') }}">
        <br>

        <button type="submit">Cadastrar</button>
    </form>
@endsection