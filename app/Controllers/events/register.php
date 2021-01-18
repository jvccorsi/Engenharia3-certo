<?php
require_once '..\..\models\Event.php';
require_once '..\..\models\DAO\EventDAO.php';

if (isset($_POST['name']) && isset($_POST['pais']) && isset($_POST['cep'])) { 

    $event = new event();

    $event->setName($_POST['name']);
    $event->setCountry($_POST['pais']);
    $event->setCep($_POST['cep']);
    $event->setState($_POST['state']);
    $event->setCity($_POST['city']);
    $event->setStreet($_POST['street']);
    $event->setNeighborhood($_POST['bairro']);
    $event->setAdress_number($_POST['n_local']);
    $event->setDate($_POST['date']);
    echo($_POST['qnt_people']);
    $event->setPeople_quantity($_POST['qnt_people']);
    $event->setDescription($_POST['description']);
    
    $eventDAO = new EventDAO();

    if($eventDAO->insert($event)) {
        echo('Event created');
    } else { 
        echo('Error to create event');
    }
    header("location: ../../Views/pages/dashboard.php");
}

?>