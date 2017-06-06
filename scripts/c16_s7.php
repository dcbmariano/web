<!-- MODAL 1 -->
<div class="modal fade" id="pdb_modal" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Estrutura tridimensional</h4>
			</div>
			<div class="modal-body">
				<div id="pdb_3d" style="width: 800px; height: 400px; margin: 0; padding: 0; border: 0;"></div>
			</div>
			<div class="modal-footer">
				<div class="form-inline">
					<button class="btn btn-default" onclick="colorSS(glviewer);">Colorir estrutura secundária</button>
					<div class="input-group">
						<input type="text" placeholder="Buscar resíduo por ID" id="sID" class="form-control" onform="">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button" onclick="selectID(glviewer)">Exibir</button>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- FIM MODAL 1 -->