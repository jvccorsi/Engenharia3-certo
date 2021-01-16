<?php
require_once '..\..\Models\Costs\FixedCost.php';
require_once '..\..\Models\DAO\FixedCostDAO.php';

if (isset($_GET)) {

    $fixedCostDAO = new FixedCostDAO();

    $fixedCosts = $fixedCostDAO->selectAll();
}
