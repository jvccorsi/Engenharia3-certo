<?php
require_once 'Cost.php';

final class VariableCost extends Cost {
	private $nome;
	private $tipo_produto;
    private $unidade;
    private $qtd_esperada;
    private $gasto_esperado;

    public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getTipo_produto(){
		return $this->tipo_produto;
	}

	public function setTipo_produto($tipo_produto){
		$this->tipo_produto = $tipo_produto;
	}

	public function getUnidade(){
		return $this->unidade;
	}

	public function setUnidade($unidade){
		$this->unidade = $unidade;
	}

	public function getQtd_esperada(){
		return $this->qtd_esperada;
	}

	public function setQtd_esperada($qtd_esperada){
		$this->qtd_esperada = $qtd_esperada;
	}

	public function getGasto_esperado(){
		return $this->gasto_esperado;
	}

	public function setGasto_esperado($gasto_esperado){
		$this->gasto_esperado = $gasto_esperado;
	}
}