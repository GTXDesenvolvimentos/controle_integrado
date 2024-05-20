<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\UserModel;

class HomeController extends Controller
{
    public function index()
    {
        $userModel = new UserModel();
        echo view('includes/headerbs4');
        echo view('includes/menu');
        echo view('home');
        echo view('includes/footerbs4');
    }
}
