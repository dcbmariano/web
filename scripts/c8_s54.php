<?php 

# Vamos gravar este array em um arquivo
$nucleotideos = ["Adenina","Timina","Citosina","Guanina"];

# Criando arquivo
$arquivo = fopen("arquivo.txt","w");

# Inserimos uma quebra de linha \n
foreach($nucleotideos as $nucleotideo){
	fwrite($arquivo, $nucleotideo."\n");
}

# Fechamos o arquivo
fclose($arquivo);