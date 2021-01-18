<?php

require_once dirname(dirname(__FILE__)) . '..\..\database\connection.php';
require_once 'DAO.php';

final class EventDAO extends DAO {

    private $connection;
    private $table;

    function __construct() {
        $conn = new Conexao();
        $this->connection = $conn->getConnection();
        $this->table = "evento";
    }

    public function select($id_evento) {
        $cst = $this->connection->prepare("SELECT * from $this->table WHERE id_evento=:id_evento");
       
        $cst->bindParam(":id_evento", $id_evento, PDO::PARAM_STR);
        
        try {
            $cst->execute();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        return $cst->rowCount() ? $cst->fetch() : false; 
    }

    public function selectAll() {

        $cst = $this->connection->prepare("SELECT * FROM  $this->table");

        try {
            $cst->execute();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        $events = [];
        while ($event = $cst->fetch(PDO::FETCH_ASSOC)) {
            // Converter formato de data para dia/mes/ano 
            $date = date("d-m-Y", strtotime($event['data_evento']));
            $event['data_evento'] = str_replace('-', '/', $date);

            array_push($events, $event);
        }

        return $cst->rowCount() ? $events : false;
    }

    public function insert($event) {

        $cst = $this->connection->prepare("INSERT INTO $this->table (nome_evento, descricao_evento, qtd_pessoas, data_evento, pais, cep, estado, cidade, rua, bairro, numero)" .
        "VALUES (:nome_evento, :descricao_evento, :qtd_pessoas, :data_evento, :pais, :cep, :estado, :cidade, :rua, :bairro, :numero)");

        $nome_evento = $event->getName();
        $descricao_evento = $event->getDescription();
        $qtd_pessoas = $event->getPeople_quantity();
        $data_evento = $event->getDate();
        $pais = $event->getCountry();
        $cep = $event->getCep();
        $estado = $event->getState();
        $cidade = $event->getCity();
        $rua = $event->getStreet();
        $bairro = $event->getNeighborhood();
        $numero = $event->getAdress_number();

        $cst->bindParam(":nome_evento", $nome_evento, PDO::PARAM_STR);
        $cst->bindParam(":descricao_evento", $descricao_evento, PDO::PARAM_STR);
        $cst->bindParam(":qtd_pessoas", $qtd_pessoas, PDO::PARAM_STR);
        $cst->bindParam(":data_evento", $data_evento, PDO::PARAM_STR);
        $cst->bindParam(":pais", $pais, PDO::PARAM_STR);
        $cst->bindParam(":cep", $cep, PDO::PARAM_STR);
        $cst->bindParam(":estado", $estado, PDO::PARAM_STR);
        $cst->bindParam(":cidade", $cidade, PDO::PARAM_STR);
        $cst->bindParam(":rua", $rua, PDO::PARAM_STR);
        $cst->bindParam(":bairro", $bairro, PDO::PARAM_STR);
        $cst->bindParam(":numero", $numero, PDO::PARAM_STR);

        try {
            $result = $cst->execute();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        return $result; 
    }

    public function update($event) {

        $cst = $this->connection->prepare("UPDATE $this->table 
            SET nome_evento = :nome_evento, descricao_evento = :descricao_evento, qtd_pessoas = :qtd_pessoas, 
                data_evento = :data_evento, pais = :pais, cep = :cep, estado = :estado, cidade = :cidade, 
                    rua = :rua, bairro = :bairro, numero = :numero WHERE id_evento = :id_evento");

        $id_evento = $event->getId();
        $nome_evento = $event->getName();
        $descricao_evento = $event->getDescription();
        $qtd_pessoas = $event->getPeople_quantity();
        $data_evento = $event->getDate();
        $pais = $event->getCountry();
        $cep = $event->getCep();
        $estado = $event->getState();
        $cidade = $event->getCity();
        $rua = $event->getStreet();
        $bairro = $event->getNeighborhood();
        $numero = $event->getAdress_number();

        $cst->bindParam(":nome_evento", $nome_evento, PDO::PARAM_STR);
        $cst->bindParam(":descricao_evento", $descricao_evento, PDO::PARAM_STR);
        $cst->bindParam(":qtd_pessoas", $qtd_pessoas, PDO::PARAM_STR);
        $cst->bindParam(":data_evento", $data_evento, PDO::PARAM_STR);
        $cst->bindParam(":pais", $pais, PDO::PARAM_STR);
        $cst->bindParam(":cep", $cep, PDO::PARAM_STR);
        $cst->bindParam(":estado", $estado, PDO::PARAM_STR);
        $cst->bindParam(":cidade", $cidade, PDO::PARAM_STR);
        $cst->bindParam(":rua", $rua, PDO::PARAM_STR);
        $cst->bindParam(":bairro", $bairro, PDO::PARAM_STR);
        $cst->bindParam(":numero", $numero, PDO::PARAM_STR);
        $cst->bindParam(":id_evento", $id_evento, PDO::PARAM_STR);

        try {
            $result = $cst->execute();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        return $result; 
    }

    public function delete($id_evento) {
        $cst = $this->connection->prepare("DELETE FROM $this->table WHERE id_evento = :id_evento");

        $cst->bindParam(":id_evento", $id_evento, PDO::PARAM_STR);

        try {
            $result = $cst->execute();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        return $result;
    }
}