<?php
require_once '..\..\Models\User.php';
require_once '..\..\Models\DAO\UserDAO.php';

session_start();

if ($_SESSION['usu_logado']) {

    $userDAO = new UserDAO();

    $user = $userDAO->select($_SESSION['usu_id']); 
} else {
    $_SESSION['login_incorreto_usu'] = "necessario_realizar_login";
    header("location: ../../../index.php");
}
