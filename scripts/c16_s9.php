<?php 
// Abrir arquivo de sequencias 
$arquivo = file_get_contents("app/data/seq.fasta"); 
$fastas = explode(">",$arquivo); // particiona o array em fastas separados
array_shift($fastas); // remove primeiro elemento
$total_fastas = count($fastas);
$pdbid_anterior = "Nenhum";
$id = 0;

for($i = 0; $i < $total_fastas; $i++){
	$pdbid = substr($fastas[$i], 0, 4);
	$cadeia = substr($fastas[$i], 5, 1);
	$seq = substr($fastas[$i], 27);
	
	if($pdbid_anterior != $pdbid){

		$pdbid_anterior = $pdbid;
		$id++; // Soma #

		if ($id != 1){ 
			echo '</td></tr><tr>'; //Abre uma nova linha
		}
		else {
			echo '<tr>'; //Abre uma nova linha
		}

		echo '<td>'.$id.'</td>'; // Grava #
		echo '<td><a href="app/data/pdb/'.strtolower($pdbid).'.pdb">'.$pdbid.'</a></td>'; // Grava pdbid
		echo '<td><a data-toggle="modal" onclick="readPDB(\''.strtolower($pdbid).'\');" data-target="#pdb_modal"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></a>';
		echo '<td><i>'.buscaOrganismo($pdbid).'</i></td>'; // Busca nome do organismo
		echo '<td><button data-toggle="modal" data-target="#'.$pdbid.'_'.$cadeia.'" style="margin-left:5px" type="button" class="btn btn-default btn-xs" title="'.$pdbid.':'.$cadeia.'" 
		>'.$cadeia.'</button>';

		// MODAL 2
		echo '<div class="modal fade" id="'.$pdbid.'_'.$cadeia.'" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		<h4 class="modal-title" id="myModalLabel">'.$pdbid.':'.$cadeia.'</h4>
		</div>
		<div class="modal-body">
		<pre>'.$seq.'</pre>
		</div>
		<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		
		</div>
		</div>
		</div>
		</div>';
		// FIM MODAL 2
	}
	else{
		echo '<button type="button" data-toggle="modal" data-target="#'.$pdbid.'_'.$cadeia.'" style="margin-left:5px" class="btn btn-default btn-xs" title="'.$pdbid.':'.$cadeia.'" 
		data-container="body" data-toggle="popover" data-placement="left" 
		data-content="'.$seq.'">'.$cadeia.'</button>';

		// MODAL 3
		echo '<div class="modal fade" id="'.$pdbid.'_'.$cadeia.'" tabindex="-1" role="dialog">
		<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
		</button>
		<h4 class="modal-title" id="myModalLabel">'.$pdbid.':'.$cadeia.'</h4>
		</div>
		<div class="modal-body">
		<pre>'.$seq.'</pre>
		</div>
		<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		
		</div>
		</div>
		</div>
		</div>';
		// FIM MODAL 3
	}
}
?>
</tbody>
</table>
</div>
</div>
