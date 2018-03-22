<?php

class x
{
	public function __construct(){
		echo "Estou construindo <br>";
	}

	public function __destruct(){
		echo "Estou destruindo <br>";
	}

}

$x = new