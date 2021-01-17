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

    public function insert($fixed_cost) {
        $cst = $this->connection->prepare("INSERT INTO $this->table (id_evento, item, tipo_custos, preco, quantidade, gasto_final, obs)" .
        "VALUES (:id_evento, :item, :tipo_custos, :preco, :quantidade, :gasto_final, :obs)");
        
        $id_evento = $fixed_cost->getId_evento();
        $item = $fixed_cost->getItem();
        $tipo_custos = $fixed_cost->getTipo_custos();
        $preco = $fixed_cost->getPreco();
        $quantidade = $fixed_cost->getQuantidade();
        $gasto_final = $fixed_cost->getGasto_final();
        $obs = $fixed_cost->getObs();

        $cst->bindParam(":id_evento", $id_evento, PDO::PARAM_STR);
        $cst->bindParam(":item", $item, PDO::PARAM_STR);
        $cst->bindParam(":tipo_custos", $tipo_custos, PDO::PARAM_STR);
        $cst->bindParam(":preco", $preco, PDO::PARAM_STR);
        $cst->bindParam(":quantidade", $quantidade, PDO::PARAM_STR);
        $cst->bindParam(":gasto_final", $gasto_final, PDO::PARAM_STR);
        $cst->bindParam(":obs", $obs, PDO::PARAM_STR);

        try {
            $result = $cst->execute();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        return $result; 
    }

    public function update($event) {
        return "Não implementado ainda";
    }

    public function delete($event) {
        return "Não implementado ainda";
    }
}