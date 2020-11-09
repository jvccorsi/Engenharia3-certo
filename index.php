<?php
session_start();
ob_start(); //limpar a memória para nao dar erro de redirecionamento.
include("config.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="Style/style.css">
    <!--BS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!--FONT-->
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">

    <title>Rolê de Rep</title>

</head>

<body>
    <header>
    <?php
        include('Views/Modais/modais.php'); //Incluir o php para abrir modais  com JS na page Index.php
        ?>
    <!--SECTION NAV -->

        <nav class="navbar navbar-expand-lg " id="edit">
            <div class="container">
                <a class="navbar-brand h1 mb-0" href="#"><img src="assets/logo/logo_white.png" style="width: 230px;"></a>
                <button class="navbar-toggler navbar-light bg-light" type="button" data-toggle="collapse" data-target="#navbarSite">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSite">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link active menu" href="#" data-toggle="modal" data-target="#modal-cadastro">CADASTRO</a></li>
                        <div class="contato-nav">
                            <a href="#container-forms" class="btn btn-info menu a" role="button" id="botao"><b>LOGIN</b></a>
                        </div>
                    </ul>
                </div>
            </div>
        </nav> 
        
        <!--BTN FALE CONOSCO--> 
        <button id="contact-btn" href="#modal-contato" data-toggle="modal" data-target="#modal-contato"><img src="https://img.icons8.com/color/48/000000/chat.png"/></button>

    </header>
    <section>
        <div class="container-fluid section-quemsomos text-center"></div>
        <center>
            <div id="container-quemsomos">
                <h1 class="titulos"><b>QUEM SOMOS?</b></h1>
                <hr class="hr">

                <div id="texto-section-quemsomos">
                    <h5 class="textos">O ROLEDEREP representa um grupo de alunos que cursam a diciplina Engenharia de Software III. O ROLEDEREP fornece a você universitário, a possibilidade de tornar a sua "baguncinha" no role de república muito organizada! Nesse sentido, com grande prazer a trabalho desenvolvemos esse sistema a vocês e para vocês!.</h5>
                </div>
            </div>

            <div id="container-servicos">
                <h1 class="titulos"><b>SERVIÇOS</b></h1>
                <hr class="hr">

                <div id="texto-section-quemsomos">
                    <div class="row">
                        <div class="col">   
                            <img src="assets/custos.png" class="img-servicos">
                            <h5 class="textos"><b>GERENCIAMENTO DE CUSTOS</b></h5>
                        </div>
                        <div class="col">   
                            <img src="assets/evento.png" class="img-servicos">
                            <h5 class="textos"><b>GERENCIAMENTO DO SEU EVENTO</b></h5>
                        </div>
                        <div class="col">   
                            <img src="assets/relatório_2.png" class="img-servicos">
                            <h5 class="textos"><b>VISUALIZAÇÃO DE RELATÓRIOS</b></h5>
                        </div>
                    </div>
                    

                   
                </div>
            </div>
        </center>
        </div>
    </section>

    <main>
    </main>
<article>
    <div class="container-fluid section-footer" id="login">
        <div class="row">
            <div class="col col-xl-6 col-lg-12 col-md-12">
                <div id="container-info-login">
                    <h1 class="titulos-info-login text-center"><b>Faça login e obtenha as vantagens do serviço que
                            fornecemos!<br><br>NÃO POSUÍ CADASTRO?</b></h1><br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-start-order" id="btn-form" value="send"  href="#modal-cadastro" data-toggle="modal" data-target="#modal-cadastro" style="width: 250px;"><b>CADASTRAR-SE </b>
                            <div class="spinner-grow text-dark" role="status" style="margin-bottom:5px;margin-left:5px;width: 16px; height: 16px;">
                            </div>
                        </button>
                    </div>
                </div>

            </div>
            <div class="col col-xl-6 col-lg-12 col-md-12">
                <div id="container-forms">
                <form id="contact-form" class="form" action="Controllers/valida_login.php" method="POST">
                        <h1 class="titulos-login text-center"><b>Acesse o sistema:</b></h1>
                        <div class="forms">
                            <div class="form-group">
                                <label class="form-label" for="name"><b>Email:</b></label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu email aqui" tabindex="1" required>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email"><b>Senha:</b></label>
                                <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha aqui:" tabindex="2" required>
                            </div>
                            <h1 class="titulos-login-esqueci text-center"><a href="#" data-toggle="modal" data-target="#modal_esqueci_senha" style="color: black;"><b>Esqueci a
                                        senha</b></a></h1>
                            <div class="text-center">
                                <button type="submit" class="btn btn-start-order" id="btn-form" name="btnlogin" value="send"><b>ENVIAR </b>
                                    <div class="spinner-grow text-dark" role="status" style="margin-bottom:5px;margin-left:5px;width: 16px; height: 16px;">
                                    </div>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </article>
    <footer class="text-center">
        <b>© ROLE DE REP - Todos os direitos reservados.</b>
    </footer>

    <!--BS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="JS/script.js"></script>
</body>

</html>