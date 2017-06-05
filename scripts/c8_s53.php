<?php 
$linhas_arquivo = file("arquivo.txt");
foreach($linhas_arquivo as $linha){
	echo $linha;
}