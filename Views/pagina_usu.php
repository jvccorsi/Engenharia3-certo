<?php
include('../Controllers/verify_login.php'); //php PARA VERFICIAR SE O USUÁRIO ESTÁ LOGADO!!

//PRA PEGAR OS CAMPOS DO BD, OLHAR A FUNCAO User_logado NA CLASSE USUARIO.
echo"Olá, seja bem vindo<b> ".$_SESSION['usu_nome']."</b> ao sistema !! <br> O seu email é:".$_SESSION['usu_email']."";
echo"<br>";
echo "<a href='../Controllers/sair.php'> Clique aqui para Sair </a>"; //NÃO TIRAR ISSO DA PAGINA!!
?>