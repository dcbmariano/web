<?php 

# Lendo o diretorio atual
$dir = ".";
$arquivos = scandir($dir);

foreach($arquivos as $arquivo){

	# Colentando a extensao
	$extensao = explode(".",$arquivo);
	$extensao = end($extensao);

	# Organizando por tipos de arquivos
	switch ($extensao) {
		case 'php':
			print "Arquivo PHP: ".$arquivo."<br>";
			break;
		
		case 'txt':
			print "Arquivo de texto: ".$arquivo."<br>";
			break;
	}

}
