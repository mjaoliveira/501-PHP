<?php

class Conta{

public $numConta;
public $saldo;
public $titular;
public $valor;

public function __construct($titular, $saldo = 0){
	$this -> titular = $titular;
	$this -> numConta = (string) rand(1000,9999) . "-" . rand(0,9);
	$this -> depositar ($saldo);
}

public function depositar($valor){
	$this -> saldo += $valor;
}

public function sacar($valor){
	$this -> saldo -= $valor;
}

public function verSaldo(){
	return "O saldo da conta é de R$" . $this -> saldo;
}

public function verTitular(){
	return "O titular da conta é o " . $this -> titular;
}

public function verConta(){
	return "O numero da conta é o " . $this -> numConta;
}

}
$c1 = new Conta("Marcelo, 2500");
$c1 -> depositar (1000);
echo $c1 -> verSaldo() . "<br>";
$c1 -> sacar (250);
echo $c1 -> verSaldo() . "<br>";
echo $c1 -> verTitular() . "<br>";
echo $c1 -> verConta() . "<br>";


// aaa