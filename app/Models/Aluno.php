<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Aluno extends Model
{
    protected $fillable = [
        'nome',
        'email',
        'idade',
        'curso_id',
    ];

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}