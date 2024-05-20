<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class EnderecoModel extends Model{
    protected $table = 'endereco';
   
    protected $allowedFields = [
        'ID_ENDERECO',
        'ID_UF',
        'ID_CIDADE',
        'ID_BAIRRO',
        'NOME',
        'CEP',      
    ];
}