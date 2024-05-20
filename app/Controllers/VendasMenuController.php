<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class VendasMenuController extends Controller
{

    public function index()
    {
        echo view('includes/headerbs5');
        echo view('vendasmenu');
        echo view('includes/footerbs5');
    }
}
