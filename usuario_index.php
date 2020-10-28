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
    <link rel="stylesheet" href="Style/style_usu.css">
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
                <a class="navbar-brand" href="#" id="img"><img src="assets/logo/logo_1.png" style="width: 230px;"></a>
                <button class="navbar-toggler navbar-light bg-light" type="button" data-toggle="collapse" data-target="#navbarSite">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSite">
                    <ul class="navbar-nav" style="margin-left:90%;">
                            <a href="#login" class="btn btn-info menu a" role="button" id="botao"><b>PERFIL</b></a>
                        <div class="contato-nav">
                            <a href="#login" class="btn btn-info menu a" role="button" id="botao"><b>SAIR</b></a>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>

    </header>

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