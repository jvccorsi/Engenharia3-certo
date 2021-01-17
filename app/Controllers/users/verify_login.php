<?php
require_once '..\..\Models\User.php';
require_once '..\..\Models\DAO\UserDAO.php';

session_start();

if ($_SESSION['usu_logado']) {

    $timeout = 1800; // Tempo da sessão
    $userDAO = new UserDAO();

    $userDAO->select($_SESSION['usu_id']); 

    if (isset($_SESSION['timeout'])) {
        // Calcula o tempo que já se passou desde a cricao da sessão
        $duracao = time() - (int) $_SESSION['timeout'];

        if ($duracao > $timeout) {
            session_destroy();
            session_start();
            header("location: ../../index.php");
        }
    }
    $_SESSION['timeout'] = time();
} else {
    $_SESSION['login_incorreto_usu'] = "necessario_realizar_login";
    header("location: ../../index.php");
}
