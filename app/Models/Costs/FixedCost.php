<?php
require_once 'Cost.php';

final class FixedCost extends Cost {
	private $item;
	private $cost_type;
    private $quantity;

	public function getItem(){
		return $this->item;
	}

	public function setItem($item){
		$this->item = $item;
	}

	public function getCost_type(){
		return $this->cost_type;
	}

	public function setCost_type($cost_type){
		$this->cost_type = $cost_type;
	}

	public function getQuantity(){
		return $this->quantity;
	}

}