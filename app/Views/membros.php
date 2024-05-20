<div class="container-fluid p-1">
    <form action="" method="post" id="frm-add-user">
        <div class="row m-1">
            <div class="col-md-2">
                <div class="row text-center">
                    <div class="form-floating col-md-12 pt-1 rounded">
                        <img src="<?= base_url('/assets/img/avatar.jpg'); ?>" class="rounded img-thumbnail p-4 " width="170px" alt="Imagem">
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="form-floating col-md-9 p-1">
                        <input type="text" autocomplete="off" class="form-control border border-primary" name="txtNome" id="txtNome" placeholder="Nome completo">
                        <label for="txtNome">Nome:</label>
                    </div>
                    <div class="form-floating col-md-3 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtCpf" id="txtCpf" placeholder="CPF" onblur="validaCPF($(this).val());">
                        <label for="txtCpf">CPF:</label>
                    </div>
                    <div class="form-floating  col-md-6 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtNpai" id="txtNpai" placeholder="nome do Pai">
                        <label for="txtNpai">Nome do Pai:</label>
                    </div>
                    <div class="form-floating col-md-6 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtNmae" id="txtNmae" placeholder="Nome da Mãe">
                        <label for="txtNmae">Nome da Mãe:</label>
                    </div>
                    <div class="form-floating col-md-3 p-1">
                        <select class="selectpicker form-control" id="txtrEstCivil" name="txtrEstCivil" data-style="btn-dark" onchange="habilita_info($(this).val());">
                            <option>--- </option>
                            <option value="CASADO">CASADO</option>
                            <option value="CASADO">CASADA</option>
                            <option value="SOLTEIRA">SOLTEIRA</option>
                            <option value="SOLTEIRO">SOLTEIRO</option>
                            <option value="DIVORCIADO">DIVORCIADO</option>
                            <option value="DIVORCIADA">DIVORCIADA</option>
                            <option value="VIÚVO">VIÚVO</option>
                            <option value="VIÚVA">VIÚVA</option>
                        </select>
                        <label for="txtrEstCivil">Est. Civil:</label>
                    </div>

                    <div class="form-floating col-md-7 p-1">
                        <select class="selectpicker form-control" id="txtrClassificacao" name="txtrClassificacao" onchange="habilita_info($(this).val());">
                            <option value="">------</option>
                            <option value="MEMBRO">MEMBRO</option>
                            <option value="CONGREGADO">CONGREGADO</option>
                            <option value="CRIANÇA">CRIANÇA</option>
                            <option value="OUTROS">OUTROS</option>
                        </select>
                        <label for="txtrClassificacao">Classificação:</label>
                    </div>

                    <div class="form-floating  col-md-2 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtDtnasc" id="txtDtnasc" placeholder="data de nascimento">
                        <label for="txtDtnasc">Data de Nascimento:</label>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="row">

                    <div class="form-floating  col-md-3 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtRg" id="txtRg" placeholder="RG">
                        <label for="txtRg">RG:</label>
                    </div>

                    <div class="form-floating  col-md-3 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtnatural" id="txtnatural" placeholder="Naturalidade">
                        <label for="txtRg">Natural de:</label>
                    </div>

                    <div class="form-floating col-md-3 p-1">
                        <select class="selectpicker form-control" id="txtEstado" name="txtEstado" data-style="btn-dark" onchange="habilita_info($(this).val());">
                            <option>Selecione o Estado</option>
                            <option value="Acre">Acre</option>
                            <option class="text-uppercase" value="Alagoas">Alagoas</option>
                            <option class="text-uppercase" value="Amapá">Amapá</option>
                            <option class="text-uppercase" value="Amazonas">Amazonas</option>
                            <option class="text-uppercase" value="Bahia">Bahia</option>
                            <option class="text-uppercase" value="Ceará">Ceará</option>
                            <option class="text-uppercase" value="Distrito Federal">Distrito Federal</option>
                            <option class="text-uppercase" value="Espirito Santo">Espirito Santo</option>
                            <option class="text-uppercase" value="Goiás">Goiás</option>
                            <option class="text-uppercase" value="Maranhão">Maranhão</option>
                            <option class="text-uppercase" value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                            <option class="text-uppercase" value="Mato Grosso">Mato Grosso</option>
                            <option class="text-uppercase" value="Minas Gerais">Minas Gerais</option>
                            <option class="text-uppercase" value="Pará">Pará</option>
                            <option class="text-uppercase" value="Paraíba">Paraíba</option>
                            <option class="text-uppercase" value="Paraná">Paraná</option>
                            <option class="text-uppercase" value="Pernambuco">Pernambuco</option>
                            <option class="text-uppercase" value="Piauí">Piauí</option>
                            <option class="text-uppercase" value="Rio de Janeiro">Rio de Janeiro</option>
                            <option class="text-uppercase" value="Rio Grande do Norte">Rio Grande do Norte</option>
                            <option class="text-uppercase" value="Rio Grande do Sul">Rio Grande do Sul</option>
                            <option class="text-uppercase" value="Rondônia">Rondônia</option>
                            <option class="text-uppercase" value="Roraima">Roraima</option>
                            <option class="text-uppercase" value="Santa Catarina">Santa Catarina</option>
                            <option class="text-uppercase" value="São Paulo">São Paulo</option>
                            <option class="text-uppercase" value="Sergipe">Sergipe</option>
                            <option class="text-uppercase" value="Tocantins">Tocantins</option>
                        </select>
                        <label for="txtNmae">Estado:</label>
                    </div>

                    <div class="form-floating  col-md-3 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtPais" id="txtPais" placeholder="País">
                        <label for="txtPais">País:</label>
                    </div>

                    <div class="form-floating  col-md-6 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtEscolaridade" id="txtEscolaridade" placeholder="Escolaridade">
                        <label for="txtEscolaridade">Escolaridade:</label>
                    </div>

                    <div class="form-floating  col-md-6 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtProfissao" id="txtProfissao" placeholder="Profissão">
                        <label for="txtProfissao">Profissão:</label>
                    </div>

                    <div class="form-floating  col-md-2 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtCep" id="txtCep" placeholder="CEP" onblur="validaCEP($(this).val())">
                        <label for="txtNumero">CEP:</label>
                    </div>

                    <div class="form-floating  col-md-6 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtLogradouro" id="txtLogradouro" placeholder="Logradouro">
                        <label for="txtLogradouro">Logradouro:</label>
                    </div>

                    <div class="form-floating  col-md-2 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtNumero" id="txtNumero" placeholder="Numero">
                        <label for="txtNumero">Número:</label>
                    </div>

                    <div class="form-floating  col-md-2 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtBairro" id="txtBairro" placeholder="Bairro">
                        <label for="txtBairro">Bairro:</label>
                    </div>

                    <div class="form-floating  col-md-5 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtCidade" id="txtCidade" placeholder="Cidade">
                        <label for="txtBairro">Cidade:</label>
                    </div>

                    <label for="txtEstUf">123:</label>
                    <select class="selectpicker">
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Barbecue</option>
                    </select>


                    <div class="form-floating col-md-2 p-1">
                        <select class="selectpicker form-control" id="txtEstUf" name="txtEstUf" data-style="btn-dark" onchange="habilita_info($(this).val());">
                            <option>Estado</option>
                            <option value="Acre">Acre</option>
                            <option class="text-uppercase" value="Alagoas">Alagoas</option>
                            <option class="text-uppercase" value="Amapá">Amapá</option>
                            <option class="text-uppercase" value="Amazonas">Amazonas</option>
                            <option class="text-uppercase" value="Bahia">Bahia</option>
                            <option class="text-uppercase" value="Ceará">Ceará</option>
                            <option class="text-uppercase" value="Distrito Federal">Distrito Federal</option>
                            <option class="text-uppercase" value="Espirito Santo">Espirito Santo</option>
                            <option class="text-uppercase" value="Goiás">Goiás</option>
                            <option class="text-uppercase" value="Maranhão">Maranhão</option>
                            <option class="text-uppercase" value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                            <option class="text-uppercase" value="Mato Grosso">Mato Grosso</option>
                            <option class="text-uppercase" value="Minas Gerais">Minas Gerais</option>
                            <option class="text-uppercase" value="Pará">Pará</option>
                            <option class="text-uppercase" value="Paraíba">Paraíba</option>
                            <option class="text-uppercase" value="Paraná">Paraná</option>
                            <option class="text-uppercase" value="Pernambuco">Pernambuco</option>
                            <option class="text-uppercase" value="Piauí">Piauí</option>
                            <option class="text-uppercase" value="Rio de Janeiro">Rio de Janeiro</option>
                            <option class="text-uppercase" value="Rio Grande do Norte">Rio Grande do Norte</option>
                            <option class="text-uppercase" value="Rio Grande do Sul">Rio Grande do Sul</option>
                            <option class="text-uppercase" value="Rondônia">Rondônia</option>
                            <option class="text-uppercase" value="Roraima">Roraima</option>
                            <option class="text-uppercase" value="Santa Catarina">Santa Catarina</option>
                            <option class="text-uppercase" value="São Paulo">São Paulo</option>
                            <option class="text-uppercase" value="Sergipe">Sergipe</option>
                            <option class="text-uppercase" value="Tocantins">Tocantins</option>
                        </select>
                        <label for="txtEstUf">Estado:</label>
                    </div>

                    <div class="form-floating  col-md-1 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtUF" id="txtUF" placeholder="Estado">
                        <label for="txtUF">UF:</label>
                    </div>

                    <div class="form-floating  col-md-4 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtComplemento" id="txtComplemento" placeholder="Complemento">
                        <label for="txtComplemento">Complemento:</label>
                    </div>

                    <div class="form-floating col-md-3 p-1">
                        <select class="selectpicker form-control" id="txtAdmitido" name="txtAdmitido" data-style="btn-dark" onchange="habilita_info($(this).val());">
                            <option class="text-uppercase" value=""> ------- </option>
                            <option class="text-uppercase" value="BATISMO"> BATISMO </option>
                            <option class="text-uppercase" value="CARTA"> CARTA </option>
                            <option class="text-uppercase" value="ACLAMAÇÃO">ACLAMAÇÃO</option>
                            <option class="text-uppercase" value="OUTROS"> OUTROS </option>
                        </select>
                        <label for="txtAdmitido">Admitido por:</label>
                    </div>

                    <div class="form-floating  col-md-2 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtAdmissao" id="txtAdmissao" placeholder="Data de admissão">
                        <label for="txtAdmissao">Data de admissão:</label>
                    </div>

                    <div class="form-floating  col-md-2 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtLocalBatismo" id="txtLocalBatismo" placeholder="Local do Batismo">
                        <label for="txtLocalBatismo">Local do Batismo:</label>
                    </div>

                    <div class="form-floating  col-md-2 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtDtBatismo" id="txtDtBatismo" placeholder="Data do Batismo">
                        <label for="txtDtBatismo">Data do Batismo:</label>
                    </div>

                    <div class="form-floating  col-md-3 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtFuncao" id="txtFuncao" placeholder="Função">
                        <label for="txtFuncao">Função:</label>
                    </div>

                    <div class="form-floating  col-md-3 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtFuncao" id="txtSetor" placeholder="Setor">
                        <label for="txtSetor">Setor:</label>
                    </div>

                    <div class="form-floating  col-md-3 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtCargoObreiro" id="txtCargoObreiro" placeholder="Cargo do Obreiro">
                        <label for="txtCargoObreiro">Cargo do Obreiro:</label>
                    </div>

                    <div class="form-floating  col-md-3 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtDtConsa" id="txtDtConsa" placeholder="Data da Consagração">
                        <label for="txtDtConsa">Data da Consagração:</label>
                    </div>

                    <div class="form-floating  col-md-3 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtLocal" id="txtLocal" placeholder="Local">
                        <label for="txtLocal">Local:</label>
                    </div>

                    <div class="form-floating  col-md-3 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtDtApres" id="txtDtApres" placeholder="Data Apresentação">
                        <label for="txtLocal">Data Apresentação:</label>
                    </div>

                    <div class="form-floating col-md-3 p-1">
                        <select class="selectpicker form-control" id="txtGrupo" name="txtGrupo" data-style="btn-dark" onchange="habilita_info($(this).val());">
                            <option value="">------</option>
                            <option value="NENHUM">NENHUM</option>
                            <option value="CRIANÇA">CRIANÇA</option>
                            <option value="ADOLESCENTE">ADOLESCENTE</option>
                            <option value="MOCIDADE">MOCIDADE</option>
                            <option value="IRMÃS">IRMÃS</option>
                            <option value="IRMÃOS">IRMÃOS</option>
                        </select>
                        <label for="txtAdmitido">Grupo:</label>
                    </div>

                    <div class="form-floating col-md-2 p-1">
                        <select class="selectpicker form-control" id="txtCartao" name="txtCartao" data-style="btn-dark" onchange="habilita_info($(this).val());">
                            <option value="">---</option>
                            <option value="SIM">SIM</option>
                            <option value="NÃO">NÃO</option>
                        </select>
                        <label for="txtAdmitido">Cartão de Membro:</label>
                    </div>

                    <div class="form-floating col-md-2 p-1">
                        <select class="selectpicker form-control" id="txtBatEsp" name="txtBatEsp" data-style="btn-dark" onchange="habilita_info($(this).val());">
                            <option value="">---</option>
                            <option value="SIM">SIM</option>
                            <option value="NÃO">NÃO</option>
                        </select>
                        <label for="txtAdmitido">Batizado com Espirito Santo:</label>
                    </div>

                    <div class="form-floating col-md-2 p-1">
                        <select class="selectpicker form-control" id="EscDom" name="txtEscDom" data-style="btn-dark" onchange="habilita_info($(this).val());">
                            <option value="">---</option>
                            <option value="SIM">SIM</option>
                            <option value="NÃO">NÃO</option>
                        </select>
                        <label for="txtAdmitido">Participa da E. Dominical:</label>
                    </div>

                    <div class="form-floating  col-md-12 p-1">
                        <textarea class="form-control text-uppercase" cols="10" rows="10" id="txtObs" name="txtObs"></textarea>
                        <label for="txtObs">Observação:</label>
                    </div>

                    <div class="form-floating  col-md-2 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtTelefone" id="txtTelefone" placeholder="Telefone">
                        <label for="txtTelefone">Telefone:</label>
                    </div>

                    <div class="form-floating  col-md-2 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtCelular" id="txtCelular" placeholder="Celular">
                        <label for="txtCelular">Celular:</label>
                    </div>

                    <div class="form-floating  col-md-3 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtEmail" id="txtEmail" placeholder="Email">
                        <label for="txtCelular">E-mail:</label>
                    </div>

                    <div class="form-floating  col-md-3 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtFacebook" id="txtFacebook" placeholder="Facebook">
                        <label for="txtFacebook">E-mail:</label>
                    </div>

                    <div class="form-floating  col-md-2 p-1">
                        <input type="text" autocomplete="off" class="form-control" name="txtFacebook" id="txtInstagram" placeholder="Instagram">
                        <label for="txtInstagram">Instagram:</label>
                    </div>

                </div>
            </div>

            <div class="d-grid p-1">
                <button type="submit" class="btn btn-lg btn-outline-success">Cadastrar</button>
            </div>
        </div>
    </form>
</div>