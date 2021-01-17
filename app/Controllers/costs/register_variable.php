<?php
require_once '..\..\models\Costs\VariableCost.php';
require_once '..\..\models\DAO\VariableCostDAO.php';

if (isset($_POST['tipo_produto'])) { 

    session_start();

    $variableCost = new VariableCost();

    $variableCost->setId_evento($_POST['id_evento']);
    $variableCost->setNome($_POST['nome_produto']);
    $variableCost->setTipo_produto($_POST['tipo_produto']);
    $variableCost->setUnidade($_POST['unidade']);
    $variableCost->setPreco($_POST['preco']);
    $variableCost->setQtd_esperada($_POST['qtd_esperada']);
    $variableCost->setGasto_esperado($variableCost->getPreco() * $variableCost->getQtd_esperada());
    $variableCost->setObs($_POST['obs']);

    $variableCostDAO = new VariableCostDAO();
    
    if($variableCostDAO->insert($variableCost)) {
        echo('Cost created');
    } else { 
        echo('Error to create variable cost');
    }

    header("location: ../../Views/pages/dashboard.php");
}
?>