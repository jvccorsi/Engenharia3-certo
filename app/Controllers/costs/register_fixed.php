<?php
session_start();
include ('../../Classes/custos.php');
$objCustos= new custos();

        if($objCustos->queryInsert_CustosFixos($_POST)){

            $_SESSION['sucesso_cad_custos'] = true;
            header("location:../../Views/pages/dashboard.php");
        }
        else{
            $_SESSION['msg'] = "<script> alert('Erro ao realizar o cadastro!'); </script>";
            header("location:../../Views/pages/dashboard.php");
        }

?>