<?php
//NÃO TIRAR ISSO DA PAGINA!!
include("../Controllers/verify_login.php"); //php PARA VERFICIAR SE O USUÁRIO ESTÁ LOGADO!!
//PRA PEGAR OS CAMPOS DO BD, OLHAR A FUNCAO User_logado NA CLASSE USUARIO.
//echo"Olá, seja bem vindo<b> ".$_SESSION['usu_nome']."</b> ao sistema !! <br> O seu email é:".$_SESSION['usu_email']."";
//echo"<br>";

//echo "<a href='../Controllers/sair.php'> Clique aqui para Sair </a>"; 
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="../Style/dashboard.css">
    <!--BS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!--FONT-->
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">

    <title>Rolê de Rep</title>

</head>

<body onload="hora()">
    <?php 
        include("Modais_usuario_index.php/modais.php");
        include("components/dashboard_header.php"); 
    ?>

    <!--BEM VINDO-->
    <main>
        <h1 class="titulo-principal"> <?php echo "Olá, seja bem vindo ao sistema: " . $_SESSION['usu_nome'] . " !"; ?></h1>

    </main>

    <!--MEUS EVENTOS-->
    <section>
        <div class="titulo-rank text-center">
            <h2 class="titulos"><b>MEUS EVENTOS</b></h2>
            <hr class="hr">
        </div>
        <div class="tabela-eventos">
            <table class="table table-striped table-dark mt-5">
                <thead>
                    <tr>
                        <th scope="col" class="title_tabela">#</th>
                        <th scope="col" class="title_tabela">NOME</th>
                        <th scope="col" class="title_tabela">DATA EVENTO</th>
                        <th scope="col" style="text-align: center;" class="title_tabela">AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Tusca</td>
                        <td>22/05</td>
                        <td>
                            <center>
                                <img src="../assets/add.png" class="img-actions">
                                <img src="../assets/edit.png" class="img-actions">
                                <img src="../assets/relatorio.png" class="img-actions">
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Abdubixos</td>
                        <td>10/02</td>
                        <td>
                            <center>
                                <img src="../assets/add.png" class="img-actions">
                                <img src="../assets/edit.png" class="img-actions">
                                <img src="../assets/relatorio.png" class="img-actions">
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Administravando</td>
                        <td>22/12</td>
                        <td>
                            <center>
                                <img src="../assets/add.png" class="img-actions">
                                <img src="../assets/edit.png" class="img-actions">
                                <img src="../assets/relatorio.png" class="img-actions">
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Administravando</td>
                        <td>22/12</td>
                        <td>
                            <center>
                                <img src="../assets/add.png" class="img-actions">
                                <img src="../assets/edit.png" class="img-actions">
                                <img src="../assets/relatorio.png" class="img-actions">
                            </center>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Administravando</td>
                        <td>22/12</td>
                        <td>
                            <center>
                                <img src="../assets/add.png" class="img-actions">
                                <img src="../assets/edit.png" class="img-actions">
                                <img src="../assets/relatorio.png" class="img-actions">
                            </center>
                        </td>
                    </tr>
                </tbody>
        </div>
    </section>


    <!--BS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="../JS/script.js"></script>
    <script>
        function typeWrite(elemento) {
            const textoArray = elemento.innerHTML.split('');
            elemento.innerHTML = ' ';
            textoArray.forEach(function(letra, i) {

                setTimeout(function() {
                    elemento.innerHTML += letra;
                }, 75 * i)

            });
        }
        const titulo = document.querySelector('.titulo-principal');
        typeWrite(titulo);

        function hora() {
            var date = new Date();
            document.getElementById("botao-hora").innerHTML = date.getHours() + ":" + date.getMinutes();
        }
    </script>

</body>

</html>