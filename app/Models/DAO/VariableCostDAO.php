<?php

require_once dirname(dirname(__FILE__)) . '..\..\database\connection.php';
require_once 'DAO.php';

final class VariableCostDAO extends DAO {

    private $connection;
    private $table;

    function __construct() {
        $conn = new Conexao();
        $this->connection = $conn->getConnection();
        $this->table = "custos_variaveis";
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

        $variableCosts = [];
        while ($variableCost = $cst->fetch(PDO::FETCH_ASSOC)) {
            array_push($variableCosts, $variableCost);
        }

        return $cst->rowCount() ? $variableCosts : false;
    }

    public function insert($variable_cost) {
        $cst = $this->connection->prepare("INSERT INTO $this->table (id_evento, nome, tipo_produto, unidade, preco, qtd_esperada, gasto_esperado, obs)" .
        "VALUES (:id_evento, :nome, :tipo_produto, :unidade, :preco, :qtd_esperada, :gasto_esperado, :obs)");
        
        $id_evento = $variable_cost->getId_evento();
        $nome = $variable_cost->getNome();
        $tipo_produto = $variable_cost->getTipo_produto();
        $unidade = $variable_cost->getUnidade();
        $preco = $variable_cost->getPreco();
        $qtd_esperada = $variable_cost->getQtd_esperada();
        $gasto_esperado = $variable_cost->getGasto_esperado();
        $obs = $variable_cost->getObs();

        $cst->bindParam(":id_evento", $id_evento, PDO::PARAM_STR);
        $cst->bindParam(":nome", $nome, PDO::PARAM_STR);
        $cst->bindParam(":tipo_produto", $tipo_produto, PDO::PARAM_STR);
        $cst->bindParam(":unidade", $unidade, PDO::PARAM_STR);
        $cst->bindParam(":preco", $preco, PDO::PARAM_STR);
        $cst->bindParam(":qtd_esperada", $qtd_esperada, PDO::PARAM_STR);
        $cst->bindParam(":gasto_esperado", $gasto_esperado, PDO::PARAM_STR);
        $cst->bindParam(":obs", $obs, PDO::PARAM_STR);

        try {
            $result = $cst->execute();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        return $result; 
    }

    public function update($variable_cost) {
        return "Não implementado ainda";
    }

    public function delete($variable_cost) {
        return "Não implementado ainda";
    }
}