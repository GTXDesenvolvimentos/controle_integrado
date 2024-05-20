<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PedidosModel;
use Efi\Exception\EfiException;
use Efi\EfiPay;


class PagamentoController extends BaseController
{
    public function __construct()
    {
        helper('pern');
    }
    public function index()
    {

        helper(['form']);
        $data = [];
        $session = session();
        echo view('includes/headerbs4');
        echo view('includes/menubs4');
        echo view('pagamentos');
        echo view('includes/footerbs4');
    }


    public function finalizar()
    {
        try {
            $PedidosModel = new PedidosModel();
            
            $dados = [
                "status" => "D"
            ];
            $PedidosModel = new PedidosModel();
            $PedidosModel->update($this->request->getVar('id'), $dados);

            $return = array(
                'cod' => 1,
                'msg' => "Dados gravados com sucesso!"
            );
        } catch (EfiException $e) {
            print_r($e->code . "<br>");
            print_r($e->error . "<br>");
            print_r($e->errorDescription) . "<br>";
        } catch (Exception $e) {
            print_r($e->getMessage());
        }
        echo json_encode($return);
    }



    public function retorno()
    {
        try {
            $PedidosModel = new PedidosModel();
            $retorno = $PedidosModel->select()->findAll();
            foreach ($retorno as $pedido) :
                $id = $pedido['id'];
                $params = [
                    "txid" => $pedido['txid']
                ];
                $api = new EfiPay(conf_efi());
                $response = $api->pixDetailCharge($params);

                $dados = [
                    "pagamento" => $response["status"]
                ];
                $PedidosModel = new PedidosModel();
                $retorno = $PedidosModel->update($id, $dados);
            endforeach;
            $return = array(
                'cod' => 1,
                'msg' => "Dados gravados com sucesso!"
            );
        } catch (EfiException $e) {
            print_r($e->code . "<br>");
            print_r($e->error . "<br>");
            print_r($e->errorDescription) . "<br>";
        } catch (Exception $e) {
            print_r($e->getMessage());
        }
        echo json_encode($return);
    }






    function retCompas()
    {
        $PedidosModel = new PedidosModel();
        $retorno = $PedidosModel->select()->findAll();

        foreach ($retorno as $pedido) :

            $array[] = array(
                "id" => $pedido['id'],
                "comprador" => $pedido['comprador'],
                "tipo" => $pedido['tipo'],
                "contato" => $pedido['contato'],
                "retira" => $pedido['retira'],
                "dtcria" => $pedido['dtcria'],
                "horas" => $pedido['horas'],
                "qtde" => $pedido['qtde'],
                "chave" => $pedido['chave'],
                "qrcode" => $pedido['qrcode'],
                "cpf" => $pedido['cpf'],
                "pagamento" => $pedido['pagamento'],
                "vtotal" => $pedido['vtotal'],
                "vunitario" => $pedido['vunitario'],
                "status" => $pedido['status'],
                "txid" => $pedido['txid'],
                "obs" => $pedido['obs'],
                "idapi" => $pedido['idapi']
            );
        endforeach;

        echo json_encode($array);
    }
}
