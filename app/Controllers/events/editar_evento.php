<?php
require_once '..\..\models\Event.php';
require_once '..\..\models\DAO\EventDAO.php';

if (isset($_POST['name']) && isset($_POST['pais']) && isset($_POST['cep'])) { 

        session_start();

        $event = new event();
    
        $event->setId($_POST['id_evento']);
        $event->setName($_POST['name']);
        $event->setCountry($_POST['pais']);
        $event->setCep($_POST['cep']);
        $event->setState($_POST['state']);
        $event->setCity($_POST['city']);
        $event->setStreet($_POST['street']);
        $event->setNeighborhood($_POST['bairro']);
        $event->setAdress_number($_POST['n_local']);
        $event->setDate($_POST['date']);
        $event->setPeople_quantity($_POST['qnt_people']);
        $event->setDescription($_POST['description']);
        
        $eventDAO = new EventDAO();
    
        if($eventDAO->update($event)) {
                $_SESSION['editar_dados_sucesso'] = "sucesso";
        } else { 
                echo('Error to update event');
        }
        header("location: ../../Views/pages/dashboard.php");
    }
?>
