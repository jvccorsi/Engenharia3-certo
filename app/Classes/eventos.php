<?php
include("../../config.php");
require_once ROOT_PATH . '/database/connection.php';

class Eventos {
    private $conexao;
    private $tabela;

     function __construct()
    {
        $conn = new Conexao();
        $this->conexao = $conn->getConnection();
        $this->tabela = "evento";
    }

public function queryInsert($dados){
   
    $cst = $this->conexao->prepare("INSERT INTO evento (id_evento, nome_evento, descricao_evento, qtd_pessoas, data_evento, pais, cep, estado, cidade, rua, bairro, numero)
    VALUES (NULL, '".$dados['name']."', '".$dados['description']."', '".$dados['qntPeople']."', '".$dados['date']."', '".$dados['pais']."',  '".$dados['cep']."',  '".$dados['state']."',  '".$dados['city']."',  '".$dados['street']."',  '".$dados['bairro']."',  '".$dados['n_local']."');");

   if($cst->execute()){
       return true;
   }
   else{
       return false;
   }
 
}

public function editar_evento($dados, $id)
{ //Alterar a nova senha do usuário        
 try{   

    $cst = $this->conexao->prepare("UPDATE evento SET nome_evento='".$dados['name']."', descricao_evento='".$dados['description']."', qtd_pessoas='".$dados['qntPeople']."', data_evento='".$dados['date']."', pais='".$dados['pais']."', cep='".$dados['cep']."', estado='".$dados['state']."', cidade='".$dados['city']."', rua='".$dados['street']."', bairro='".$dados['bairro']."', numero= '".$dados['n_local']."' WHERE id_evento = $id");
    // $cst = $this->conexao->prepare("UPDATE $this->tabela SET nome_evento=:nome_evt,descricao_evento=:descricao_evt,qtd_pessoas=:qtd_pessoas_evt,data_evento=:data_evt,pais=:pais_evt,cep=:cep_evt,estado=:estado_evt,cidade=:cidade_evt,rua=:rua_evt,bairro=:bairro_evt,numero:=num_evt  WHERE id_evento=:user_id");
    
    // $cst->bindParam(":nome_evt", $dados['name'], PDO::PARAM_STR);
    // $cst->bindParam(":descricao_evt", $dados['description'], PDO::PARAM_STR);
    // $cst->bindParam(":qtd_pessoas_evt", $dados['qntPeople'], PDO::PARAM_STR);
    // $cst->bindParam(":data_evt", $dados['date'], PDO::PARAM_STR);
    // $cst->bindParam(":pais_evt", $dados['pais'], PDO::PARAM_STR);
    // $cst->bindParam(":cep_evt", $dados['cep'], PDO::PARAM_STR);
    // $cst->bindParam(":estado_evt", $dados['state'], PDO::PARAM_STR);
    // $cst->bindParam(":cidade_evt", $dados['city'], PDO::PARAM_STR);
    // $cst->bindParam(":rua_evt", $dados['street'], PDO::PARAM_STR);
    // $cst->bindParam(":bairro_evt", $dados['bairro'], PDO::PARAM_STR);
    // $cst->bindParam(":num_evt", $dados['n_local'], PDO::PARAM_STR);


    // $cst->bindParam(":user_id", $id, PDO::PARAM_INT);

    
    $cst->execute();
    return true;

 }
 catch (PDOException $ex) {

    return 'error ' . $ex->getMessage();
    
 }

}

}
