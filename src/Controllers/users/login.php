<?php
require_once '..\..\Models\User.php';
require_once '..\..\Models\DAO\UserDAO.php';
    

if(isset($_POST['email'])){ // Request login

    session_start();

    $user = new User();
    $user->setEmail($_POST['email']);
    $user->setPassword($_POST['password']);

    $userDAO = new UserDAO();

    if($userDAO->select($user)) {
        $_SESSION['usu_logado'] = true;
        $_SESSION['usu_id'] = $user->getUsername();

        header("location: ../../Views/pages/dashboard.php");
    } else { 
        $_SESSION['login_incorreto_usu'] = "erro_senha";

        header("location: ../../index.php");
    }
}
?>