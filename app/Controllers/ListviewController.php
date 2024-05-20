<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PedidosModel;
use App\Models\UserModel;

class ListViewController extends Controller
{
    public function index()
    {
        $PedidosModel = new PedidosModel();
        $userModel = new UserModel();
        echo view('includes/header');
        echo view('listview');
        echo view('includes/footer');
    }

    public function buscaPedido(){
        
        $PedidosModel = new PedidosModel();

        $cpf = $this->request->getVar('txtCpf');


       // $row = $PedidosModel->where('cpf', $cpf)->countAllResults();

    
        $data['data'] = $PedidosModel->where('cpf', $cpf)->findAll();

        echo view('includes/header');
        echo view('listview', $data);
        echo view('includes/footer');
    }
}
