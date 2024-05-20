<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use Efi\Exception\EfiException;
use Efi\EfiPay;

class TesterController extends BaseController
{
    public function __construct()
    {
        helper('pern');
    }
    public function index()
    {

        /**
         * Detailed endpoint documentation
         * https://dev.efipay.com.br/docs/api-pix/webhooks#configurar-o-webhook-pix
         */

        $options["headers"] = [
            "x-skip-mtls-checking" => "false",
        ];

        $params = [
            "chave" => "1199ad92-ee56-4bef-bb4a-04f8ec09aa33",
        ];

        $body = [
            "webhookUrl" => "https://adsalete.com.br/teste/"
        ];

        try {
            $api = new EfiPay(conf_efi());
            $response = $api->pixConfigWebhook($params, $body);

            print_r("<pre>" . json_encode($response, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . "</pre>");
        } catch (EfiException $e) {
            print_r($e->code . "<br>");
            print_r($e->error . "<br>");
            print_r($e->errorDescription) . "<br>";
        } catch (Exception $e) {
            print_r($e->getMessage());
        }
    }
}
