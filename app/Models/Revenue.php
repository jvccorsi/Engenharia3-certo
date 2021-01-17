<?php

final class Revenue {
	private $id_evento;
    private $item;
    private $preco;
    private $qtd_esperada;
    private $qtd_vendida;
    private $receita_esperada;
    private $obs;

    public function getId_evento(){
		return $this->id_evento;
	}

	public function setId_evento($id_evento){
		$this->id_evento = $id_evento;
	}

	public function getItem(){
		return $this->item;
	}

	public function setItem($item){
		$this->item = $item;
	}

	public function getPreco(){
		return $this->preco;
	}

	public function setPreco($preco){
		$this->preco = $preco;
	}

	public function getQtd_esperada(){
		return $this->qtd_esperada;
	}

	public function setQtd_esperada($qtd_esperada){
		$this->qtd_esperada = $qtd_esperada;
	}

	public function getQtd_vendida(){
		return $this->qtd_vendida;
	}

	public function setQtd_vendida($qtd_vendida){
		$this->qtd_vendida = $qtd_vendida;
	}

	public function getReceita_esperada(){
		return $this->receita_esperada;
	}

	public function setReceita_esperada($receita_esperada){
		$this->receita_esperada = $receita_esperada;
	}

	public function getObs(){
		return $this->obs;
	}

	public function setObs($obs){
		$this->obs = $obs;
	}
}