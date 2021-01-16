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