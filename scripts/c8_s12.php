<?php 

#determinar se um numero eh par ou impar
$numero = 5;
$resto = $numero % 2;

# Testa se o numero eh par ou impar
if ($resto == 0){
	print "O número $numero é par.";
}
else{
	print "O número $numero é ímpar.";
}