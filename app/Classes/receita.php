<?php
include("../../config.php");
require_once ROOT_PATH.'/database/connection.php'; 

class Receita
{
    private $conexao;
    private $tabela;

    function __construct()
    {
        $conn = new Conexao();
        $this->conexao = $conn->getConnection();
        $this->tabela = 'receita';

    }

    public function queryInsert($dados)
    {
        try {
            $receita_esperada = $dados['preco'] * $dados['qtd_esperada'];
            $cst = $this->conexao->prepare("INSERT INTO  $this->tabela (id_receita, item, preco, qtd_esperada, receita_esperada, obs)
            VALUES (NULL, '".$dados['item_name']."', '".$dados['preco']."', '".$dados['qtd_esperada']."', '".$receita_esperada."','".$dados['obs']."');");
           if( $cst->execute()){
            return true;
           }
           else{
               return false;
           }
         
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }





}