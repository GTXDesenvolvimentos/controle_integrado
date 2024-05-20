<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PedidosModel;
use Efi\Exception\EfiException;
use Efi\EfiPay;

class DoacaoController extends Controller
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

        echo view('includes/headerbs5');
        echo view('doacao', $data);
        echo view('includes/footerbs5');
    }

    public function cadDoacao()
    {
        $session = session();
        helper(['form']);
        $data = [];
        $return = '';

        $PedidosModel = new PedidosModel();

        $rules = [
            "txtNomeDoador" => ["label" => "Nome", "rules" => "required|min_length[3]|max_length[50]"],
            'txtCpf'  => ["label" => "CPF", "rules"         => "required|min_length[3]|max_length[50]"],
            'txtValorDoacao'  => ["label" => "Valor", "rules"         => "required|min_length[3]|max_length[50]"],
        ];

        
        if ($this->validate($rules)) {
            $vDoacao =  implode('.', explode(',', $this->request->getVar('txtValorDoacao')));
            $cpf = (implode('', explode('.', implode('', explode('-', $this->request->getVar('txtCpf'))))));
            $valor = number_format($vDoacao, 2, '.', '');

            $params = [
                "txid" => $cpf . "000000000" . date('Ydmhis') // Transaction unique identifier
            ];

            $body = [
                "calendario" => [
                    "expiracao" => 604800 // Charge lifetime, specified in seconds from creation date
                ],
                "devedor" => [
                    "cpf" => $cpf,
                    "nome" => $this->request->getVar('txtNomeDoador')
                ],
                "valor" => [
                    "original" => $valor
                ],
                "chave" => "1199ad92-ee56-4bef-bb4a-04f8ec09aa33", // Pix key registered in the authenticated Efí account
                "solicitacaoPagador" => "Assembleia de Deus | Belem",
                // "infoAdicionais" => [
                //     [
                //         "nome" => "Field 1",
                //         "valor" => "Additional information1"
                //     ],
                //     [
                //         "nome" => "Field 2",
                //         "valor" => "Additional information2"
                //     ]
                // ]
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

                        $data = [
                            'id' => $this->request->getVar('id'),
                            'comprador' => $this->request->getVar('txtNomeDoador'),
                            'cpf' => $this->request->getVar('txtCpf'),
                            'retira'  => 'Doação',
                            'horas' => '',
                            'qtde' => 0,
                            'contato' => $this->request->getVar('txtContato'),
                            'tipo' => "doacao",
                            'status' => '',
                            'pagamento' => 'ATIVA',
                            'chave' => $pix["pixCopiaECola"],
                            'qrcode' => $qrcode["imagemQrcode"],
                            'vunitario' => 0,
                            'vtotal' =>  number_format($valor, 2, '.', ''),
                            'txid' => $pix["txid"],
                            'idapi' => $pix["loc"]["id"]
                        ];

                        $retorno = $PedidosModel->save($data);

                        $return = array(
                            'cod' => 1,
                            'msg' => "Dados gravados com sucesso!",
                            'img' => $qrcode["imagemQrcode"],
                            'cola' => $pix["pixCopiaECola"]
                        );
                    } catch (EfiException $e) {
                        $return = array(
                            'cod' => 2,
                            'msg' => $e->code . "<br>" . $e->error . "<br>" . $e->errorDescription
                        );
                    } catch (Exception $e) {
                        $return = array(
                            'cod' => 2,
                            'msg' =>  $e->getMessage()
                        );
                    }
                } else {
                    //  echo "<pre>" . json_encode($pix, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . "</pre>";
                }
            } catch (EfiException $e) {
                $return = array(
                    'cod' => 2,
                    'msg' =>  $e->errorDescription
                );
            } catch (Exception $e) {
                $return = array(
                    'cod' => 2,
                    'msg' =>  $return = $e->getMessage()
                );
            }
        } else {
            $return = array(
                'cod' => 2,
                'msg' => $this->validator->listErrors()
            );
        }

        echo json_encode($return);
    }
}
