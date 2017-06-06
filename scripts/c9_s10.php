<!-- Segunda parte -->
<div id="blast">
	<div class="container">
		<form method="post" action="?i=blast&results">
			<!-- Tipo de blast -->
			<div class="btn-group" data-toggle="buttons">
				<label class="btn btn-default active">
					<input type="radio" name="tipo" value="p" autocomplete="off" title="BLAST PROTEIN -> PROTEIN" checked> blastp
				</label>
			</div>
			
			<textarea name="query" class="form-control" placeholder="Insira a sequência aqui" rows="5"></textarea>
			<p class="center">
				<br>
				<input type="submit"  name="submit" value="Executar BLAST" class="btn btn-primary btn-lg">
			</p>
