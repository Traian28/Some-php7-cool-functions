<?php

//echo  10<=>12;

// <    =    >
// 1    0    -1

$arreglo = [3,1,5,2,4];

//sort ($arreglo);

/*function comparar ($a, $b){
	if ($a == $b){
		return 0;
	} elseif ($a > $b){
		return 1;
	} else {
		return -1;
	}
}*/

function comparar ($a, $b){
	return $a<=>$b;
}
usort ($arreglo, 'comparar');

echo implode(' - ', $arreglo);