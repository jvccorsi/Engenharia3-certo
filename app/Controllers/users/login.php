<?php
require_once '..\..\Models\User.php';
require_once '..\..\Models\DAO\UserDAO.php';
session_start();

if(isset($_POST['email'])){ // Request login

    $user = new User();
    $user->setEmail($_POST['email']);
    $user->setPassword($_POST['password']);

    $userDAO = new UserDAO();
    $result = $userDAO->selectByCredentials($user);
    
    if($result) {
        $_SESSION['usu_logado'] = true;
        // Armazena o ID na session
        $_SESSION['usu_id'] = $result[0];

        header("location: ../../Views/pages/dashboard.php");

    } else { 
        
        $_SESSION['login_incorreto_usu'] = "erro_senha";

        header("location: ../../Views/pages/landing.php");
    }
}
?>