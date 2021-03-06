<?php

final class User {
	private $id;
    private $name;
    private $genre;
    private $last_name;
    private $birth_date;
    private $cpf;
    private $phone;
    private $email;
    private $username;
	private $password;

	public function getId(){
		return $this->name;
	}

	public function setId($name){
		$this->name = $name;
	}

    public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getGenre(){
		return $this->genre;
	}

	public function setGenre($genre){
		$this->genre = $genre;
	}

	public function getLast_name(){
		return $this->last_name;
	}

	public function setLast_name($last_name){
		$this->last_name = $last_name;
	}

	public function getBirth_date(){
		return $this->birth_date;
	}

	public function setBirth_date($birth_date){
		$this->birth_date = $birth_date;
	}

	public function getCpf(){
		return $this->cpf;
	}

	public function setCpf($cpf){
		$this->cpf = $cpf;
	}

	public function getPhone(){
		return $this->phone;
	}

	public function setPhone($phone){
		$this->phone = $phone;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($email){
		$this->email = $email;
	}

	public function getUsername(){
		return $this->username;
	}

	public function setUsername($username){
		$this->username = $username;
	}

	public function getPassword(){
		return $this->password;
	}

	public function setPassword($password){
		$this->password = $password;
	}
}