<?php

use Illuminate\Database\Seeder;

class CadastroDeClienteSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'nome' => 'teste', 'nome_fantasia' => '', 'endereco' => '', 'bairro' => '', 'cep' => '', 'cnpj' => '', 'vcto_primeira_quinzena' => '', 'vcto_segunda_quinzena' => '', 'vcto_mensal' => '', 'rota' => '', 'telefone' => '', 'contato' => '', 'email' => '',],

        ];

        foreach ($items as $item) {
            \App\CadastroDeCliente::create($item);
        }
    }
}
