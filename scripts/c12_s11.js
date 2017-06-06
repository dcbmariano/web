var nome_arquivo = "arquivo.txt";
$.post(nome_arquivo, function(d) {
	$('#texto').text(d);
});