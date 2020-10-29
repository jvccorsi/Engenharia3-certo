<?php
    session_start();
<<<<<<< HEAD:Controllers/sair.php
    unset($_SESSION['usu_id'], $_SESSION['usu_nome'],$_SESSION['usu_email'],$_SESSION['usu_logado']);
    $_SESSION['msg'] = "deslogar_usu";
<<<<<<< HEAD:Controllers/sair.php
    header("Location:../index.php");
=======
    unset( $_SESSION['id'], $_SESSION['nome'],$_SESSION['email']);
    $_SESSION['msg'] = "Deslogado com sucesso!";
    header("Location:index.php");
>>>>>>> parent of c7bd2a6... features: Login Orientado a Obj:sair.php
=======
    header("Location:index.php");
>>>>>>> parent of e43bd3e... Features: Separei o projeto por pastas e criei o config.php:sair.php
?>