<?php 
# Excutando scripts externos
system("python mensagem.py");
# Lendo mensagem.txt
$mensagem = file("mensagem.txt");
foreach($mensagem as $linha){
	print $linha."<br>";
}