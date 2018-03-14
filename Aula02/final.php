<?php

Class Foo{ protected $foo;}
class Bar extends Foo{}

echo "<prev>";
$foo = new Foo();
var_dump($foo);
$bar = new Bar();
var_dump($bar);