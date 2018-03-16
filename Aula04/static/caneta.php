<?php

class Caneta{

	public static $tamanho = 10;
	private $cor;

	public function __construct($cor){
		$this -> cor == $cor;
	}

	public function getTamanho(){
		return self::$tamanho;
	}

	public function getCor(){
		return $this -> cor;
	}
}

$blue = new Caneta("Azul");
$black = new Caneta("Preta");
echo $blue -> getTamanho();
echo "<br>";
Caneta::$tamanho = 20;
echo $black -> getTamanho();
echo "<br>";
echo $blue -> getTamanho();