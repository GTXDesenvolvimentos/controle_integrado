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
                        <div class="card-body p-1">

                            <form action="" method="post" id="frmPedidos">
                                <div class="row m-1">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="form-floating col-12 p-1">
                                                <input type="text" autocomplete="off" class="form-control border border-success" name="txtNomeComprador" id="txtNomeComprador" placeholder="Nome completo">
                                                <label for="txtNomeComprador">Nome do comprador:</label>
                                            </div>
                                            <div class="form-floating  col-12 p-1">
                                                <input type="text" autocomplete="off" class="form-control border border-success" name="txtCpf" id="txtCpf" placeholder="CPF">
                                                <label for="txtCpf">CPF:</label>
                                            </div>
                                            <div class="form-floating  col-12 p-1">
                                                <input type="text" autocomplete="off" class="form-control border border-success" name="txtContato" id="txtContato" placeholder="CPF">
                                                <label for="txtContato">Contato:</label>
                                            </div>
                                            <div class="form-floating   col-12 p-1">
                                                <input type="text" autocomplete="off" class="form-control border border-success" name="txtNomeRetira" id="txtNomeRetira" placeholder="Retira">
                                                <label for="txtNomeRetira">Nome de quem irá retirar:</label>
                                            </div>


                                            <div class="form-floating  col-12 p-1">
                                                <select class="form-control  border border-success" id="txtHoras" name="txtHoras" style="background-color: #95ed98;" data-style="btn-dark">
                                                    <option>--- </option>
                                                    <option value="11:00">11:00hs</option>
                                                    <option value="11:30">11:30hs</option>
                                                    <option value="12:00">12:00hs</option>
                                                    <option value="12:30">12:30hs</option>
                                                    <option value="13:00">13:00hs</option>
                                                </select>
                                                <label for="txtHoras">Horário para retirar:</label>
                                            </div>

                                            <div class="form-floating  col-12 p-1">
                                                <select class="form-control  border border-success" id="txtQtde" name="txtQtde" style="background-color: #95ed98;" data-style="btn-dark" onchange="countQtde(this.value);">
                                                    <option value="">---</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                                <label for="">Quantidade:</label>
                                            </div>

                                            <div id="tableCount" class="col-md-12 p-1 d-none">
                                                <div class=" border border-success rounded">
                                                    <table class="table">
                                                        <tr class="text-center">
                                                            <td colspan="2" class="text-center p-1"><i class="text-center"><strong class="text-success">Confere seu pedido:</strong></i></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="col-6 text-start p-1"><i class="text-left">Quantidade:</i></td>
                                                            <td class="col-6 text-end p-1"><i id="contQtde">0</i></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="col-6 text-start  p-1"><i class="text-left">Valor unitário:</i></td>
                                                            <td class="col-6 text-end"  p-1><i id="contVunit">R$ 45,00</i></td>
                                                        </tr>
                                                        <tr>
                                                            <td class="col-6 text-start  p-1"><strong class="text-left">Total a pagar</strong></td>
                                                            <td class="col-6 text-end  p-1"><strong id="contVtotal" class="text-danger"></strong></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="d-grid p-1 col-12 text-start">
                                                <button type="submit" class="btn btn-lg btn-thumbnail border-1 btn-success"> <i class="fa fa-arrow-circle-down" aria-hidden="true"></i> Finalizar meu pedido</button>
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

