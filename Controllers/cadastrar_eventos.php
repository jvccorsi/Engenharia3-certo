<?php

include ('../Classes/eventos.php');
$obeventos= new eventos();

        if($obeventos->queryInsert($_POST)){

            $_SESSION['sucesso_cad_evento'] = true;
            header("location:../Views/dashboard.php");
        }
        else{
            $_SESSION['msg'] = "<script> alert('Erro ao realizar o cadastro!'); </script>";
            header("location:../Views/dashboard.php");
        }

?>