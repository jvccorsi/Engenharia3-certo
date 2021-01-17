<?php
include("../config.php");
require_once ROOT_PATH . '/src/database/connection/connection.php';

$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_STRING);
$pais = filter_input(INPUT_POST,'pais',FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST,'cep',FILTER_SANITIZE_STRING);
$statee = filter_input(INPUT_POST,'statee',FILTER_SANITIZE_STRING);
$city = filter_input(INPUT_POST,'city',FILTER_SANITIZE_STRING);
$street = filter_input(INPUT_POST,'street',FILTER_SANITIZE_STRING);
$Bairro = filter_input(INPUT_POST,'Bairro',FILTER_SANITIZE_STRING);
$n_local = filter_input(INPUT_POST,'n_local',FILTER_SANITIZE_STRING);
$datee = filter_input(INPUT_POST,'datee',FILTER_SANITIZE_STRING);
$qntPeople = filter_input(INPUT_POST,'qntPeople',FILTER_SANITIZE_STRING);
$descriptionn = filter_input(INPUT_POST,'descriptionn',FILTER_SANITIZE_STRING);

$result = "UPDATE evento SET nome=:nome,pais=:pais,cep=:cep,statee=:statee,city=:city,street=:street,Bairro=:Bairro,n_local=:n_local,datee=:datee,qntPeople=:qntPeople,descriptionn=:descriptionn WHERE id_usuario = '".$_SESSION['id_usuario']."'";//PEGAR O ID DO EVENTO
   
$update = $conn->prepare($result);
$update->bindParam(':nome', $nome);//bind param recebe um valor como referencia
$update->bindParam(':pais', $pais);
$update->bindParam(':cep', $cep);
$update->bindParam(':statee', $statee);
$update->bindParam(':city', $city);
$update->bindParam(':street', $street);
$update->bindParam(':Bairro', $Bairro);
$update->bindParam(':n_local', $n_local);
$update->bindParam(':datee', $datee);
$update->bindParam(':qntPeople', $qntPeople);
$update->bindParam(':descriptionn', $descriptionn);

if($update->execute()){//tratamento de erro apos a execução do execute()
    echo("Deu tudo certo");
    //header("Location: rt.php");
}
else{
echo("Erro ao executar");
}

?>