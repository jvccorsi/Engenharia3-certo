<?php
include("../config.php");
require_once ROOT_PATH . '/src/database/connection/connection.php';

$result = "DELETE FROM evento  WHERE id_usuario = '".$_SESSION['id_usuario']."'";//PEGAR O ID DO EVENTO

    
$update = $conn->prepare($result);


if($update->execute()){//tratamento de erro apos a execução do execute()
    echo("Deu tudo certo");
    //header("Location: rt.php");
}
else{
echo("Erro ao executar");
}*/
?>