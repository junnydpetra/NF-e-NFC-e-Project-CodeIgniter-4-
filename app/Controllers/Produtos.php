<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdutoModel;

class Produtos extends BaseController
{
    public function index()
    {
        $title = "Produtos";
        $produtos = [
            [
                'nome'            => "Computador",
                'descricao'       => "Última linha.",
                'valor_de_compra' => 899.99,
                'valor_de_venda'  => 1399.9,
                'quantidade'      => 11,
                'validade'        => '',
            ],
            [
                'nome'            => "Notebook",
                'descricao'       => "Última geração.",
                'valor_de_compra' => 2899.99,
                'valor_de_venda'  => 3099.9,
                'quantidade'      => 2,
                'validade'        => '',
            ]
        ];
        
        $data['title'] = $title;
        $data['produtos'] = $produtos;

        echo view('produtos/index', $data);
    }

    public function new()
    {
        return "Novo produto!";
    }

    /* public function model()
    {
        $produto_model = new ProdutoModel();
        
        $dados = [
            'nome' => 'SmartPhone X20',
            'descricao'       => "Produto novo",
            'valor_de_compra' => 3199,
            'valor_de_venda'  => 3300,
            'quantidade'      => 10,
            'validade'        => '',
        ];

        $produto_model->where('id', 3)
                      ->set($dados)
                      ->update();

    } */

    public function model()
    {
        $produto_model = new ProdutoModel();

        $produto_model->where('id', 2)
                      ->delete();

    }
}
