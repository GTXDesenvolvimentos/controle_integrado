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


<section class="min-vh-100 bg-image pt-5" style="background-color: #091d51;">
    <div class="mask d-flex align-items-center h-100 gradient-custom-2">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">

               

                <div class="col-12 col-md-9 col-lg-7 col-xl-6 pt-1">



               
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-1">
                            <p class="fst-italic col-12 text-center pt-2" style="text-shadow: #84fab0;">Igreja evangélica Ass. de Deus <br>Ministério Belém</p>
                        </div>
                    </div>
              

                    <div class="card  my-2" style="border-radius: 15px;">

                        <div class="card-body p-1">

                            <form action="" method="post" id="frmDoacao">
                                <div class="row m-1">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-floating col-md-12 p-1">
                                                <input type="text" autocomplete="off" class="form-control border border-success" name="txtNomeDoador" id="txtNomeDoador" placeholder="Nome completo">
                                                <label for="txtNomeDoador">Nome do doador:</label>
                                            </div>
                                            <div class="form-floating col-md-12 p-1">
                                                <input type="text" autocomplete="off" class="form-control border border-success" name="txtCpf" id="txtCpf" placeholder="CPF">
                                                <label for="txtCpf">CPF:</label>
                                            </div>
                                            <div class="form-floating col-md-12 p-1">
                                                <input type="text" autocomplete="off" class="form-control border border-success" name="txtContato" id="txtContato" placeholder="Contato">
                                                <label for="txtContato">Contato (Opcional):</label>
                                            </div>

                                            <div class="form-floating col-md-12 p-1">

                                                <input type="text" autocomplete="off" maxlength="9" class="form-control  border border-success text-end" name="txtValorDoacao" id="txtValorDoacao" placeholder="Daoção" onkeyup="formatarMoeda()">
                                                <label for="txtValorDoacao">Valor:</label>
                                            </div>

                                            <div class="d-grid p-1 col-md-12">
                                                <button type="submit" class="btn btn-lg btn-thumbnail border-1 btn-success">Enviar doação</button>
                                            </div>


                                            <div class="row">
                                                <div class=" col-12 text-center">
                                                    <a href="<?= base_url('vendasmenu') ?>" style="background-color: #091d51;" type="submit" class="btn btn-info  border-1 btn-outline-dark text-light"><i class="fa fa-arrow-circle-left fa fa-1x" aria-hidden="true"></i> VOLTAR PARA O MENU</a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <p class="fst-italic text-center" style="text-shadow: #84fab0; color: #FFF">Desenvolvido por Márcio Silva<br>GTXSoftware</p>
                </div>
            </div>
        </div>
    </div>
</section>








<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title " id="exampleModalLabel">Dados de pagamento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="vendasMenu();"></button>
            </div>
            <div class="modal-body text-center">
                <div class="p-2" id="imgQrcode"></div>
                <div id="copCola"></div>
                <div id="btnPag"></div>
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
</script>