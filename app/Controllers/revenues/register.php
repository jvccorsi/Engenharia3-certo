<?php
require_once '..\..\models\Revenue.php';
require_once '..\..\models\DAO\RevenueDAO.php';

if (isset($_POST['qtd_esperada'])) { 

    $revenue = new Revenue();

    $revenue->setId_evento($_POST['id_evento']);
    $revenue->setItem($_POST['item']);
    $revenue->setPreco($_POST['preco']);
    $revenue->setQtd_esperada($_POST['qtd_esperada']);
    $revenue->setObs($_POST['obs']);
    $revenueDAO = new RevenueDAO();

    if($revenueDAO->insert($revenue)) {
        echo('Revenue created');
    } else { 
        echo('Error to create revenue');
    }
    header("location: ../../Views/pages/dashboard.php");
}
?>