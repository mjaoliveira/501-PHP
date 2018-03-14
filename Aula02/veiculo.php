<?php

class Veiculo{

	public $rodas;
	public $metal;
	private $velocidade;
	private $cor;

	public function setCor ($cor){
		$this -> cor = $cor;
	}

	public function getCor ($cor){
		return $this -> cor;
	}

	public function setVelocidade($velocidade){
		$this -> velocidade = $velocidade;
	}

	public function getVelocidade($velocidade){
		return $this -> velocidade;
	}

	protected function acelerar(){}

	protected function freiar(){}

	protected function verVelocidade(){
		return "Velocidade Atual: " . $this -> velocidade;
	}

}

class Moto extends Veiculo{

		public function acelerar(){
		$this -> velocidade += 5;
 }
}
class Carro extends Veiculo{

		public function acelerar(){
		$this -> velocidade += 10;
 }
}

class Bicicleta extends Veiculo{

		public function acelerar(){
		$this -> velocidade += 2;
 }
}

$bike1 = new Bicicleta ();
$bike1 -> rodas (2);
$bike1 -> metal ("Aluminio");
$bike1 -> acelerar();

$car1 = new Carro ();
$car1 -> rodas (4);
$car1 -> metal ("Aco");
$car1 -> acelerar();

$motocycle1 = new Moto ();
$motocycle1 -> rodas (2);
$motocycle1 -> metal ("Aco");
$motocycle1 -> acelerar();