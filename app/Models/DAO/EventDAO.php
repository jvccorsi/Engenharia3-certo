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

        $name = $user->getName();
        $genre = $user->getGenre();
        $last_name = $user->getLast_name();
        $birth_date = $user->getBirth_date();
        $cpf = $user->getCpf();
        $phone = $user->getPhone();
        $email = $user->getEmail();
        $username = $user->getUsername();
        $password = $user->getPassword();

        $cst->bindParam(":nome", $name, PDO::PARAM_STR);
        $cst->bindParam(":genero", $genre, PDO::PARAM_STR);
        $cst->bindParam(":sobrenome", $last_name, PDO::PARAM_STR);
        $cst->bindParam(":data_nasc", $birth_date, PDO::PARAM_STR);
        $cst->bindParam(":cpf", $cpf, PDO::PARAM_STR);
        $cst->bindParam(":telefone", $phone, PDO::PARAM_STR);
        $cst->bindParam(":email", $email, PDO::PARAM_STR);
        $cst->bindParam(":username", $username, PDO::PARAM_STR);
        $cst->bindParam(":senha", $password, PDO::PARAM_STR);

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

    public function delete($id_evento) {
        $cst = $this->connection->prepare("DELETE * FROM  $this->table WHERE ");

        try {
            $cst->execute();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        return $cst->rowCount() ? $events : false;
    }
}