<?php

abstract class Conta{

	private $titular;
	protected $saldo;
	protected $numConta;
	private $senha;


	public function __construct(string $nome, string $senha, int $saldo = 0){
		$this -> saldo = $saldo;
		$this -> senha = $senha;
		$this -> titular = $nome;
		$this -> gerarNumConta();
	}
	abstract protected function gerarNumConta();
	abstract protected function depositar(int $valor);
	abstract protected function sacar(int $valor);

	public function getSaldo(){
		return $this -> saldo;
	}

	public function getTitular(){
		return $this -> titular;
	}

	public function getNumConta(){
		return $this -> numConta;
	}
}

class ContaPoupanca extends Conta{

	protected function gerarNumConta(){
		$this -> numConta = 'cp:' . rand(1000,9999);
	}

	public function depositar(int $valor){
		$this -> saldo += $valor + ($valor + 0.02);
	}

	public function sacar(int $valor){
	    $this -> saldo -= $valor;
	}
}

echo "<pre>";
$cp1 = new ContaPoupanca("Marcelo","123",20000);
var_dump($cp1);
$cp1 -> depositar(50);
var_dump($cp1);
$cp1 -> sacar(150);
var_dump($cp1);
var_dump($cp1 -> getSaldo());
var_dump($cp1 -> getTitular());
var_dump($cp1 -> getNumConta());
