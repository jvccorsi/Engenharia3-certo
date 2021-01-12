<?php
    include ("../../config.php");
    require_once ROOT_PATH.'/Classes/usuario.php';
    
    function login() {
        $objUser = new usuario();
        $user = $objUser->logarUser($_POST);

        if($user) {
            $_SESSION['usu_logado'] = true;
            $_SESSION['usu_id'] = $user['id_usuario'];

            return http_response_code(200);
        } else { 
            $_SESSION['login_incorreto_usu'] = "erro_senha";

            return http_response_code(401);
        }
    }
?>