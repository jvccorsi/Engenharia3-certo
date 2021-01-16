<?php

abstract class Cost {
	private $id_evento;
	private $price;
	private $final_expense;
	private $description;
	
	public function getId_evento(){
		return $this->$id_evento;
	}

	public function setId_evento($id_evento){
		$this->id_evento = $id_evento;
	}

    public function getPrice(){
		return $this->price;
	}

	public function setPrice($price){
		$this->price = $price;
	}

	public function getFinal_expense(){
		return $this->final_expense;
	}

	public function setFinal_expense($final_expense){
		$this->final_expense = $final_expense;
	}

	public function getDescription(){
		return $this->description;
	}

	public function setDescription($description){
		$this->description = $description;
	}
}