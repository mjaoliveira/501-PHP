<?php

class Carro{

	public $cor;
	public $marca;
	public $modelo;
	public $velocidade;

	public function buzinar(){
		echo "Estou buzinando";
	}

	public function acelerar(){
		$this->velocidade += 10;
	}

	public function freiar(){
		$this->velocidade -= 10;
	}
}

$uno = new Carro();
$uno -> cor = "Azul";
$uno -> marca = "Fiat";
$uno -> modelo = "Uno 1.0";
$uno -> buzinar();
$uno -> acelerar();
$uno -> acelerar();
$uno -> acelerar();
echo "Velocidade Atual: " . $uno -> velocidade;
$uno->freiar();
echo "Velocidade Atual: " . $uno -> velocidade;
var_dump($uno);
echo "<hr>";

$gol = new Carro();
$gol -> cor = "Preto";
$gol -> marca = "VW";
$gol -> modelo = "Gol 1.0";
var_dump($gol);
echo "<hr>";