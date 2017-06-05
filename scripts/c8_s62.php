<?php 
class Aminoacidos{
	public $nome;
	public $abreviacao;
	public $tipo;
	# metodo construtor da classe
	function Aminoacidos(){
		$this->criaAminoacido();
	}
	function criaAminoacido(){
		$this->nome = "Glutamato";
		$this->abreviacao = "E";
		$this->tipo = "Polar negativo";
	}
}
