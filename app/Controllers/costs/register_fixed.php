<?php
require_once '..\..\models\Costs\FixedCost.php';
require_once '..\..\models\DAO\FixedCostDAO.php';

if (isset($_POST['item_name'])) { 

    session_start();

    $fixedCost = new FixedCost();

    $fixedCost->setId_evento($_POST['id_evento']);
    $fixedCost->setItem($_POST['item_name']);
    $fixedCost->setTipo_custos($_POST['tipo']);
    $fixedCost->setPreco($_POST['preco']);
    $fixedCost->setQuantidade($_POST['qtd']);
    $fixedCost->setGasto_final($fixedCost->getPreco() * $fixedCost->getQuantidade());
    $fixedCost->setObs($_POST['obs']);

    $fixedCostDAO = new fixedCostDAO();
    
    if($fixedCostDAO->insert($fixedCost)) {
        echo('Cost created');
    } else { 
        echo('Error to create fixed cost');
    }

    header("location: ../../Views/pages/dashboard.php");
}
?>