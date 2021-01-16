<?php

abstract class Cost {
	private $price;
	private $final_expense;
    private $description;

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