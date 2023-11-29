<?php

namespace Database\Seeders;

use App\Models\Associado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssociadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Associado::create([
            'nome' => 'Nome do Associado',
            'razao_social' => 'Razão Social da Empresa',
            'cnpj' => '123456789', // Exemplo de CNPJ
            'telefone' => '1234567890',
            'email' => 'associado@email.com',
            'ramo_atividade' => 'Ramo de Atividade',
            'nome_responsavel' => 'Nome do Responsável',
            'logo' => 'caminho/para/o/arquivo.png', // Caminho da logo ou nome do arquivo
            'website' => 'https://websiteassociado.com',
            'observacao' => 'Observações sobre o associado',
            'login' => 'usuario_associado',
            'senha' => bcrypt('senha_associado'),
        ]);
    }
}
