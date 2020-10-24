<?php
include("../config.php");
    session_start();
    require_once ROOT_PATH.'/Classes/usuario.php';
    $objUser = new usuario();
    if(isset($_POST['btnlogin'])){ // se o cara clicar no botão logar
        $objUser->logarUser($_POST); //VAI ENVIAR VIA POST OS DADOS DOS FORM PARA A FUNCAO LOGAR USU na forma de um array
    }
    else{
        $_SESSION['login_incorreto_usu'] = "<div class='alert alert-danger col-md-6' style='margin-left: 25%'>Pagina não encontrada!</div>";
      header("Location: index.php");
    }
?>