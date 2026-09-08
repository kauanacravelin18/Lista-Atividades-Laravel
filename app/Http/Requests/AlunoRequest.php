<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:255',
            'email' => 'required|email|unique:alunos,email',
            'curso' => 'required|string|max:255',
            'idade' => 'required|integer|min:15|max:100',
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'email.required' => 'O campo email é obrigatório.',
            'email.email' => 'Digite um email válido.',
            'email.unique' => 'Esse email já está cadastrado.',
            'curso.required' => 'O campo curso é obrigatório.',
            'idade.required' => 'O campo idade é obrigatório.',
            'idade.integer' => 'A idade deve ser um número inteiro.',
            'idade.min' => 'A idade mínima é 15 anos.',
            'idade.max' => 'A idade máxima é 100 anos.',
        ];
    }
}