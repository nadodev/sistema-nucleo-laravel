<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Profissional extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nome', 'categoria', 'numero_registro', 'email', 'foto', 'website', 'observacao', 'data_inclusao', 'login', 'senha',
    ];


    public function associado()
    {
        return $this->belongsToMany(Empresa::class, 'pontuacao_profissionals')
                    ->withPivot('pontos');
    }

    public function user()
{
    return $this->belongsTo(User::class);
}
}
