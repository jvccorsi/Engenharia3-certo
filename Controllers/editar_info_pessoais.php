<?php
session_start();
include ('../Classes/usuario.php');
$objUSU = new usuario();

        if ($objUSU->editar_dados_pessoais($_POST)) { 
                $_SESSION['editar_dados_sucesso'] = "sucesso";
                header("location:../Views/dashboard.php");
        }
        else{

            echo 'error';
        }



?>