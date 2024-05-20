<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;

class SigninController extends Controller
{
    /////////////////////////////////////
    //// INDEX PRINCIPAL
    //// ATUALIZADO EM 13/05/2024
    //// AUTOR: MARCIO SILVA
    /////////////////////////////////////
    public function index()
    {
        helper(['form']);
        echo view('includes/headerbs5');
        echo view('signin');
        echo view('includes/footerbs5');
    }


    /////////////////////////////////////
    //// FUNÇÃO DE LOGIN
    //// ATUALIZADO EM 13/05/2024
    //// AUTOR: MARCIO SILVA
    /////////////////////////////////////
    public function loginAuth()
    {
        $session = session();

        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        /////////////////////////////////////
        //// VALIDA EMAIL EXISTENTE
        ///////////////////////////////////// 
        $data = $userModel->where('email', $email)->first();

        if ($data) {
            $pass = $data['senha'];
            $authenticatePassword = password_verify($password, $pass);
            if ($authenticatePassword) {

                $ses_data = [
                    'id' => $data['idUsers'],
                    'nome'    => $data['nome'],
                    'email'   => $data['email'],
                    'senha'   => $data['senha'],
                    'tipo'    => $data['tipo'],
                    'nivel'   => $data['nivel'],
                    'dtcria'  => $data['dtcria'],
                    'status'  => $data['status'],
                    'isLoggedIn' => TRUE
                ];

                $session->set($ses_data);
                return redirect()->to('/home');
            } else {
                $session->setFlashdata('msg', 'Senha incorreta.');
                return redirect()->to('/signin');
            }
        } else {
            $session->setFlashdata('msg', 'E-mail inexistente!.');
            return redirect()->to('/signin');
        }
    }

    /////////////////////////////////////
    //// FUNÇÃO DE LOGOUT
    //// ATUALIZADO EM 13/05/2024
    //// AUTOR: MARCIO SILVA
    /////////////////////////////////////
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/signin');
    }
}
