<?php

class Aluno{

	public $bar;

	public function __construct($nome){
		$this -> bar = $bar;
	}
}

echo "<prev>";
$a = 2;
$b = $a;
$a = 3;
var_dump($a, $b);

echo "<hr>";


$marcelo = new Aluno("marcelo");
$jorge = clone $marcelo;
$marcelo -> nome = "Oliveira";
$jorge -> nome = "Oliveira";
var_dump($marcelo, $jorge);





 ?>