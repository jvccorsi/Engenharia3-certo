<?php

require_once 'DAO.php';

final class JogoDAO extends DAO {

    public static function select($conn, $jogo) {
        return "Não implementado ainda";
    }


    public static function selectGamesByPlayer($conn, $username) {

        try {

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public static function selectGamesOrderByScore($conn) {

        try {

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public static function insert($conn, $jogo) {

        try {

        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public static function update($conn, $jogo) {
        return "Not implemented yet";
    }

    public static function delete($conn, $jogo) {
        return "Not implemented yet";
    }
}