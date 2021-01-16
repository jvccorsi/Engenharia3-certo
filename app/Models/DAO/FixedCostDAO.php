<?php

require_once dirname(dirname(__FILE__)) . '..\..\database\connection.php';
require_once 'DAO.php';

final class FixedCostDAO extends DAO {

    private $connection;
    private $table;

    function __construct() {
        $conn = new Conexao();
        $this->connection = $conn->getConnection();
        $this->table = "custos_fixos";
    }

    public function select($event) {
        try {

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function selectAllByEvent($id_evento) {

        $cst = $this->connection->prepare("SELECT * FROM  $this->table WHERE id_evento = :id_evento");
       
        $cst->bindParam(":id_evento", $id_evento, PDO::PARAM_STR);
        try {
            $cst->execute();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        $fixedCosts = [];
        while ($fixedCost = $cst->fetch(PDO::FETCH_ASSOC)) {
            array_push($fixedCosts, $fixedCost);
        }

        return $cst->rowCount() ? $fixedCosts : false;
    }

    public function insert($event) {

        try {

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function update($event) {
        return "Não implementado ainda";
    }

    public function delete($event) {
        return "Não implementado ainda";
    }
}