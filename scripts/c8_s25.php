<?php
function soma($a, $b){
	return $a + $b;
}
function fibonacci(){
	#inicia-se de 1,1
	$i = 1;
	$j = 1;
	while($j < 100){

		print "$i ";
		$aux = soma($i, $j);
		$i = $j;
		$j = $aux;
	}
}
fibonacci();
#1 1 2 3 5 8 13 21 34 55