<?php
require_once '..\..\Models\Event.php';
require_once '..\..\Models\DAO\EventDAO.php';

if (isset($_GET)) {

    $eventDAO = new EventDAO();

    $events = $eventDAO->selectAll();
}
