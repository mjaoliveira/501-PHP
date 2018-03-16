<?php

function dividir (int $a, int $b){
	if ($b == 0) {
	
	throw new Exception("Divisor não pode ser 0");
    }
return $a / $b;
	
}

try{
	echo dividir(12,0);
} catch (Exception $e){
	echo "Erro: {$e -> getMessage()}";
}