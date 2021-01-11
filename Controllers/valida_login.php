<?php
    include ("../config.php");
    require_once ROOT_PATH.'/Classes/usuario.php';

    $objUser = new usuario();

    if(isset($_POST['btnlogin'])){ // se o cara clicar no botão logar
        session_start();

        $user = $objUser->logarUser($_POST);
        if($user) {
            $_SESSION['usu_logado'] = true;
            $_SESSION['usu_id'] = $user['id_usuario'];

            header("location: ../Views/pages/dashboard.php");
        } else { 
            $_SESSION['login_incorreto_usu'] = "erro_senha";

            http_response_code(401);
            header("location: ../index.php");
        }
    }
?>