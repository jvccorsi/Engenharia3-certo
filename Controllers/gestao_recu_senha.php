<?php

session_start();
include ('../Classes/usuario.php');
$obj_User = new usuario();
$email = $_POST['email_recuperar_senha'];
 
$chave = $obj_User->Recuperar_Senha($email);


if($chave){
    $chave_acesso = "http://localhost/git/Views/alterar_senha.php?chave=".$chave;
    echo '<a href='.$chave_acesso.'> Link recu senha </a>';
}
else{
    echo 'ERROR: EMAIL NAO ENCONTRADO!!';
}







?>