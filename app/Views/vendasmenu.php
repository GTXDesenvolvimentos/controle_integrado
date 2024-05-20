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

    .grad {
        box-shadow: 0px -1px 9px 1px rgba(0, 0, 0, 0.67);
        -webkit-box-shadow: 0px -1px 9px 1px rgba(0, 0, 0, 0.67);
        -moz-box-shadow: 0px -1px 9px 1px rgba(0, 0, 0, 0.67);
    }
</style>

<section class="min-vh-100 bg-image" style="background-color: #091d51;">
    <div class="mask d-flex align-items-center h-100 gradient-custom-2">


        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6 pt-1">


                    <div class="card my-2 grad m-0" style="border-radius: 15px;">
                        <div class="card-body p-1 m-0">
                            <p class="fst-italic col-12 text-center  m-0" style="text-shadow: #84fab0;">Igreja evangélica Ass. de Deus | Belém</p>
                        </div>
                    </div>

                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-1">
                            <div class="form-floating rounded">
                                <img src="<?= base_url('/assets/img/feijoada.webp'); ?>" class="rounded img-thumbnail p-0" alt="Imagem">
                            </div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-6 p-1">
                                        <a href="<?= base_url('vendas') ?>" type="button" class="btn btn-dark btn-square-md col-12 grad"><i class="fa fa-shopping-cart fa-3x" aria-hidden="true"></i>
                                            <p class="lead m-0"><em>COMPRAR <br> AGORA</em></p>
                                        </a>
                                    </div>
                                    <div class="col-6 p-1">
                                        <a href="<?= base_url('listview') ?>" type="button" class="btn btn-warning btn-square-md col-12 grad"><i class="fa fa fa-search fa-3x" aria-hidden="true"></i>
                                            <p class="lead m-0"><em>ACOMPANHE <br> SEU PEDIDO</em></p>
                                        </a>
                                    </div>
                                    <div class="col-6 p-1">
                                        <a href="https://api.whatsapp.com/send/?phone=5511989859400&text=A+paz+do+Senhor+Jesus!🙏🙏🙏🙏🙏+Gostaria+de+abençoar+a+obra+adquirindo+uma+feijoada!😋😋&type=custom_url&app_absent=1" utton type="button" class="btn btn-success btn-square-md col-12 grad"><i class="fa fa-whatsapp" style="font-size:48px;color:#FFF"></i>
                                            <p class="lead m-0"><em>FALE COM <br> A GENTE!</em></p>
                                        </a>
                                    </div>
                                    <div class="col-6 p-1">
                                        <a href="<?= base_url('doacao') ?>" class="btn btn-danger btn-square-md col-12 grad"><i class="fa fa-thumbs-up fa-3x" aria-hidden="true"></i>
                                            <p class="lead m-0"><em>SEJA UM <br> APOIADOR</em></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <p class="fst-italic text-center" style="text-shadow: #84fab0; color: #FFF">Desenvolvido por Márcio Silva<br>GTXSoftware</p>
                </div>
            </div>
        </div>
    </div>
</section>