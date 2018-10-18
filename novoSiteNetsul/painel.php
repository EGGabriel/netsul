<?php ob_start();
require 'funcoes/login/login.php';
include 'header.inc.php';
if (logado('administrador')) {
    # code...

// logado('administrador');

if(isset($_GET['logout']) && $_GET['logout']==true){
    session_destroy();
    header("Location: login.php");
}

?>
<nav class="navbar navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">NetsulInformatica</span>
            </button>
            <a class="navbar-brand" href="#"><img src="img/logoCompleto.png" class="logoHeader" alt="logoNetsul"></a>
        </div>
        <!-- NavBar -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="download.php">Download</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="suporte.php">Suporte</a></li>
                <li><a href="noticia.php">Notícias</a></li>
                <li><a href="painel.php">Painel</a></li>
            </ul>
        <div class="pull-right logout">
                        <?php if($_SESSION){
                            ?>Bem Vindo: <?php print_r($_SESSION['administrador']->administrador_nome);
                        } else {
                            ?>Você está deslogado! <?php
                        }?>
                        <a href="?logout=true" class="btn btn-danger">Sair</a>
        </div>
    </div>
</nav>
<!-- /NavBar -->

        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h2 class="linha">HOME</h2>
                    <div class="box">
                        <div class="box-title">Administradores</div>
                            <div class="box-content nopadding">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>E-mail</th>
                                            <th>Login</th>
                                            <th>Nivel</th>
                                            <th width="200">Ação</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- RECEBE OS DADOS PELO CONTROLLER -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <div class="col-lg-3">
                    <h2 class="linha">Menu</h2>
                    <div class="bloco">
                        <div class="list-group">
						  <a href="#" class="list-group-item active">Administrador</a>
						  <a href="#" class="list-group-item" id="janela">Cadastrar Usuários</a>
						  <a href="#" class="list-group-item" id="noticia">Cadastrar Noticia</a>
						</div>
                    </div>
                </div>
            </div>
        </div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      </div>
    </div>
  </div>
</div>
<?php
} else {
    ?> 
    <h1>teste</h1>
    
    
    <?php
}
ob_end_flush();
include 'footer.inc.php';
?>