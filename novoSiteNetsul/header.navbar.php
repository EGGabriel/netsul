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
                <!-- <li class="dropdown">
                    <a href="index.php" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Cadastrar</a></li>
                    </ul>
                </li> -->
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
                            if(isset($_GET['logout']) && $_GET['logout']==true){
                                session_destroy();
                                header("Location: login.php");
                            }?>
                            <a href="?logout=true" class="btn btn-danger">Sair</a><?php
                        } else {
                            ?>Você está deslogado! <a href="login.php" class="btn btn-warning">Entrar</a><?php
                        }?>
                        
                    </div>
        </div>
        <!-- /NavBar -->
            </div>
        </nav>