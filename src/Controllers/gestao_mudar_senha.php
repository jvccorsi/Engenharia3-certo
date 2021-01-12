<?php
session_start();
include ('../Classes/usuario.php');
$obj_User = new usuario();

$email = $_POST["email_recu_senha"];
$nova_senha= $_POST["nova_senha"];
$chave = $_POST["chave"];


$result = $obj_User->CheckChave($email,$chave); //pegar o ID do usuário caso a chave for dele mesmo.

if($result){
    echo $result;
    $result = $obj_User->setNovaSenha($nova_senha,$result);
    $_SESSION['sucess_password'] = "senha_alterada";
    header("location:../index.php");
}
else if ($result == false){
   $_SESSION['msg_erro'] = "email_erro_senha";
   header("location:../index.php");
}




?>

