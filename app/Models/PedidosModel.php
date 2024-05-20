<?php 
namespace App\Models;  
use CodeIgniter\Model;
  
class PedidosModel extends Model{
    protected $table = 'pedidos';
   
    protected $allowedFields = [
        'id',
        'comprador',
        'cpf',
        'retira',
        'horas',
        'qtde',
        'status',
        'dtcria',
        'chave',
        'qrcode',
        'vunitario',
        'vtotal',
        'contato',
        'tipo',
        'txid',
        'idapi',
        'pagamento',
        'obs'
    ];
}