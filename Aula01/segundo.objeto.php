<?php


class Caneta {

	public $cor;
	public $marca;
	public $tampada;
	public function escrever(string $texto){
		if ($this -> tampada) {
			echo "Primeiro destampe a caneta";
		}else{
			echo "Estou escrevendo: " . $texto;
		}

	}

	public function destampar(){
		$this -> tampada = false;
	}

	public function tampar(){
		$this -> tampada = true;
	}
}
$c1 = new Caneta();
$c1 -> cor = "Vermelha";
$c1 -> marca = "Bic";
$c1 -> escrever("Escrevendo...");
var_dump($c1);
echo"<hr>";

$c2 = new Caneta();
$c2 -> cor = "Azul";
$c2 -> marca = "Compactor";
var_dump($c2);
echo"<hr>";