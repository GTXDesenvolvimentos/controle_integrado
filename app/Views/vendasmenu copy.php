<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="row text-center">
                <div class="form-floating rounded p-1">
                    <img src="<?= base_url('/assets/img/feijoada.webp'); ?>" class="rounded img-thumbnail p-0" alt="Imagem">
                </div>
            </div>
        </div>

        <div class="col-md-9 p-1">
            <div class="col-md-12 p-0">
                <a href="<?= base_url('vendas') ?>" class="col-12 btn btn-success py-4" id="btnPed">FAZER PEDIDO</a>
            </div>
            <div class="col-md-12 p-0">
                <a href="<?= base_url('listview') ?>" class="col-12 btn btn-warning my-1 py-4">ACOMPANHAR PEDIDO</a>
            </div>
            <div class="col-md-12 p-0">
                <a href="<?= base_url('doacao') ?>" class="col-12 btn btn-dark py-4" id="btnDoador">SEJA UM DOADOR DA CAMPANHA</a>
            </div>
        </div>
    </div>
</div>