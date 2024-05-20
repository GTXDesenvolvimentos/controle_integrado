$(function () {
  $("#frmPedidos").on("submit", function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      url: base_url + "/VendasController/cadPedidos",
      type: "POST",
      cache: false,
      data: formData,
      processData: false,
      contentType: false,
      dataType: "JSON",
      success: function (data) {
        console.log(123);

        Swal.fire({
          timer: 100,
          title: "Aguarde...",
          text: "Enviando os dados",
          imageUrl: base_url + "/assets/img/loader.gif",
          showConfirmButton: false,
        });
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
          $("#frmPedidos").trigger("reset");
          $("#imgQrcode").html(
            '<img class="rounded img-thumbnail" src="' + data.img + '">'
          );
          $("#copCola").html(
            '<textarea class="form-control" rows="3" id="cola">' +
              data.cola +
              "</textarea>"
          );
          $("#btnPag").html(
            '<button class="btn btn-success mt-2" id="copyCola" onclick="copiarTexto(`' +
              data.cola +
              '`)">Copiar chave de pagamento</button>'
          );

          $(function () {
            var staticBackdrop = document.getElementById("staticBackdrop");
            var myModal = new bootstrap.Modal(staticBackdrop);
            myModal.show();
          });
        }
      },
      beforeSend: function () {
        Swal.fire({
          title: "Aguarde...",
          text: "Enviando os dados",
          imageUrl: base_url + "/assets/img/loader.gif",
          showConfirmButton: false,
        });
      },
      error: function (e) {
        console.log(e.responseText);
      },
    });
  });
});

$(function () {
  $("#frmDoacao").on("submit", function (e) {
    e.preventDefault();
    var formData = new FormData(this);
    $.ajax({
      url: base_url + "/DoacaoController/cadDoacao",
      type: "POST",
      cache: false,
      data: formData,
      processData: false,
      contentType: false,
      dataType: "JSON",
      success: function (data) {
        Swal.fire({
          timer: 100,
          title: "Aguarde...",
          text: "Enviando os dados",
          imageUrl: base_url + "/assets/img/loader.gif",
          showConfirmButton: false,
        });
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
          $("#frmPedidos").trigger("reset");
          $("#imgQrcode").html(
            '<img class="rounded img-thumbnail" src="' + data.img + '">'
          );
          $("#copCola").html(
            '<textarea class="form-control" rows="3" id="cola">' +
              data.cola +
              "</textarea>"
          );
          $("#btnPag").html(
            '<button class="btn btn-success mt-2" id="copyCola" onclick="copiarTexto(`' +
              data.cola +
              '`)">Copiar chave de pagamento</button>'
          );

          $(function () {
            var staticBackdrop = document.getElementById("staticBackdrop");
            var myModal = new bootstrap.Modal(staticBackdrop);
            myModal.show();
          });
        }
      },
      beforeSend: function () {
        Swal.fire({
          title: "Aguarde...",
          text: "Enviando os dados",
          imageUrl: base_url + "/assets/img/loader.gif",
          showConfirmButton: false,
        });
      },
      error: function (e) {
        console.log(e.responseText);
      },
    });
  });
});

function copiarTexto() {
  var textoCopiado = document.getElementById("cola");
  textoCopiado.select();
  textoCopiado.setSelectionRange(0, 99999); /* Para mobile */
  document.execCommand("copy");
  $("#copyCola").removeClass("btn-success");
  $("#copyCola").addClass("btn-outline-warning");
}

function copiarTexto2() {
  var textoCopiado = document.getElementById("cola2");
  textoCopiado.select();
  textoCopiado.setSelectionRange(0, 99999); /* Para mobile */
  document.execCommand("copy");
  $("#copyCola2").removeClass("btn-danger");
  $("#copyCola2").addClass("btn-outline-warning");
}

function copiarTexto3() {
  var textoCopiado = document.getElementById("cola3");
  textoCopiado.select();
  textoCopiado.setSelectionRange(0, 99999); /* Para mobile */
  document.execCommand("copy");
  $("#copyCola3").removeClass("btn-warning");
  $("#copyCola3").addClass("btn-outline-success");
}

function vendasMenu() {
  window.location.href = base_url + "vendasmenu";
}

function buscaPedido() {
  var cpf = $("#txtCpf").val();
  $.ajax({
    url: base_url + "/VendasController/buscaPedido",
    type: "POST",
    cache: false,
    data: {
      cpf: cpf,
    },
    dataType: "JSON",
    success: function (data) {
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
    beforeSend: function () {
      Swal.fire({
        title: "Aguarde...",
        text: "Consultando CPF",
        imageUrl: base_url + "/assets/img/loader.gif",
        showConfirmButton: false,
      });
    },
    error: function (e) {
      console.log(e.responseText);
    },
  });
}

function countQtde(value) {
  if (parseInt(value) > 0) {
    $("#tableCount").removeClass("d-none");
    $("#contQtde").text(value);
    $("#contVunit").text("R$ 45,00");
    varqtde = parseFloat(value);
    vunit = parseFloat(45.0);
    vtotal = parseFloat(vunit * varqtde);
    dinheiro = vtotal.toLocaleString("pt-br", {
      style: "currency",
      currency: "BRL",
    });
    $("#contVtotal").text(dinheiro);
  } else {
    Swal.fire({
      icon: "info",
      title: "Oi...",
      html: "Você precisa informa a quantidade!",
      confirmButtonColor: "#198754",
      confirmButtonText: "ok",
    });
  }
}

$("#txtCpf").mask("000.000.000-00");
$("#telefone").mask("(00) 0000-0000");
$("#txtDtnasc").mask("00/00/0000");
$("#txtAdmissao").mask("00/00/0000");
$("#txtDtBatismo").mask("00/00/0000");
$("#txtDtConsa").mask("(00/00/0000");
$("#txtContato").mask("(00) 00000-0000");
