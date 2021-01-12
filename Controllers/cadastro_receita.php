<?php
session_start();
include ('../Classes/receita.php');
$objreceita= new receita();

        if($objreceita->queryInsert($_POST)){

           $_SESSION['sucesso_cad_receita'] = true;
            header("location:../Views/pages/dashboard.php");
        }
        else{
            $_SESSION['msg'] = "<script> alert('Erro ao realizar o cadastro!'); </script>";
            header("location:../Views/pages/dashboard.php");
        }

?>