<?php 

$conexao = new PDO('pgsql:host=localhost;dbname=aula','marcelo','123');

var_dump($conexao);


// $conexao -> exec($sql)