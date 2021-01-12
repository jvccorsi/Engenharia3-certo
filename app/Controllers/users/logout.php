<?php
    session_start();
    unset($_SESSION['usu_id'], $_SESSION['usu_logado']);
    $_SESSION['msg'] = "deslogar_usu";
    header("Location: ../../index.php");
?>