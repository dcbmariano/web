<?php 
// Busca o nome de um organismo em um arquivo PDB
function buscaOrganismo($pdbid){
	$pdbid = strtolower($pdbid);
	$pdb = fopen("app/data/pdb/$pdbid.pdb","r");
	while(!feof($pdb)){
		$linha = fgets($pdb, 4096);
		$tipo = substr($linha, 11, 19);
		if($tipo === 'ORGANISM_SCIENTIFIC'){
			$organismo = substr($linha, 32);
			$organismo = str_replace(';','', $organismo);
		}
		if(isset($organismo)) break;
	}
	fclose ($pdb);
	return ucfirst(strtolower($organismo));
}
?>