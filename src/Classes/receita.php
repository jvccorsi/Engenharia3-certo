<?php
include("../config.php");
require_once ROOT_PATH . '/Conexao_BD/conexao.php'; //Não alterar o link da conexão. Lembrando que fica salvo as alterações ;)

class receita
{
    private $conexao;
    private $tabela;

    function __construct()
    {
        $conn = new Conexao();
        $this->conexao = $conn->getConexao();
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