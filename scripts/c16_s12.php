<?php
$query = addslashes($_POST['query']);
$tipo = addslashes($_POST['tipo']);
if($tipo == 'p') {
	$programa = "blastp";
}

$tmp = fopen("app/data/tmp.fasta","w");
fwrite($tmp, ">Query\n".$query);
fclose($tmp);

//Executa blast
system("cd app/data && ../bin/$programa -query tmp.fasta -subject seq.fasta > results.txt");
echo "<h1>Resultados ($programa)</h1>";
$arquivo = file_get_contents("app/data/results.txt");

$resultados = explode("> ",$arquivo); //alterado para linux
array_shift($resultados); //remove primeiro elemento
?>