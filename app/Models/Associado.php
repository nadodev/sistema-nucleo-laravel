<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Associado extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nome', 'razao_social', 'cnpj', 'telefone', 'email', 'ramo_atividade', 'nome_responsavel', 'data_inclusao', 'logo', 'website', 'observacao', 'login', 'senha',
    ];

    public function profissionais()
    {
        return $this->belongsToMany(Profissional::class, 'pontuacao_profissionals')
                    ->withPivot('pontos');
    }

    public function user()
{
    return $this->belongsTo(User::class);
}
}
