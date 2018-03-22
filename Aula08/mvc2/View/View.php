<?php

namespace View;

class View{

	public function render(array $data){
		//extract transforma um array em variaveis
		//ex : array ['nome' => Marcelo, 'empresa' => '4linux';
		//ex $nome => Marcelo; $empresa = '4linux';
		//ex echo $nome >> 'Marcelo';
		//ex echo empresa >> '4linux'
		extract($data);
		include 'src/hello.php';
	}
}