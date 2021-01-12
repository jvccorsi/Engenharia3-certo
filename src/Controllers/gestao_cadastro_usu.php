<?php
    session_start();
    include ('../Classes/usuario.php');
    $objUSU = new usuario();

    if ($objUSU->queryInsert($_POST)) { 
        //vai fazer o insert de tudo do metodo POST(RECEBER OS DADOS DO POST E EXECUTAR A FUNCAO INSERT DA CLASSE USUARIO)
        $_SESSION['msg_cad_sucesso'] = "sucesso";
        header("location:../index.php");

    } else {
        $_SESSION['msg'] = "<script> alert('Erro ao realizar o cadastro!'); </script>";
        header("location:../Views/pages/dashboard.php");
    }

?>