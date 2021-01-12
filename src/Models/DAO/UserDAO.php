<?php

require_once '../../database/connection/connection.php';
require_once 'DAO.php';

final class UserDAO extends DAO {

    private $connection;
    private $table;

    function __construct() {
        $conn = new Conexao();
        $this->connection = $conn->getConnection();
        $this->table = "usuarios";
    }

    public function select($user_id) {

        $cst = $this->connection->prepare("SELECT * from $this->table WHERE id_usuario=:user_id");
       
        $cst->bindParam(":user_id", $user_id, PDO::PARAM_STR);
        
        try {
            $cst->execute();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }

        return $cst->rowCount() ? $cst->fetch() : false; 
    }

    public function selectByCredentials($user) {

        $cst = $this->connection->prepare("SELECT id_usuario, email, senha FROM 
            $this->table WHERE email=:user_email AND senha=:user_password LIMIT 1");

        $email = $user->getEmail();
        $password = $user->getPassword();

        $cst->bindParam(":user_email", $email, PDO::PARAM_STR);
        $cst->bindParam(":user_password", $password, PDO::PARAM_STR);
        
        try {
            $cst->execute();
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        
        return $cst->rowCount() ? $cst->fetch() : false; 
    }

    public function insert($user) {

        $cst = $this->connection->prepare("INSERT INTO $this->table (email,username,senha, nome, sobrenome, cpf, data_nasc, genero, telefone)" .
        "VALUES (:email, :username, :senha, :nome, :sobrenome, :cpf, :data_nasc, :genero, :telefone)");

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

    public function update($user) {
        return "Não implementado ainda";
    }

    public function delete($user) {
        return "Não implementado ainda";
    }
}