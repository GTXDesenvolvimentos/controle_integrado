<style>
    .bootstrap-select .dropdown-toggle .filter-option-inner-inner {
        padding: 6px;
        color: aliceblue;
    }
</style>
<div class="container-fluid">
    <div class="container-fluid mt-2 p-2">
        <div class="row mt-1">
            <div class="col-12 p-0">
                <div class="col-12">
                    <p class="fw-normal fst-italic">Clientes / Fornecedores</p>
                </div>
                <div class="col-12 p-0">
                    <a href="#!" class="btn btn-sm btn-success btn-lg toolbar" data-toggle="modal" data-target="#ModalCadcli">ADICIONAR</a>
                    <div class="table-responsive">
                        <div class="table-responsive">
                            <table class="table align-items-center table-flush" id="pagamentos" data-toolbar=".toolbar" toobar data-toggle="table" data-flat="true" data-search="true" data-show-pagination-switch="true" data-pagination="true" data-show-export="true" data-page-list="[2, 5, 25, 50, 100, ALL]" data-show-toggle="true" data-show-fullscreen="true" data-show-columns="true" data-show-columns-toggle-all="true" data-click-to-select="true" data-minimum-count-columns="2" data-show-pagination-switch="true" data-mobile-responsive="true" data-url="<?= base_url() ?>">
                                <thead class="thead-dark">
                                    <tr>
                                        <th data-field="id" data-halign="center" data-align="center" data-sortable="true">Pedido</th>
                                        <th data-field="comprador" data-halign="center" data-align="left" data-sortable="true">Comprador</th>
                                        <th data-field="cpf" data-halign="center" data-align="left" data-sortable="true">CPF</th>
                                        <th data-field="qtde" data-halign="center" data-align="center" data-sortable="true">Quantidade</th>
                                        <th data-field="horas" data-halign="center" data-align="center" data-sortable="true">H | Entrega</th>
                                        <th data-field="retira" data-halign="left" data-align="center" data-sortable="true">Retirar por:</th>
                                        <th data-field="contato" data-halign="center" data-align="center" data-sortable="true">Contato</th>
                                        <!-- <th data-field="nomeProjeto" data-halign="center" data-align="left" data-sortable="true">Contato</th> -->
                                        <th data-halign="center" data-field="id" class="" data-align="center" data-formatter="opcoes">opções</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- MODAL DEPARTAMENTO -->
<div class="modal" id="ModalCadcli" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="post" id="formDepartamentos">
                <div class="modal-header">
                    <h5 class="modal-title fw-normal fst-italic">Clientes / Fornecedores</h5>
                    <button type="button" class="close" data-dismiss="modal" onclick="clearForm();">&times;</button>
                </div>
                <input class="d-none" type="number" name="txtIdDepto" id="txtIdDepto">
                <div class="modal-body p-2">
                    <div class="col-12">
                        <div class="row">


                            <div class="form-group col-md-4 p-1">
                                <label class="m-0 px-1">Tipo:</label>
                                <select id="slDepProjeto" name="slDepProjeto" class="selectpicker form-control" data-style="btn-success">
                                    <option value="">Tipo:</option>
                                    <option value="">Cliente:</option>
                                    <option value="">Fornecedor:</option>
                                    <option value="">Ambos:</option>
                                </select>
                            </div>

                            <div class="form-group col-md-4 p-1">
                                <label class="m-0 px-1">Documento:</label>
                                <select id="slDepProjeto" name="slDepProjeto" class="selectpicker form-control" data-style="btn-success">
                                    <option value="">CNPJ:</option>
                                    <option value="">CPF:</option>
                                </select>
                            </div>

                            <div class="form-group col-md-4 p-1">
                                <label class="m-0 px-1">CNPJ:</label>
                                <input type="number" class="form-control py-4" name="txtCodDepto" id="txtCodDepto" placeholder="Código do departamento">
                            </div>

                        </div>
                    </div>


                    <div class="form-group col-12 p-0">
                        <label class="m-0 px-1">Código do departamento:</label>
                        <input type="number" class="form-control py-4" name="txtCodDepto" id="txtCodDepto" placeholder="Código do departamento">
                    </div>

                    <div class="form-group col-12 p-0">
                        <label class="m-0 px-1">Código do departamento:</label>
                        <input type="number" class="form-control py-4" name="txtCodDepto" id="txtCodDepto" placeholder="Código do departamento">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="clearForm();">Sair</button>
                    <button type="button" class="btn btn-success" id="btnDepartamentos">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</div>







<script>
    function opcoes(row, value) {
        return '<button class="btn btn-outline-success btn-sm"><i class="fa fa-search fa-1x py-2 px-1" aria-hidden="true"></i></button>';
    }

    function finalizar(value) {

        $.ajax({
            url: base_url + "/PagamentoController/finalizar",
            type: "POST",
            cache: false,
            data: {
                id: value,
            },
            dataType: "JSON",
            success: function(data) {
                $('#pagamentos').bootstrapTable('refresh');
                console.log(data);
                if (data.cod == 2) {
                    Swal.fire({
                        icon: "info",
                        title: "Oops...",
                        html: "" + data.msg + "",
                        confirmButtonColor: "#198754",
                        confirmButtonText: "Voltar",
                    });
                } else {
                    Swal.fire({
                        timer: 100,
                        title: "Aguarde...",
                        text: "Finalizando pedido",
                        imageUrl: base_url + "/assets/img/loader.gif",
                        showConfirmButton: false,
                    });
                }
            },
            beforeSend: function() {
                Swal.fire({
                    title: "Aguarde...",
                    text: "Finalizando pedido",
                    imageUrl: base_url + "/assets/img/loader.gif",
                    showConfirmButton: false,
                });
            },
            error: function(e) {
                console.log(e.responseText);
            },
        });


    }

    iniciarVerificacao();
    var verificar;

    function iniciarVerificacao() {
        if (verificar) clearInterval(verificar);
        verificar = setInterval(function() {
            if ($('#botao').is(':visible')) {
                console.log('botão vísivel');
                clearInterval(verificar);
                $('#botao').trigger('click');
                console.log('botão removido');
                iniciarVerificacao();
            } else {
                $.ajax({
                    url: base_url + "/PagamentoController/retorno",
                    type: "POST",
                    cache: false,
                    dataType: "JSON",
                    success: function(data) {
                        console.log(data);
                        if (data.cod == 2) {
                            Swal.fire({
                                icon: "info",
                                title: "Oops...",
                                html: "" + data.msg + "",
                                confirmButtonColor: "#198754",
                                confirmButtonText: "Voltar",
                            });
                        } else {
                            Swal.fire({
                                timer: 100,
                                title: "Aguarde...",
                                text: "Consultando CPF",
                                imageUrl: base_url + "/assets/img/loader.gif",
                                showConfirmButton: false,
                            });
                        }
                    },
                    beforeSend: function() {
                        Swal.fire({
                            title: "Aguarde...",
                            text: "Consultando CPF",
                            imageUrl: base_url + "/assets/img/loader.gif",
                            showConfirmButton: false,
                        });
                    },
                    error: function(e) {
                        console.log(e.responseText);
                    },
                });
                iniciarVerificacao(); // Aqui seria para reiniciar e verificar novamente se o botão está vísivel (function iniciarVerificacao()
            }
        }, 50000000);
    }
</script>