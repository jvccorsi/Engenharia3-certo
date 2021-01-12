<?php

abstract class DAO {

    abstract public function select($obj);

    abstract public function insert($obj);

    abstract public function update($obj);

    abstract public function delete($obj);
}