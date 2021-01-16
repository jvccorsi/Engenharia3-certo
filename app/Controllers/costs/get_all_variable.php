<?php
require_once '..\..\Models\Costs\VariableCost.php';
require_once '..\..\Models\DAO\VariableCostDAO.php';

session_start();

if (isset($_GET)) {

    $variableCostDAO = new VariableCostDAO();

    $variableCosts = $variableCostDAO->selectAll();

    echo json_encode($variableCosts);
}
