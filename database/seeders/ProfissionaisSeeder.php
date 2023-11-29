<?php

namespace Database\Seeders;

use App\Models\Profissional;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfissionaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profissional::create([
            'nome' => 'Nome do Profissional',
            'categoria' => 'Categoria do Profissional',
            'numero_registro' => '123456', // Número de registro
            'email' => 'profissional@email.com',
            'foto' => 'caminho/para/a/foto.png', // Caminho da foto ou nome do arquivo
            'website' => 'https://websiteprofissional.com',
            'observacao' => 'Observações sobre o profissional',
            'data_inclusao' => now(),
            'login' => 'usuario_profissional',
            'senha' => bcrypt('senha_profissional'),
        ]);
    }
}
