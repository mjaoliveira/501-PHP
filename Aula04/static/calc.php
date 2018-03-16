<?php

class Calc{
public static function soma(int $a, int $b){
	return $a + $b;
}

public static function subt(int $a, int $b){
	return $a - $b;
}

public static function mult(int $a, int $b){
	return $a * $b;
}

public static function divi(int $a, int $b){
	return $a / $b;
}


}

echo Calc::soma(6,2);
echo "<hr>";
echo Calc::subt(6,2);
echo "<hr>";
echo Calc::mult(6,2);
echo "<hr>";
echo Calc::divi(6,2);
echo "<hr>";