<?php
session_start();
include ('../../Classes/usuario.php');
try {
        $objUSU = new usuario();

        $idUser =  $_SESSION['usu_id'];
        $edit = $objUSU->editar_dados_pessoais($_POST,$idUser);

        $_SESSION['editar_dados_sucesso'] = "sucesso";

        header("location:../../Views/pages/dashboard.php");
                
} catch(Exception $e) {

        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
}

?>