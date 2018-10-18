<?php 
include 'header.inc.php';
include 'header.navbar.php';
?>
<div class="container containerBody box-content nopadding">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item active">
        <img src="img/baner/01.jpg" alt="Baner01">
        </div>

        <div class="item">
        <img src="img/baner/02.jpg" alt="Baner02">
        </div>

        <div class="item">
        <img src="img/baner/03.jpg" alt="Baner03">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
    </a>
    </div><br>
    
    <!-- <div class="box-content nopadding"> -->
        <div class="row">
            <div class="col-sm-8">
                <h1>Senhores Clientes...</h1><hr>
                <p>Visando um Visando um bom atendimento, disponibilizamos de várias formas de contato. 
                    Fiquem à vontade para escolher:</p>
                <div class="info">
                    <p><b>Telefones:</b> </p>
                    <span class="glyphicon glyphicon-asterisk"></span> <b>(35) 3425-0204</b> <img src="img/oiLogo.png" class="logoOi" alt="Logo Oi"><br>
                    <span class="glyphicon glyphicon-asterisk"></span> (35) 3421-9483 <img src="img/oiLogo.png" class="logoOi" alt="Logo Oi"><br>
                    <span class="glyphicon glyphicon-asterisk"></span> (35) 3425-6722 <img src="img/oiLogo.png" class="logoOi" alt="Logo Oi"><br>
                    <span class="glyphicon glyphicon-asterisk"></span> (35) 3422-0004 <img src="img/oiLogo.png" class="logoOi" alt="Logo Oi"><br>
                </div>
                <br><p><b>Obs.:</b> Não é necessário decorar todos esses números. Basta ligar no (35) 3425-0204 que ele 
                    automaticamente toca nos outros números. Sendo assim, conseguimos atender várias ligações ao 
                    mesmo tempo;</p>
                <div class="info">
                <br><p><b>Celulares:</b> </p>   
                    <span class="glyphicon glyphicon-asterisk"></span> <b> (35) 9 8867-2929 (Suporte) </b><img src="img/oiLogo.png" class="logoOi" alt="Logo Oi"><img src="img/whatsLogo.png" class="logoOi" alt="Logo Whats"><br>
                    <span class="glyphicon glyphicon-asterisk"></span>  (35) 9 8867-6060 (Suporte) <img src="img/oiLogo.png" class="logoOi" alt="Logo Oi"><br>
                    <span class="glyphicon glyphicon-asterisk"></span>  (35) 9 8803-5621 (Anderson) <img src="img/oiLogo.png" class="logoOi" alt="Logo Oi"><br>
                    <span class="glyphicon glyphicon-asterisk"></span>  (35) 9 8868-2646 (Reginaldo) <img src="img/vivoLogo.png" class="logoOi" alt="Logo Vivo"><br>
                </div>
                <div class="info">
                <br><p><b>Skype:</b> </p> 
                    <span class="glyphicon glyphicon-asterisk"></span> <b>netsulinf@hotmail.com</b><br>
                    <span class="glyphicon glyphicon-asterisk"></span> suporte03@netsulinformatica.com.br<br>
                    <span class="glyphicon glyphicon-asterisk"></span> suporte04@netsulinformatica.com.br<br>
                    <span class="glyphicon glyphicon-asterisk"></span> suporte05@netsulinformatica.com.br<br>
                    <span class="glyphicon glyphicon-asterisk"></span> suporte06@netsulinformatica.com.br<br>
                    <span class="glyphicon glyphicon-asterisk"></span> suporte07@netsulinformatica.com.br<br>
                    <span class="glyphicon glyphicon-asterisk"></span> suporte08@netsulinformatica.com.br<br>
                    <span class="glyphicon glyphicon-asterisk"></span> suporte10@netsulinformatica.com.br<br>
                </div>
            </div>

            <!-- CONEXÃO COM A PAGINA DO FACEBOOK -->
            <div class="col-sm-4">
                <script>(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.1&appId=271015860391084&autoLogAppEvents=1';
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
                <div class="fb-page" data-href="https://www.facebook.com/NetsulInformatica" data-tabs="timeline" 
                    data-width="350" data-height="975" data-small-header="false" data-adapt-container-width="true" 
                    data-hide-cover="false" data-show-facepile="true"><blockquote 
                    cite="https://www.facebook.com/NetsulInformatica" class="fb-xfbml-parse-ignore">
                    <a href="https://www.facebook.com/NetsulInformatica">Netsul Informática Ltda</a></blockquote>
                </div>
            </div>
            <!-- FIM DE CONEXÃO COM A PAGINA DO FACEBOOK -->
        </div>
    <!-- </div> -->
</div>


<?php include 'footer.inc.php'?>