<?php 
namespace App\Controllers;  
use CodeIgniter\Controller;
  
class ProfileController extends Controller
{
    public function index()
    {
        $session = session();
        echo "Hello : ".$session->get('name');
        echo "<pre>";
        var_dump($session->get());
        echo "</pre>";
    }
}