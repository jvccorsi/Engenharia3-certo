<?php
require_once '..\..\Models\Costs\VariableCost.php';
require_once '..\..\Models\DAO\VariableCostDAO.php';

if (isset($_GET)) {

    $variableCostDAO = new VariableCostDAO();

    $variableCosts = $variableCostDAO->selectAll();
}
