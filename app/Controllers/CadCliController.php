<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MembrosModel;
use App\Models\EnderecoModel;

class CadCliController extends Controller
{
    public function index()
    {
        helper(['form']);
        $data = [];
        $session = session();


        $data['nome'] = $session->get('name');
        echo view('includes/headerbs4');
        echo view('includes/menu', $data);
        echo view('v_cadcli', $data);
        echo view('includes/footerbs4');
    }

    public function cadcliForn()
    {
        $session = session();
        helper(['form']);
        $data = [];
        $MembrosModel = new MembrosModel();
        $EnderecoModel = new EnderecoModel();


        $rules = [
            'txtCpf'  => ["label" => "CPF", "rules"         => "required|min_length[3]|max_length[50]"],
        ];

        exit();

        if ($this->validate($rules)) {

            $data = [

            ];



            $return = $EnderecoModel->where('CEP', implode('', explode('-', $this->request->getVar('txtCep'))))->first();


            if ($return == NULL) {
                // $endereco = array(

                //     ['ID_ENDERECO'] => 635985,
                //     ['ID_UF'] => 'SP',
                //     ['ID_CIDADE'] => 9707,
                //     ['ID_BAIRRO'] => 28189,
                //     ['NOME'] => 'Rua Isabel Soria Mainardes',
                //     ['CEP'] => 06787110
                // );
            } else {
                echo '<pre>';
                print_r($return);
                echo '</pre>';
            }

            exit;

            $retorno = $MembrosModel->save($data);

            $return = array(
                'cod' => 1,
                'msg' => "Dados gravados com sucesso!"
            );
        } else {
            $return = array(
                'cod' => 2,
                'msg' => $this->validator->listErrors()
            );
        }

        echo json_encode($return);
    }

    // VALIDAÇÃO DE CPF
    public function validaCPF()
    {
        $MembrosModel = new MembrosModel();
        $retorno = $MembrosModel->where('cpf',  $this->request->getVar('cpf'))->first();
        if ($retorno !== null) {
            $ret = array(
                'cod' => 2,
                'msg' => "O CPF já existe em nossa base de dados!"
            );
        } else {
            $ret = array(
                'cod' => 1,
                'msg' => "O CPF não encontrado!"
            );
        }

        echo json_encode($ret);
    }
}
