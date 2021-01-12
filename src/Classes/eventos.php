<?php
    session_start();
    include("../config.php");
    require_once ROOT_PATH . '/Conexao_BD/conexao.php'; //Não alterar o link da conexão. Lembrando que fica salvo as alterações ;)
    
   
class eventos{
    private $conexao;
    private $tabela;
     function __construct()
    {
        $conn = new Conexao();
        $this->conexao = $conn->getConexao();
        $this->tabela = "evento";
    }

public function queryInsert($dados){
   
    $cst = $this->conexao->prepare("INSERT INTO evento (id_evento, nome_evento, descricao_evento, qtd_pessoas, data_evento, pais, cep, estado, cidade, rua, bairro, numero)
    VALUES (NULL, '".$dados['name']."', '".$dados['description']."', '".$dados['qntPeople']."', '".$dados['date']."', '".$dados['pais']."',  '".$dados['cep']."',  '".$dados['state']."',  '".$dados['city']."',  '".$dados['street']."',  '".$dados['Bairro']."',  '".$dados['n_local']."');");

   if($cst->execute()){
       return true;
   }
   else{
       return false;
   }
 


}


}
?>