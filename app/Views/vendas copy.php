<style>
    /* BASIC */

    html {
        background-color: #5fbae9;
    }

    body {
        font-family: "Poppins", sans-serif;
        height: 100vh;
    }

    a {
        color: #92badd;
        display: inline-block;
        text-decoration: none;
        font-weight: 400;
    }

    h2 {
        text-align: center;
        font-size: 16px;
        font-weight: 600;
        text-transform: uppercase;
        display: inline-block;
        margin: 40px 8px 10px 8px;
        color: #cccccc;
    }



    /* STRUCTURE */

    .wrapper {
        display: flex;
        align-items: center ;
        flex-direction: column;
        justify-content: center;
        width: 100%;
        min-height: 100%;
        padding: 20px;
    }

    #formContent {
        -webkit-border-radius: 10px 30px 10px 30px;
        border-radius: 10px 10px 10px 10px;
        background: #fff;
        padding: 30px;
        width: 90%;
        max-width: 450px;
        position: relative;
        padding: 0px;
        -webkit-box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.5);
        box-shadow: 0 30px 60px 0 rgba(0, 0, 0, 0.5);
        text-align: center;
    }

    #formFooter {
        background-color: #f6f6f6;
        border-top: 1px solid #dce8f1;
        padding: 25px;
        text-align: center;
        -webkit-border-radius: 0 0 10px 10px;
        border-radius: 0 0 10px 10px;
    }



    /* TABS */

    h2.inactive {
        color: #cccccc;
    }

    h2.active {
        color: #0d0d0d;
        border-bottom: 2px solid #5fbae9;
    }



    /* FORM TYPOGRAPHY*/

    input[type=button],
    input[type=submit],
    input[type=reset] {
        background-color: #56baed;
        border: none;
        color: white;
        padding: 15px 80px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        text-transform: uppercase;
        font-size: 13px;
        -webkit-box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
        box-shadow: 0 10px 30px 0 rgba(95, 186, 233, 0.4);
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
        margin: 5px 20px 40px 20px;
        -webkit-transition: all 0.3s ease-in-out;
        -moz-transition: all 0.3s ease-in-out;
        -ms-transition: all 0.3s ease-in-out;
        -o-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out;
    }

    input[type=button]:hover,
    input[type=submit]:hover,
    input[type=reset]:hover {
        background-color: #39ace7;
    }

    input[type=button]:active,
    input[type=submit]:active,
    input[type=reset]:active {
        -moz-transform: scale(0.95);
        -webkit-transform: scale(0.95);
        -o-transform: scale(0.95);
        -ms-transform: scale(0.95);
        transform: scale(0.95);
    }

    input[type=text] {
        background-color: #f6f6f6;
        border: none;
        color: #0d0d0d;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 5px;
        width: 85%;
        border: 2px solid #f6f6f6;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -ms-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
        -webkit-border-radius: 5px 5px 5px 5px;
        border-radius: 5px 5px 5px 5px;
    }

    input[type=text]:focus {
        background-color: #fff;
        border-bottom: 2px solid #5fbae9;
    }

    input[type=text]:placeholder {
        color: #cccccc;
    }



    /* ANIMATIONS */

    /* Simple CSS3 Fade-in-down Animation */
    .fadeInDown {
        -webkit-animation-name: fadeInDown;
        animation-name: fadeInDown;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
    }

    @-webkit-keyframes fadeInDown {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }

        100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
    }

    @keyframes fadeInDown {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }

        100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
    }

    /* Simple CSS3 Fade-in Animation */
    @-webkit-keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @-moz-keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .fadeIn {
        opacity: 0;
        -webkit-animation: fadeIn ease-in 1;
        -moz-animation: fadeIn ease-in 1;
        animation: fadeIn ease-in 1;

        -webkit-animation-fill-mode: forwards;
        -moz-animation-fill-mode: forwards;
        animation-fill-mode: forwards;

        -webkit-animation-duration: 1s;
        -moz-animation-duration: 1s;
        animation-duration: 1s;
    }

    .fadeIn.first {
        -webkit-animation-delay: 0.4s;
        -moz-animation-delay: 0.4s;
        animation-delay: 0.4s;
    }

    .fadeIn.second {
        -webkit-animation-delay: 0.6s;
        -moz-animation-delay: 0.6s;
        animation-delay: 0.6s;
    }

    .fadeIn.third {
        -webkit-animation-delay: 0.8s;
        -moz-animation-delay: 0.8s;
        animation-delay: 0.8s;
    }

    .fadeIn.fourth {
        -webkit-animation-delay: 1s;
        -moz-animation-delay: 1s;
        animation-delay: 1s;
    }

    /* Simple CSS3 Fade-in Animation */
    .underlineHover:after {
        display: block;
        left: 0;
        bottom: -10px;
        width: 0;
        height: 2px;
        background-color: #56baed;
        content: "";
        transition: width 0.2s;
    }

    .underlineHover:hover {
        color: #0d0d0d;
    }

    .underlineHover:hover:after {
        width: 100%;
    }

    h1 {
        color: #60a0ff;
    }

    /* OTHERS */

    *:focus {
        outline: none;
    }

    #icon {
        width: 30%;
    }
</style>

<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <img src="https://www.b-cube.in/wp-content/uploads/2014/05/aditya-300x177.jpg" id="icon" alt="User Icon" />
            <h1>Aditya News</h1>
        </div>

        <!-- Login Form -->
        <form>
            <input type="text" id="login" class="fadeIn second" name="login" placeholder="username">
            <input type="text" id="password" class="fadeIn third" name="login" placeholder="password">
            <input type="submit" class="fadeIn fourth" value="Log In">
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover" href="#">FINALIZAR MEU PEDIDO</a>
        </div>

    </div>
</div>


<div class="container-fluid p-1">
    <form action="" method="post" id="frmPedidos">

        <div class="row m-1">
            <div class="col-md-12">
                <div class="row">
                    <div class="form-floating col-md-9 p-1">
                        <label class="mb-0" for="txtNomeComprador">Nome do comprador:</label>
                        <input type="text" autocomplete="off" class="form-control border border-success py-4" name="txtNomeComprador" id="txtNomeComprador" placeholder="Nome completo">
                    </div>
                    <div class="form-floating col-md-3 p-1">
                        <label class="mb-0" for="txtCpf">CPF:</label>
                        <input type="text" autocomplete="off" class="form-control border border-success py-4" name="txtCpf" id="txtCpf" placeholder="CPF">

                    </div>
                    <div class="form-floating col-md-3 p-1">
                        <label class="mb-0" for="txtContato">Contato:</label>
                        <input type="text" autocomplete="off" class="form-control border border-success py-4" name="txtContato" id="txtContato" placeholder="Contato">

                    </div>
                    <div class="form-floating  col-md-6 p-1">
                        <label class="mb-0" for="txtNomeRetira">Nome de quem irá retirar:</label>
                        <input type="text" autocomplete="off" class="form-control border border-success py-4" name="txtNomeRetira" id="txtNomeRetira" placeholder="Retira">

                    </div>


                    <div class="form-floating col-6 p-1">
                        <label class="mb-0" for="txtHoras">Horário para retirar:</label>
                        <select class="form-control  border border-warning selectpicker" id="txtHoras" name="txtHoras" data-style="btn-warning">
                            <option value="">Horário</option>
                            <option value="11:00">11:00hs</option>
                            <option value="11:30">11:30hs</option>
                            <option value="12:00">12:00hs</option>
                            <option value="12:30">12:30hs</option>
                            <option value="13:00">13:00hs</option>
                        </select>
                    </div>

                    <div class="form-floating col-6 p-1">
                        <label class="mb-0" for="">Quantidade:</label>
                        <select class="form-control  border border-warning selectpicker" id="txtQtde" name="txtQtde" data-style="btn-warning" onchange="countQtde(this.value);">
                            <option value="">Quantidade</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>

                    </div>

                    <div id="tableCount" class="col-md-12 p-1">
                        <div class=" border border-success rounded">
                            <table class="table">
                                <tr class="text-center">
                                    <td colspan="2"><i class="text-center"><strong class="text-success">Confere seu pedido:</strong></i></td>
                                </tr>
                                <tr>
                                    <td class="col-6 text-start"><i class="text-left">Quantidade:</i></td>
                                    <td class="col-6 text-end"><i id="contQtde">0</i></td>
                                </tr>
                                <tr>
                                    <td class="col-6 text-start"><i class="text-left">Valor unitário:</i></td>
                                    <td class="col-6 text-end"><i id="contVunit">R$ 35,00</i></td>
                                </tr>
                                <tr>
                                    <td class="col-6 text-start"><strong class="text-left">Total a pagar</strong></td>
                                    <td class="col-6 text-end"><strong id="contVtotal" class="text-danger">R$ 70,00</strong></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="d-grid p-1 col-md-12">
                        <button type="submit" class="btn btn-lg btn-thumbnail border-1 btn-success">Finalizar meu pedido</button>
                    </div>

                </div>
            </div>
        </div>
    </form>
</div>

<div class="row">
    <div class=" col-md-12 align-center">
        <a href="<?= base_url('vendasmenu') ?>" type="submit" class="btn btn-lg border-1 btn-outline-dark">VOLTAR PARA O MENU</a>
    </div>
</div>



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