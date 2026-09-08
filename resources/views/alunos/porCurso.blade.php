<h1>Alunos do curso: {{ $curso->nome }}</h1>

@if($alunos->count() > 0)
    <ul>
        @foreach($alunos as $aluno)
            <li>{{ $aluno->nome }} - {{ $aluno->email }}</li>
        @endforeach
    </ul>
@else
    <p>Nenhum aluno cadastrado neste curso ainda.</p>
@endif