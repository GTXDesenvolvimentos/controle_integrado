<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PedidosModel;
use Efi\Exception\EfiException;
use Efi\EfiPay;


class PagamentoController extends BaseController
{
    public function index()
    {

        helper(['form']);
        $data = [];
        $session = session();
        echo view('includes/header');
        echo view('includes/menu');
        echo view('pagamentos');
        echo view('includes/footer');
    }


    public function retorno()
    {
        $sandbox = true; // false = Production | true = Homologation

        // Credentials of Production
        $clientIdProd = "Client_Id_cd2ce12207ce6722e4fdd38c724804de5cd3f298";
        $clientSecretProd = "Client_Secret_b5d5ff64f48aead21ced404563d703ecad1dec22";
        $pathCertificateProd = realpath(__DIR__ . "/producao.p12"); // Absolute path to the certificate in .pem or .p12 format

        // Credentials of Homologation
        $clientIdHomolog = "Client_Id_75fc36648f6436abf2455eca4b8f90bac4defdc5";
        $clientSecretHomolog = "Client_Secret_f8da87deb0dfd23b967c1c39e0e196a288f6cae0";
        $pathCertificateHomolog =  realpath(__DIR__ . "/arquivoCertificado.p12"); // Absolute path to the certificate in .pem or .p12 format

        $options = [
            "clientId" => ($sandbox) ? $clientIdHomolog : $clientIdProd,
            "clientSecret" => ($sandbox) ? $clientSecretHomolog : $clientSecretProd,
            "certificate" => ($sandbox) ? $pathCertificateHomolog : $pathCertificateProd,
            "pwdCertificate" => "", // Optional | Default = ""
            "sandbox" => $sandbox, // Optional | Default = false
            "debug" => false, // Optional | Default = false
            "timeout" => 30, // Optional | Default = 30
        ];

        $params = [
            //"inicio" => "2023-01-22T00:00:00Z",
            //"fim" => "2024-12-31T23:59:59Z",
            //"id" => 97,
            "txid" => "3091179389500000000020241003020610"
            //"status" => "CONCLUIDA", // "ATIVA","CONCLUIDA", "REMOVIDA_PELO_USUARIO_RECEBEDOR", "REMOVIDA_PELO_PSP"
            // "cpf" => "12345678909", // Filter by payer's CPF. It cannot be used at the same time as the CNPJ.
            //"cnpj" => "12345678909", // Filter by payer's CNPJ. It cannot be used at the same time as the CPF.
            //"paginacao.paginaAtual" => 1,
            //"paginacao.itensPorPagina" => 200
        ];

        
        
        $body = [
            "tipoCob" => "cob" // "cob", "cobv"
        ];

        try {
            $api = new EfiPay($options);
            $response = $api->pixDetailCharge($params);

            echo '<pre>';
            print_r($response);
            //print_r($response['cobs'][99]['loc']['id']);
            echo '</pre>';

            //echo json_encode(array($response['cobs'][0]['devedor']));
            //print_r("<pre>" . json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . "</pre>");
        } catch (EfiException $e) {
            print_r($e->code . "<br>");
            print_r($e->error . "<br>");
            print_r($e->errorDescription) . "<br>";
        } catch (Exception $e) {
            print_r($e->getMessage());
        }
    }

    function retCompas(){
        $PedidosModel = new PedidosModel();
        $retorno = $PedidosModel->select()->findAll();

        foreach ($retorno as $pedido) :

            $array[] = array(
                "idpedido"=> $pedido['idpedido'],
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
                "status" =>$pedido['status'],
                "txid" => $pedido['txid'],
                "idapi" => $pedido['idapi']
            );
        endforeach;

        echo json_encode($array);

    }
}
