<?php

abstract class Cost {
	private $id_evento;
	private $preco;
	private $obs;
	
	public function getId_evento(){
		return $this->id_evento;
	}

	public function setId_evento($id_evento){
		$this->id_evento = $id_evento;
	}

	public function getPreco(){
		return $this->preco;
	}

	public function setPreco($preco){
		$this->preco = $preco;
	}

	public function getObs(){
		return $this->obs;
	}

	public function setObs($obs){
		$this->obs = $obs;
	}
}