<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MembrosModel;
use App\Models\EnderecoModel;

class MembrosController extends Controller
{
    public function index()
    {
        helper(['form']);
        $data = [];
        $session = session();


        $data['nome'] = $session->get('name');
        echo view('includes/header');
        echo view('includes/menu', $data);
        echo view('membros', $data);
        echo view('includes/footer');
    }

    public function cadMembros()
    {
        $session = session();
        helper(['form']);
        $data = [];
        $MembrosModel = new MembrosModel();
        $EnderecoModel = new EnderecoModel();



        $rules = [
            // "txtNome" => ["label" => "Nome", "rules"        => "required|min_length[3]|max_length[50]"],
            // 'txtNpai' => ["label" => "Nome do Pai", "rules" => "required|min_length[3]|max_length[50]"],
            //  'txtNmae' => ["label" => "Nome da Mãe", "rules" => "required|min_length[3]|max_length[50]"],
            'txtCpf'  => ["label" => "CPF", "rules"         => "required|min_length[3]|max_length[50]"],
        ];

        if ($this->validate($rules)) {

            $data = [
                //'ID_MEMBRO'=> $this->request->getVar('txtNome'),
                'NOME_MEMBRO' => $this->request->getVar('txtNome'),
                'DTNASC' => implode('-', array_reverse(explode('/', $this->request->getVar('txtDtnasc')))),
                'NMAE' => $this->request->getVar('txtNmae'),
                'NPAI' => $this->request->getVar('txtNpai'),
                'NATURALIDADE' => $this->request->getVar('txtnatural'),
                'ESTADO' => $this->request->getVar('txtEstado'),
                'PAIS' => $this->request->getVar('txtPais'),
                'CPF' => $this->request->getVar('txtCpf'),
                'RG' => $this->request->getVar('txtRg'),
                'CEP' => implode('', explode('-', $this->request->getVar('txtCep'))),
                'NUMERO' => $this->request->getVar('txtNumero'),
                'COMPLEMENTO' => $this->request->getVar('txtComplemento'),
                'ESCOLARIDADE' => $this->request->getVar('txtEscolaridade'),
                'PROFISSAO' => $this->request->getVar('txtProfissao'),
                'EST_CIVIL' => $this->request->getVar('txtrEstCivil'),
                'CLASSIFICACAO' => $this->request->getVar('txtrClassificacao'),
                'STATUS' => '',
                'DTCAD' => date('Y-m-d'),
                'DTEXCLUSAO' => '',
                'OBS' => $this->request->getVar('txtObs')
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
