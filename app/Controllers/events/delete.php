<?php
require_once '..\..\Models\Event.php';
require_once '..\..\Models\DAO\EventDAO.php';
require_once '..\..\Classes\usuario.php';

session_start();

if (isset($_GET)) {

    if($_SESSION['usu_logado']) {
        $eventDAO = new EventDAO();

        if($eventDAO->delete($_GET['id_evento'])) {
            echo("Event deleted");
            header("location: ../../Views/pages/dashboard.php");
        } else {
            echo("Event not deleted");
        }
    }
}
