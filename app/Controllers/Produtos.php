<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Produtos extends BaseController
{
    public function index()
    {
        echo view('produtos/index');
    }
}
