<?php
session_start();
include ('../../Classes/custos.php');
$objCustos= new custos();

        if($objCustos->queryInsert_CustosVariaveis($_POST)){

           $_SESSION['sucesso_cad_variavel'] = true;
           echo($_POST['id_evento']);
            // header("location:../../Views/pages/dashboard.php");
        }
        else{
            $_SESSION['msg'] = "<script> alert('Erro ao realizar o cadastro!'); </script>";
            header("location:../../Views/pages/dashboard.php");
        }

?>