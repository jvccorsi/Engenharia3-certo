<?php
require_once '..\..\Models\Event.php';
require_once '..\..\Models\DAO\EventDAO.php';

session_start();

if (isset($_GET)) {

    $eventDAO = new EventDAO();

    
    
    echo json_encode($event);
}
