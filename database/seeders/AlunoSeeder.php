<?php

namespace Database\Seeders;

use App\Models\Aluno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlunoSeeder extends Seeder
{
    public function run(): void
    {
        $cursos = ['ADS', 'Engenharia de Software', 'Ciência da Computação', 'Sistemas de Informação'];

        for ($i = 1; $i <= 10; $i++) {
            Aluno::create([
                'nome' => 'Aluno ' . $i,
                'email' => 'aluno' . $i . '@teste.com',
                'curso' => $cursos[array_rand($cursos)],
                'idade' => rand(18, 30),
            ]);
        }
    }
}