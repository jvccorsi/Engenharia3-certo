<?php
require_once '..\..\Models\User.php';
require_once '..\..\Models\DAO\UserDAO.php';

session_start();

if (isset($_GET)) {

    $userDAO = new UserDAO();

    $user = $userDAO->select($_SESSION['usu_id']); 
    
    echo json_encode($user);
}
