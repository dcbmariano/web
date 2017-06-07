			<!-- Preenchendo a tabela -->
				
				<?php 
				$arquivo = file("app/data/seq.fasta"); // Abrir arquivo de sequencias 
				array_push($arquivo,">"); // Permite que o ultimo elemento seja inserido 
				
				$pdbid_anterior = "";
				$sid = 0; //numero da sequencia
				$pid = 0; //numero do pdb 

				// Para cada linha do arquivo de sequencia
				foreach($arquivo as $linha){

					// Se for o cabeçalho e diferente do anterior (salva uma unica cadeia)
					// for id = 0: CONDIÇÃO ESPECIAL
					if ($sid == 0){

						// Detecta cabeçalho
						if(substr($linha,0,1) == '>'){
							
							$info = explode("|",$linha);
							$pdb_cadeia = explode(":", $info[0]);
							$pdb_id = substr($pdb_cadeia[0], 1);
							$cadeia = $pdb_cadeia[1];
							$seq_atual = "";
							if($pdbid_anterior != $pdb_id){
								$pdbid_anterior = $pdb_id;
								$pid++;
							}
							$sid++;
						}
						else{
							$seq_atual .= $linha;
						}
					}
					else{ 

						// Primeiro gravo toda a informação 
						if(substr($linha,0,1) == '>'){ ?>
							<tr <?php if($cadeia == "A"){ echo 'class="success"'; }?>>
								<td><?php echo $sid; ?></td>
								<td><?php echo $pid; ?></td>
								<td><?php echo $pdb_id; ?></td>
								<td><?php echo $cadeia; ?></td>
								<td><pre><?php echo $seq_atual; ?></pre></td>
								<td style="text-align:center">
									<a href="app/data/pdb/<?php echo strtolower($pdb_id); ?>.pdb">
										<span class="glyphicon glyphicon-download" aria-hidden="true"></span>
									</a>
								</td>
							</tr>

						<?php 
						
							// Agora coleto a próxima linha
							$info = explode("|",$linha);
							$pdb_cadeia = explode(":", $info[0]);
							$pdb_id = substr($pdb_cadeia[0], 1);
							@$cadeia = $pdb_cadeia[1];
							$seq_atual = "";
							if($pdbid_anterior != $pdb_id){
								$pdbid_anterior = $pdb_id;
								$pid++;
							}
							$sid++;
						}
						else{
							$seq_atual .= $linha;
						}							
					}		
				}
			?>
			</tbody>
		</table>
	</div>
</div>
