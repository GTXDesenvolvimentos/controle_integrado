<div class="container-fluid">
    <div class="row">
        <div class="form-floating rounded p-1 col-12">
            <p class="alert alert-success m-0 p-2" class="fw-lighter m-0"><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i><strong>Local de Entrega:</strong> Assembléia de Deus M. Belém R. Alberto José, 146 - Jardim Salete</p>
        </div>
    </div>
    <div class="row">
        <form action="<?php echo site_url('/ListviewController/buscapedido'); ?>" method="post">
            <div class="row">
                <div class="form-floating col-8 p-1">
                    <input type="text" autocomplete="off" class="form-control border border-primary" name="txtCpf" id="txtCpf" placeholder="CPF">
                    <label for="txtCpf">CPF:</label>
                </div>
                <div class="d-grid p-1 col-4">
                    <button type="submit" class="btn btn-lg btn-thumbnail border-1 btn-success">BUSCAR</button>
                </div>
            </div>
        </form>
    </div>
    <div class="row">
        <div class="col-md-12 p-1">

            <?php
            if (isset($data)) {
                if (!empty($data)) {
                    foreach ($data as $linha) :
                        if ($linha['tipo'] == 'compra') {


            ?>
                            <div class="card">
                                <div class="card-body p-1">
                                    <div class="row">
                                        <div class="col-8">
                                            <p class="fs-6">NRO.Pedido: <?= $linha['id']; ?></p>
                                            <h5 class="card-title text-center m-0"><?= $linha['comprador']; ?></h5>
                                            <p class="card-text m-0">Retira: <?= $linha['retira']; ?></p>
                                            <p class="card-text m-0">Quantidade: <?= $linha['qtde']; ?></p>
                                            <p class="card-text m-0">data: <?= $linha['dtcria']; ?></p>
                                            <p class="fw-lighter m-0">Agendado para retirar: <?= $linha['horas']; ?>hs</p>
                                            <p class="fw-lighter m-0">Local de retira: <?= $linha['horas']; ?>hs</p>
                                            <?php
                                            if ($linha['pagamento'] == 'ATIVA') {
                                            ?>
                                        </div>
                                        <p class="card-text m-0">Status: <strong class="text-danger">Aguardando Pagamento</strong></p>
                                        <div class="col-4">
                                            <img class="rounded img-thumbnail" src="<?= $linha['qrcode']; ?>">
                                        </div>
                                        <div class="col-12 my-1">
                                            <textarea class="form-control" id="cola2"><?= $linha['chave']; ?></textarea>
                                        </div>
                                        <div class="col-12">
                                            <a href="#" class="btn btn-danger text-center col-12" id="copyCola2" onclick="copiarTexto2()">COPIAR CHAVE PIX</a>
                                        </div>
                                    <?php
                                            } else if ($linha['pagamento'] == 'CONCLUIDA') {
                                                print '<p class="card-text m-0"><strong class="text-success">PAGAMENTO ONCLUIDO</strong></p>';
                                            } else if ($linha['pagamento'] == 'REMOVIDA_PELO_USUARIO_RECEBEDOR') {
                                                print '<p class="card-text m-0"><strong class="text-dark">REMOVIDA_PELO_USUARIO_RECEBEDOR</strong></p>';
                                            } else if ($linha['pagamento'] == 'REMOVIDA_PELO_PSP') {
                                                print '<p class="card-text m-0"><strong class="text-success">REMOVIDA_PELO_PSP</strong></p>';
                                            }else{
                                                print 'Erro' ;                                               
                                            }
                                    ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                        } else {
                        ?>
                            <div class="card">
                                <div class="card-body p-1">
                                    <div class="row">
                                        <div class="col-8">
                                            <p class="fs-6">Nro: <?= $linha['id']; ?></p>
                                            <h5 class="card-title text-center m-0"><?= $linha['comprador']; ?></h5>
                                            <p class="card-text m-0">Status: <strong class="text-danger">Aguardando Pagamento</strong></p>
                                        </div>
                                        <div class="col-4">
                                            <img class="rounded img-thumbnail" src="<?= $linha['qrcode']; ?>">
                                        </div>
                                        <div class="col-12 my-1">
                                            <textarea class="form-control" rows="3" id="cola3"><?= $linha['chave']; ?></textarea>
                                        </div>
                                        <div class="col-12">
                                            <a href="#" class="btn btn-warning text-center col-12" id="copyCola3" onclick="copiarTexto3()">COPIAR CHAVE PIX</a>
                                        </div>
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





        <div class="row mt-2">
            <div class=" col-md-12 text-center">
                <a href="<?= base_url('vendasmenu') ?>" type="submit" class="btn btn-lg border-1 btn-outline-dark">VOLTAR PARA O MENU</a>
            </div>
        </div>

    </div>
</div>