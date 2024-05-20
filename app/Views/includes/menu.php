<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#"><img class="" src="<?= "https://cinpal.sysaidit.com/GetLogoImage?accountId=cinpal&logoFilePath=@BASE64@L21udC9mczAxL2luc3QwNnVzL2NpbnBhbC9sb2dvL2xvZ29fY2lucGFsLmpwZw%3D%3D&time=1715598799773" ?>" width="150"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url() ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item"><a class="nav-link btn btn-outline-success" href="<?= base_url('dash') ?>">Dashboard</a></li>
            <li class="nav-item active"><a class="nav-link" href="<?= base_url('cadcli') ?>">Clientes/Fornecedores</a></li>
            <li class="nav-item active"><a class="nav-link" href="<?= base_url('projetos') ?>">Projetos</a></li>
            <li class="nav-item active"><a class="nav-link" href="<?= base_url('etapas') ?>">Etapas</a></li>
            <li class="nav-item active"><a class="nav-link" href="<?= base_url('atividades') ?>">Atividades</a></li>
            <li class="nav-item active"><a class="nav-link" href="<?= base_url('usuarios') ?>">Usuários</a></li>
            <li class="nav-item active"><a class="nav-link" href="<?= base_url('tarefas') ?>">Tarefas</a></li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-cog" aria-hidden="true"></i></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="<?= base_url('configuracoes') ?>">Configurações</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?= base_url('usuarios') ?>">Pefil de usuário</a>
                    </div>
                </li>
            </ul>
            <a href="<?= base_url('sair') ?>" class="btn btn-outline-warning my-4 px-4 my-sm-0" type="submit">Sair</a>
        </form>
    </div>
</nav>
