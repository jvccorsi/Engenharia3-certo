<?php
  // Verificar se o usuário está logado
  include("../Controllers/verify_login.php"); 
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--CSS-->
        <link rel="stylesheet" href="../Style/dashboard.css">
        <link rel="stylesheet" href="../Style/cadastros.css">
        <!--BS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <!--FONT-->
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
        <title>Rolê de Rep</title>
    </head>
    <body onload="hora()">
        <?php 
            include("Modais_usuario_index.php/modais.php");
            include('components/dashboard_header.php'); 
        ?>
        <script>
            function hora() {
                var date = new Date();
                document.getElementById("botao-hora").innerHTML = date.getHours() + ":" + date.getMinutes();
            }
            function backPage() {
                window.location.href = 'dashboard.php';
            }
        </script>
        <button id="back-button" onClick="backPage()">
            <img src="../assets/left-arrow.svg" alt="Seta esquerda">
        </button>
        <main>
            <div class="titulo-rank text-center">
                <h2 class="titulos"><b>EFETUAR CADASTROS</b></h2>
                <hr class="hr">
            </div>
            <div class="container">   
                <div class="row">
                    <div class="col-md-4 text-center d-flex justify-content-center">
                        <div class="content-wrapper">
                            <img src="../assets/calendar.svg" class="Calendário">
                            <p>Evento</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-center">
                        <div class="content-wrapper">
                            <img src="../assets/budget.svg" class="Custos">
                            <p>Custos</p>
                        </div>
                    </div>
                    <div class="col-md-4 text-center d-flex justify-content-center">
                        <div class="content-wrapper">
                            <img src="../assets/receipt.svg" class="Receita">
                            <p>Receita</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>