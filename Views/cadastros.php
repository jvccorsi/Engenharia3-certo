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
        <link rel="stylesheet" href="../Style/style_usu.css">
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
        </script>

    </body>
</html>