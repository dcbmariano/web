<?php 

$arquivo = fopen("arquivo.txt","r");

while(!feof($arquivo)){
	echo fgets($arquivo);
}

fclose($arquivo);