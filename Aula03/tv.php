<?php

interface TelevisaoInterface{

	public function aumentaVolume();
	public function diminuiVolume();
	public function ligar();
	public function desligar();
	public function trocarCanal($canal);

}

class TV implements TelevisaoInterface{

	public $volume = 10;
	public $canal = 5;
	public $estado = 'OFF';

	public function aumentaVolume(){
		$this -> volume++;
	}

	public function diminuiVolume(){
		$this -> volume--;
	}

	public function ligar(){
		$this -> estado = true;
	}

	public function desligar(){
		$this -> estado = false;
	}

	public function trocarCanal($canal){
		$this -> canal = $canal;
	}

}

echo "<pre>";
$tv = new TV();
print_r($tv);
echo "<hr>";
$tv -> ligar();
print_r($tv);