<?php
    session_start();
if(!empty($_SESSION['id'])){ //Se existir sessao com o id
    echo "Ola ".$_SESSION['nome'].", bem vindo!";
    echo "<a href='sair.php'> Sair </a>";
}
else{
    $_SESSION['msg'] = "Sem acesso, realize seu login!";
    header("Location:index.php");
}
?>