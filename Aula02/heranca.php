<?php

class Animal{
	public $raca;
	public $genero;

	public function comer(){

	}

	public function dormir(){
		
	}

}

class Cachorro extends Animal{


}

class Gato extends Animal{


}

$dog = new Cachorro();
var_dump($dog);