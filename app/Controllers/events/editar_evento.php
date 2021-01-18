<?php
session_start();
include ('../../Classes/eventos.php');

try {   

        $objEvento = new eventos();

        $idEvt =  $_POST['id_evento'];

        $edit = $objEvento->editar_evento($_POST,$idEvt);

        $_SESSION['editar_dados_sucesso'] = "sucesso";

        header("location:../../Views/pages/dashboard.php");
             
} catch(Exception $e) {

        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
}

?>
