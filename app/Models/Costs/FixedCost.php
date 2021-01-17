<?php
require_once 'Cost.php';

final class FixedCost extends Cost {
	private $item;
	private $tipo_custos;
    private $quantidade;
    private $gasto_final;

	public function getItem(){
		return $this->item;
	}

	public function setItem($item){
		$this->item = $item;
	}

	public function getTipo_custos(){
		return $this->tipo_custos;
	}

	public function setTipo_custos($tipo_custos){
		$this->tipo_custos = $tipo_custos;
	}

	public function getQuantidade(){
		return $this->quantidade;
	}

	public function setQuantidade($quantidade){
		$this->quantidade = $quantidade;
	}

	public function getGasto_final(){
		return $this->gasto_final;
	}

	public function setGasto_final($gasto_final){
		$this->gasto_final = $gasto_final;
	}
}