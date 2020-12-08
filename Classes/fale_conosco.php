<?php
include("../config.php");
require_once ROOT_PATH . '/Conexao_BD/conexao.php'; //Não alterar o link da conexão. Lembrando que fica salvo as alterações ;)

class fale_conosco
{
    private $conexao;
    private $tabela;

    function __construct()
    {
        $conn = new Conexao();
        $this->conexao = $conn->getConexao();
        $this->tabela = "mensagem";
    }


    public function queryInsert($dados)
    {
        try {
            $cst = $this->conexao->prepare("INSERT INTO $this->tabela (nome,email,tipo_mensagem, telefone, descricao)" .
                "VALUES (:nome, :email, :tipo_mensagem,:telefone,:descricao)");

            $cst->bindParam(":nome", $dados['name'], PDO::PARAM_STR);//ok
            $cst->bindParam(":genero", $dados['genero'], PDO::PARAM_STR);
            $cst->bindParam(":sobrenome", $dados['sobrenome'], PDO::PARAM_STR);//ok
            $cst->bindParam(":data_nasc", $dados['dtnasc'], PDO::PARAM_STR);//ok
            $cst->bindParam(":cpf", $dados['cpf'], PDO::PARAM_STR);//ok
            $cst->bindParam(":telefone", $dados['telefone'], PDO::PARAM_STR);//ok
            $cst->bindParam(":email", $dados['email_usu'], PDO::PARAM_STR);//ok
            $cst->bindParam(":username", $dados['username'], PDO::PARAM_STR);//ok
            $cst->bindParam(":senha", $dados['senha'], PDO::PARAM_STR);//ok
            $cst->execute();
            return true;
        } catch (PDOException $ex) {
            return 'error ' . $ex->getMessage();
        }
    }





}