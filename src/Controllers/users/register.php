<?php
require_once '..\..\models\User.php';
require_once '..\..\models\DAO\UserDAO.php';

if (isset($_POST['username'])) { 

    session_start();

    $user = new User();

    $user->setName($_POST['name']);
    $user->setGenre($_POST['genre']);
    $user->setLast_name($_POST['last-name']);
    $user->setBirth_date($_POST['birth-date']);
    $user->setCpf($_POST['cpf']);
    $user->setPhone($_POST['phone']);
    $user->setEmail($_POST['email']);
    $user->setUsername($_POST['username']);
    $user->setPassword($_POST['password']);

    $userDAO = new UserDAO();
    
    if($userDAO->insert($user)) {
        echo('User created');
    } else { 
        $_SESSION['msg'] = "<script> alert('Erro ao realizar o cadastro!'); </script>";
    }

    header("location: ../../../index.php");
}
?>