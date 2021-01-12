<?php

require_once '..\..\models\Jogador.php';
require_once '..\..\models\DAO\JogadorDAO.php';

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

    UserDAO::insert($user);

    header("location:../index.php");
} else {
    $_SESSION['msg'] = "<script> alert('Erro ao realizar o cadastro!'); </script>";
    header("location:../Views/pages/dashboard.php");
}

?>