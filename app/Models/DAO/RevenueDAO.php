<?php

require_once dirname(dirname(__FILE__)) . '..\..\database\connection.php';
require_once 'DAO.php';

final class RevenueDAO extends DAO {

    private $connection;
    private $table;

    function __construct() {
        $conn = new Conexao();
        $this->connection = $conn->getConnection();
        $this->table = "receita";
    }

    public function select($id_evento) {

        $cst = $this->connection->prepare("SELECT * from $this->table WHERE id_usuario=:id_evento");
       
        $cst->bindParam(":id_evento", $id_evento, PDO::PARAM_STR);
        
        try {
            $cst->execute();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        return $cst->rowCount() ? $cst->fetch() : false; 
    }

    public function insert($revenue) {

        $cst = $this->connection->prepare("INSERT INTO $this->table (id_evento, item, preco, qtd_esperada, qtd_vendida, receita_esperada, obs)" .
        "VALUES (:id_evento, :item, :preco, :qtd_esperada, :qtd_vendida, :receita_esperada, :obs)");

        $id_evento = $user->getId_evento();
        $item = $user->getItem();
        $preco = $user->getPreco();
        $qtd_esperada = $user->getQtd_esperada();
        $qtd_vendida = $user->getQtd_vendida();
        $receita_esperada = $user->getReceita_esperada();
        $obs = $user->getObs();

        $cst->bindParam(":id_evento", $id_evento, PDO::PARAM_STR);
        $cst->bindParam(":item", $item, PDO::PARAM_STR);
        $cst->bindParam(":preco", $preco, PDO::PARAM_STR);
        $cst->bindParam(":qtd_esperada", $qtd_esperada, PDO::PARAM_STR);
        $cst->bindParam(":qtd_vendida", $qtd_vendida, PDO::PARAM_STR);
        $cst->bindParam(":receita_esperada", $receita_esperada, PDO::PARAM_STR);
        $cst->bindParam(":obs", $obs, PDO::PARAM_STR);

        try {
            $result = $cst->execute();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        return $result; 
    }

    public function update($user) {
        return "Não implementado ainda";
    }

    public function delete($user) {
        return "Não implementado ainda";
    }
}