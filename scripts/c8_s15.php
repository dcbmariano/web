<?php

$idade = 18; 
 
if (($idade > 0) and ($idade < 16)){
	print "Voce nao pode votar!\n";
}
elseif ((($idade >= 16)and($idade < 18))or($idade >= 70)){
	print "Voto opcional!\n";
}
elseif (($idade >= 18) and ($idade < 70)){
	print "Voto obrigatorio!\n";
}
else{
	print "Idade invalida!\n";
}