<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class UserModel extends Model{
    protected $table = 'tbusers';
    
    protected $allowedFields = ["idUsers", "nome", "email", "senha", "tipo", "nivel", "dtcria", "status"];
    protected $primaryKey = 'idUsers';
    protected $useTimestamps = true;
    protected $createdField = 'data_cadastro';
    protected $updatedField = 'data_atualizacao';
}