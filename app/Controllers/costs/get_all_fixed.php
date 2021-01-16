<?php
require_once '..\..\Models\Costs\FixedCost.php';
require_once '..\..\Models\DAO\FixedCostDAO.php';

session_start();

if (isset($_GET)) {

    $fixedCostDAO = new FixedCostDAO();

    $fixedCosts = $fixedCostDAO->selectAll();

    echo json_encode($fixedCosts);
}
