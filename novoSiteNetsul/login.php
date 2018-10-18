<?php include 'header.inc.php';
include 'header.navbar.php';?>

        <div class="container">
            <div class="login">
            <img src="img/logoCompleto.png" class="logoLogin" alt="logo"> 
                <h2>Painel Administrativo</h2>
                <div class="retorno"></div>
                <form action="" class="form" method="post" name="form_login">
                    <div class="form-group">
                        <label for="login">Login</label>
                        <input type="text" name="login" class="form-control input-lg" placeholder="Login">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Senha</label>
                        <input type="password" name="current-password" class="form-control input-lg" placeholder="Senha">
                    </div>
                    
                    
                    <button type="submit" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-user"></span> Logar</button>
                    <img src="img/loading.gif" class="load img30" alt="Carregando" style="display: none">
                </form>
                <center><img src="img/loading2.gif" alt="carregando" class="loadingbar" id="load" style="display:none"></center>
            </div>
        </div>
        
<?php include 'footer.inc.php'?>