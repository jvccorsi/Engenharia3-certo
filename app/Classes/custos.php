<?php
include("../../config.php");
require_once ROOT_PATH . '/database/connection.php'; //Não alterar o link da conexão. Lembrando que fica salvo as alterações ;)

class Custos {
    private $conexao;
    private $tabela_custos_fixos;
    private $tabela_custos_variaveis;

    function __construct()
    {
        $conn = new Conexao();
        $this->conexao = $conn->getConnection();
        $this->tabela_custos_fixos = "custos_fixos";
        $this->tabela_custos_variaveis= "custos_variaveis";
    }

    public function queryInsert_CustosFixos($dados)
    {
        try {
            $gasto_final = $dados['preco'] * $dados['qtd'];
            $cst = $this->conexao->prepare("INSERT INTO  $this->tabela_custos_fixos (id_evento, item, tipo_custos, preco, quantidade, gasto_final, obs)
            VALUES ('".$dados['id_evento']."', '".$dados['item_name']."', '".$dados['Tipo']."', '".$dados['preco']."', '".$dados['qtd']."', '".$gasto_final."',  '".$dados['obs']."');");
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
    public function queryInsert_CustosVariaveis($dados)
    {
        try {
            $gasto_esperado = $dados['preco'] * $dados['qtd_esperada'];
            $cst = $this->conexao->prepare("INSERT INTO  $this->tabela_custos_variaveis (id_evento, nome, tipo_produto, unidade, preco, obsvar)
            VALUES ('".$dados['id_evento']."', '".$dados['produto']."', '".$dados['type_prod']."', '".$dados['unidade']."', '".$dados['preco']."', '".$dados['obs']."');");
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