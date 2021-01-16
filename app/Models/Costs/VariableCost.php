<?php
require_once 'Cost.php';

abstract class VariableCost extends Cost {
	private $name;
	private $product_type;
    private $unity;
    private $expected_amount;
    private $expected_spend;
    private $total_quantity;

    public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getProduct_type(){
		return $this->product_type;
	}

	public function setProduct_type($product_type){
		$this->product_type = $product_type;
	}

	public function getUnity(){
		return $this->unity;
	}

	public function setUnity($unity){
		$this->unity = $unity;
	}

	public function getExpected_amount(){
		return $this->expected_amount;
	}

	public function setExpected_amount($expected_amount){
		$this->expected_amount = $expected_amount;
	}

	public function getExpected_spend(){
		return $this->expected_spend;
	}

	public function setExpected_spend($expected_spend){
		$this->expected_spend = $expected_spend;
	}

	public function getTotal_quantity(){
		return $this->total_quantity;
	}

	public function setTotal_quantity($total_quantity){
		$this->total_quantity = $total_quantity;
	}
}