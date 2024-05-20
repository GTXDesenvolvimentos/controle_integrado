<style>
    .gradient-custom-3 {
        /* fallback for old browsers */
        background: #84fab0;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
    }

    .gradient-custom-4 {
        /* fallback for old browsers */
        background: #84fab0;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
    }
</style>


<section class="min-vh-100 bg-image" style="background-color: #091d51;">
    <div class="mask d-flex align-items-center h-100 gradient-custom-2">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">

                <div class="col-12 col-md-9 col-lg-7 col-xl-6 pt-1">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-3">
                            <p class="fw-lighter m-0 text-center"><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i><strong> Local de Entrega:</strong> Assembléia de Deus M. Belém R. Alberto José, 146 - Jardim Salete</p>
                        </div>
                    </div>
                    <div class="card  my-2" style="border-radius: 15px;">
                        <div class="card-body">
                            <form action="<?php echo site_url('/ListviewController/buscapedido'); ?>" method="post">
                                <div class="row p-2">
                                    <div class="form-floating col-8 p-1">
                                        <input type="text" autocomplete="off" class="form-control border border-primary" name="txtCpf" id="txtCpf" placeholder="CPF">
                                        <label for="txtCpf">CPF:</label>
                                    </div>
                                    <div class="d-grid p-1 col-4">
                                        <button type="submit" class="btn btn-lg btn-thumbnail border-1 btn-success">BUSCAR</button>
                                    </div>
                                </div>
                            </form>

                            <?php
                            if (isset($data)) {
                                if (!empty($data)) {
                                    foreach ($data as $linha) :
                                        if (trim($linha['tipo'])  == 'compra') {

                            ?>
                                            <div class="card shadow-lg p-1 mb-1 bg-body rounded">
                                                <div class="row p-0">
                                                    <div class="col-4">
                                                        <img src="<?= $linha['tipo']  == 'doacao' ? base_url('/assets/img/mao.jpg') : base_url('/assets/img/feijoada.webp') ?>" class="card-img-top" alt="...">
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="card-body p-1">
                                                            <h6 class="card-title p-1 m-0"><?= $linha['tipo']  == 'doacao' ? '<div class="text-success">DOAÇÂO' : "PEDIDO " .  'NRO:' .  $linha['id']; ?> </h6>
                                                            <?= $linha['pagamento'] == 'ATIVA' ? '<p class="alert alert-danger p-0 m-0 text-center" style="font-size: 12px;">AGUARDANDO PAGAMENTO</p>' : '<p class="alert alert-success p-0 m-0 text-center" style="font-size: 12px;">PAGAMENTO CONCLUIDO</p>'; ?>
                                                            <p class="card-text text-success p-0 m-0">Valor: R$ <?= $linha['vtotal']; ?></p>
                                                            <p class="card-text text-dark p-0 m-0">Data Entrega: 23/03/2024</p>
                                                            <p class="card-text text-danger p-0 m-0">Hora: <?= $linha['horas']; ?></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 text-center p-2">

                                                        <button class="btn btn-success" onclick='detPed(`<?= json_encode($linha) ?>`);'>Detalhe do pedido</button>
                                                        <?php
                                                        if ($linha['pagamento'] !== 'CONCLUIDA') {
                                                        ?>
                                                            <button class="btn btn-danger" onclick='detPagamento(`<?= json_encode($linha) ?>`);'>PAGAR AGORA</button>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>

                                        <?php
                                        } else {
                                        ?>
                                            <div class="card shadow-lg p-1 mb-1 bg-body rounded">
                                                <div class="row p-0">
                                                    <div class="col-4">
                                                        <img src="<?= $linha['tipo']  == 'doacao' ? base_url('/assets/img/mao.jpg') : base_url('/assets/img/feijoada.webp') ?>" class="card-img-top" alt="...">
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="card-body p-1">
                                                            <h6 class="card-title p-1 m-0"><?= $linha['tipo']  == 'doacao' ? '<div class="text-success">DOAÇÂO' : "PEDIDO " .  'NRO:' .  $linha['id']; ?> </h6>
                                                            <?= $linha['pagamento'] == 'ATIVA' ? '<p class="alert alert-danger p-0 m-0 text-center" style="font-size: 12px;">AGUARDANDO PAGAMENTO</p>' : '<p class="alert alert-success p-0 m-0 text-center" style="font-size: 12px;">PAGAMENTO CONCLUIDO</p>'; ?>
                                                            <p class="card-text text-success p-0 m-0">Valor: R$ <?= $linha['vtotal']; ?></p>

                                                        </div>
                                                    </div>
                                                    <div class="col-12 text-center p-2">
                                                        <?php
                                                        if ($linha['pagamento'] !== 'CONCLUIDA') {
                                                        ?>
                                                            <button class="btn btn-danger" onclick='detPagamento(`<?= json_encode($linha) ?>`);'>PAGAR AGORA</button>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                            <?php
                                        }
                                    endforeach;
                                } else {
                                    print('<div class="alert alert-danger" role="alert">Compra não encontrada para o CPF selecionado</div>');
                                }
                            }
                            ?>
                        </div>
                        <div class="row">
                            <div class=" col-12 text-center">
                                <a href="<?= base_url('vendasmenu') ?>" style="background-color: #091d51;" type="submit" class="btn btn-info  border-1 btn-outline-dark text-light"><i class="fa fa-arrow-circle-left fa fa-1x" aria-hidden="true"></i> VOLTAR PARA O MENU</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <p class="fst-italic text-center" style="text-shadow: #84fab0; color: #FFF">Desenvolvido por Márcio Silva<br>GTXSoftware</p>
        </div>
    </div>
    </div>
</section>








<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center ">
                <h5 class="modal-title " id="exampleModalLabel">Detalhe do pedido</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="vendasMenu();"></button>
            </div>
            <div class="modal-body">
                <div id="modalview"></div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="staticdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center ">
                <h5 class="modal-title " id="exampleModalLabel">Detalhe do pedido</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="vendasMenu();"></button>
            </div>
            <div class="modal-body">

                <div class="col-12 mb-3 text-center">
                    <div id="imgQrcodeQ"></div>
                </div>
                <div id="chaveviewQ"></div>
                <div class="col-12 pt-2  text-center">
                    <a href="#" class="btn btn-warning text-center" id="copyCola3" onclick="copiarTexto3()">COPIAR CHAVE PIX</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function formatarMoeda() {
        var elemento = document.getElementById("txtValorDoacao");
        var valor = elemento.value;

        valor = valor + "";
        valor = parseInt(valor.replace(/[\D]+/g, ""));
        valor = valor + "";
        valor = valor.replace(/([0-9]{2})$/g, ",$1");

        if (valor.length > 6) {
            valor = valor.replace(/([0-9]{3}),([0-9]{2}$)/g, ".$1,$2");
        }
        elemento.value = valor;
        if (valor == "NaN") elemento.value = "";
    }

    function detPagamento(value) {
        console.log(JSON.parse(value));
        valor = JSON.parse(value);
        $('#staticdrop').modal('show');
        $("#imgQrcodeQ").html('<img class="rounded img-thumbnail" src="' + valor.qrcode + '">');
        $('#chaveviewQ').html('<textarea class="form-control" rows="3" id="cola3">' + valor.chave + '</textarea>');
    }





    function detPed(value) {
        console.log(JSON.parse(value));
        valor = JSON.parse(value);
        $("#modalview").html(`<div class="p-2"><strong>Nome: </strong><span>` + valor.comprador + `</span></div><div class="p-2"><strong>CPF: </strong><span>` + valor.cpf + `</span></div><div class="p-2"><strong>Retirar por: </strong><span>` + valor.retira + `<strong>Quantidade: </strong></span></div><div>` + valor.qtde + `</div>`);
        $('#staticBackdrop').modal('show');
        // $('#staticBackdrop').modal('show');
        // $('#compradorview').text(valor.comprador);
        // if (valor.tipo !== "doacao") {
        //     $('#qtdeview').html('<div class="p-2"><strong>Quantidade: </strong>' + valor.qtde + '</div>');
        // }
        // $('#contatoview').text(valor.contato);
        // $('#cpfview').text(valor.cpf);
        // $('#dtcriaview').text(valor.dtcria);
        // $('#horasview').text(valor.horas);
        // $('#idview').text(valor.id);
        // $('#idapiview').text(valor.idapi);
        // $('#pagamentoview').text(valor.pagamento);
        // $('#qrcodeview').text(valor.qrcode);
        // $('#retiraview').text(valor.retira);
        // $('#statusview').text(valor.status);
        // $('#txidview').text(valor.txid);
        // $('#vtotalview').text(valor.vtotal);
        // $('#vunitarioview').text(valor.vunitario);
        // $('#tipoview').text(valor.tipo);
    }
</script>