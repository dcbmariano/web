<script type="text/javascript">
var glviewer = null;
var labels = [];
var colorSS = function(viewer) {
		//colorir por cor secundaria
		var m = viewer.getModel();
		viewer.setStyle({},{cartoon:{}}); /* Cartoon */

		m.setColorByFunction({}, function(atom) {
			if(atom.ss == 'h') return "magenta";
			else if(atom.ss == 's') return "orange";
			else return "white";
		});
		viewer.render();
}

var atomcallback = function(atom, viewer) {
		if (atom.clickLabel === undefined
				|| !atom.clickLabel instanceof $3Dmol.Label) {
			atom.clickLabel = viewer.addLabel(atom.resn + " " + atom.resi + " ("+ atom.elem + ")", {
				fontSize : 10,
				position : {
					x : atom.x,
					y : atom.y,
					z : atom.z
				},
				backgroundColor: "black"
			});
			atom.clicked = true;
		}
		else {

			if (atom.clicked) {
				var newstyle = atom.clickLabel.getStyle();
				newstyle.backgroundColor = 0x66ccff;

				viewer.setLabelStyle(atom.clickLabel, newstyle);
				atom.clicked = !atom.clicked;
			}
			else {
				viewer.removeLabel(atom.clickLabel);
				delete atom.clickLabel;
				atom.clicked = false;
			}

		}
};

/* Lendo PDB */
function readPDB(id){
	var txt = "app/data/pdb/"+id+".pdb";
	$.post(txt, function(d) {
		moldata = data = d;
		/* Criando visualizacao*/
		glviewer = $3Dmol.createViewer("pdb_3d", {
			defaultcolors : $3Dmol.rasmolElementColors
		});

		/* Cor de fundo */
		glviewer.setBackgroundColor(0xffffff);

		receptorModel = m = glviewer.addModel(data, "pqr");

		/* Tipo de visualizacao */
		glviewer.setStyle({},{cartoon:{color:'spectrum'}}); /* Cartoon multi-color */
		glviewer.addSurface($3Dmol.SurfaceType, {opacity:0.1});   

		/* Nome dos átomos */
		atoms = m.selectedAtoms({});
		for ( var i in atoms) {
			var atom = atoms[i];
			atom.clickable = true;
			atom.callback = atomcallback;
		}

		glviewer.mapAtomProperties($3Dmol.applyPartialCharges);
		glviewer.zoomTo();
		glviewer.render();
	});
}
/* Seleciona por ID */
function selectID(glviewer){
	var resID = $('#sID').val();
	glviewer.setStyle({resi:resID},{stick:{colorscheme:'whiteCarbon'}}); 
	glviewer.render();
}
</script>