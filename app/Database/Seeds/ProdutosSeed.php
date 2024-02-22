<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProdutosSeed extends Seeder
{
    public function run()
    {
        $this->db->table('produtos')->insert([
            'nome'            => 'Computador',
            'descricao'       => 'Seed inicial',
            'valor_de_compra' => 1299.9,
            'valor_de_venda'  => 1599.99,
            'quantidade'      => 9,
            'validade'        => '',
        ]);
    }
}
							
