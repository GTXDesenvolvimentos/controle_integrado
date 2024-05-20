<div class="container-fluid">
    <div class="row justify-content-md-center pt-5">
        <div class="col-sm-8 col-md-5 col-xl-3 col-xs-12 ">
            <div class="card shadow p-3 mb-5 bg-body rounded">
                <div class="card-body p-0">
                    <img class="figure-img img-fluid rounded px-5 py-2" src="https://cinpal.com/Logos/logo_intranet.png">
                    <?php if (session()->getFlashdata('msg')) : ?>
                        <div class="alert alert-danger">
                            <?= session()->getFlashdata('msg') ?>
                        </div>
                    <?php endif; ?>
                    <hr>
                    <p class="fw-normal fst-italic text-center fs-5">Controle integrado.</p>
                    <form action="<?php echo base_url('/SigninController/loginAuth'); ?>" method="post">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control py-5">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" placeholder="Password" class="form-control py-5">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-lg btn-success py-4">Logar</button>
                            <p class="fw-normal fst-italic text-center fs-6">Desenvolvido por Cinpal <br> Cia indl de Peças para Automoveis.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>