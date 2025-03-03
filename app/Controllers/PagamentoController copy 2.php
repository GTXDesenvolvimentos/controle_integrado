<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
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
        $params = [
            "txid" => "00000000000000000000".date('Ydmhis') // Transaction unique identifier
        ];
        
        $body = [
            "calendario" => [
                "expiracao" => 3600 // Charge lifetime, specified in seconds from creation date
            ],
            "devedor" => [
                "cpf" => "46360197847",
                "nome" => "Andre"
            ],
            "valor" => [
                "original" => "0.01"
            ],
            "chave" => "1199ad92-ee56-4bef-bb4a-04f8ec09aa33", // Pix key registered in the authenticated Efí account
            "solicitacaoPagador" => "Enter the order number or identifier.",
            "infoAdicionais" => [
                [
                    "nome" => "Field 1",
                    "valor" => "Additional information1"
                ],
                [
                    "nome" => "Field 2",
                    "valor" => "Additional information2"
                ]
            ]
        ];
        
        try {
            $api = new EfiPay(conf_efi());
            $pix = $api->pixCreateCharge($params, $body);
        
            if ($pix["txid"]) {
                $params = [
                    "id" => $pix["loc"]["id"]
                ];
        
                try {
                    $qrcode = $api->pixGenerateQRCode($params);
                    echo "<b>Detalhes da cobrança:</b>";
                    echo "<pre>" . json_encode($pix, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . "</pre>";
        
                    echo "<b>QR Code:</b>";
                    echo "<pre>" . json_encode($qrcode, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . "</pre>";
        
                    echo "<b>Imagem:</b><br>";
                    echo "<img src='" . $qrcode["imagemQrcode"] . "' />";
                } catch (EfiException $e) {
                    print_r($e->code . "<br>");
                    print_r($e->error . "<br>");
                    print_r($e->errorDescription . "<br>");
                } catch (Exception $e) {
                    print_r($e->getMessage());
                }
            } else {
                echo "<pre>" . json_encode($pix, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . "</pre>";
            }
        } catch (EfiException $e) {
            print_r($e->code . "<br>");
            print_r($e->error . "<br>");
            print_r($e->errorDescription . "<br>");
        } catch (Exception $e) {
            print_r($e->getMessage());
        }


        








exit;

        $params = [
            "txid" => "00000000000000000000000000000000000" // Transaction unique identifier
        ];

        $body = [
            "calendario" => [
                "expiracao" => 3600 // Charge lifetime, specified in seconds from creation date
            ],
            "devedor" => [
                "cpf" => "12345678909",
                "nome" => "Francisco da Silva"
            ],
            "valor" => [
                "original" => "0.01"
            ],
            "chave" => "00000000-0000-0000-0000-000000000000", // Pix key registered in the authenticated Efí account
            "solicitacaoPagador" => "Enter the order number or identifier.",
            "infoAdicionais" => [
                [
                    "nome" => "Field 1",
                    "valor" => "Additional information1"
                ],
                [
                    "nome" => "Field 2",
                    "valor" => "Additional information2"
                ]
            ]
        ];



        $api = new EfiPay(conf_efi());
        $qrcode = $api->pixGenerateQRCode($params);


        try {
            $api = new EfiPay(conf_efi());
            // echo '<pre>';
            //print_r($api);
            //echo '<pre>';

            //exit();
            $pix = $api->pixCreateCharge($params, $body);



            if ($pix["txid"]) {
                $params = [
                    "id" => $pix["loc"]["id"]
                ];

                try {
                    $qrcode = $api->pixGenerateQRCode($params);


                    //echo "<b>Detalhes da cobrança:</b>";
                    //echo "<pre>" . json_encode($pix, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . "</pre>";

                    //echo "<b>QR Code:</b>";
                    //echo "<pre>" . json_encode($qrcode, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . "</pre>";

                    //echo "<b>Imagem:</b><br>";
                    //echo "<img src='" . $qrcode["imagemQrcode"] . "' />";
                } catch (EfiException $e) {
                    print_r($e->code . "<br>");
                    print_r($e->error . "<br>");
                    print_r($e->errorDescription . "<br>");
                } catch (Exception $e) {
                    print_r($e->getMessage());
                }
            } else {
                echo "<pre>" . json_encode($pix, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . "</pre>";
            }
        } catch (EfiException $e) {
            print_r($e->code . "<br>");
            print_r($e->error . "<br>");
            print_r($e->errorDescription . "<br>");
        } catch (Exception $e) {
            print_r($e->getMessage());
        }
    }
}
