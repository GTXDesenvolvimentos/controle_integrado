<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class MembrosModel extends Model{
    protected $table = 'tbl_membros';
   
    protected $allowedFields = [
        'NOME_MEMBRO',
        'DTNASC',
        'NMAE',
        'NPAI',
        'NATURALIDADE',
        'ESTADO',
        'PAIS',
        'CPF',
        'RG',
        'CEP',
        'NUMERO',
        'COMPLEMENTO',
        'ESCOLARIDADE',
        'PROFISSAO',
        'EST_CIVIL',
        'CLASSIFICACAO',
        'STATUS',
        'DTCAD',
        'DTEXCLUSAO',
        'OBS'
    ];
}