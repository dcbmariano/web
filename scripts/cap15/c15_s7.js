var glviewer = null;

/* Load default PDB */
document.onload = readPDB("1bga.pdb");

/* Reading PDB */
function readPDB(id){
	var txt = id;
	
	$.post(txt, function(d) {
		moldata = data = d;

		/* Cria visualizacao */
		glviewer = $3Dmol.createViewer("pdb", {
			defaultcolors : $3Dmol.rasmolElementColors
		});

		/* Define cor do fundo*/
		glviewer.setBackgroundColor(0x242830);

		receptorModel = m = glviewer.addModel(data, "pqr");

		/* Define o tipo de visualizacao*/
		glviewer.setStyle({},{cartoon:{color:'spectrum'}}); /* Cartoon multi-color */
		glviewer.addSurface($3Dmol.SurfaceType, {opacity:0.3}); /* Surface */

		/* Define os nomes do atomos*/
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
