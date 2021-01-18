<?php

require_once '..\..\Models\Revenue.php';
require_once '..\..\Models\DAO\RevenueDAO.php';

if (isset($_GET)) {

    $revenueDAO = new RevenueDAO();

    $revenue = $revenueDAO->select($_GET['id_evento']);

}
