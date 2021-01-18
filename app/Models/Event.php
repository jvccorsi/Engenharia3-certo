<?php

final class Event {
    private $id;
    private $name;
    private $description;
    private $people_quantity; 
    private $date; 
    private $country;
    private $cep; 
    private $state; 
    private $city; 
    private $street; 
    private $neighborhood; 
    private $adress_number;
	
	public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

    public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getDescription(){
		return $this->description;
	}

	public function setDescription($description){
		$this->description = $description;
	}

	public function getPeople_quantity(){
		return $this->people_quantity;
	}

	public function setPeople_quantity($people_quantity){
		$this->people_quantity = $people_quantity;
	}

	public function getDate(){
		return $this->date;
	}

	public function setDate($date){
		$this->date = $date;
	}

	public function getCountry(){
		return $this->country;
	}

	public function setCountry($country){
		$this->country = $country;
	}

	public function getCep(){
		return $this->cep;
	}

	public function setCep($cep){
		$this->cep = $cep;
	}

	public function getState(){
		return $this->state;
	}

	public function setState($state){
		$this->state = $state;
	}

	public function getCity(){
		return $this->city;
	}

	public function setCity($city){
		$this->city = $city;
	}

	public function getStreet(){
		return $this->street;
	}

	public function setStreet($street){
		$this->street = $street;
	}

	public function getNeighborhood(){
		return $this->neighborhood;
	}

	public function setNeighborhood($neighborhood){
		$this->neighborhood = $neighborhood;
	}

	public function getAdress_number(){
		return $this->adress_number;
	}

	public function setAdress_number($adress_number){
		$this->adress_number = $adress_number;
	}
}