<?php

function cuadrado (int $numero){
	return $numero*$numero;
}

$numero = 8;

echo 'El cuadrado de ' . $numero . ' es ' . cuadrado($numero);

