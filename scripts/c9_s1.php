<?php 

/* 
Site: Betabase
Autor: Diego Mariano
Data: 30 de maio, 2017
*/

/* Define a página atual pela URL */
$pagina = 'home';

if(isset($_GET['i'])){
	$pagina = addslashes($_GET['i']);
}

/* Carrega o header.php */
include 'app/views/header.php';

/* Carrega a página escolhida pelo usuário */
switch ($pagina) {
	case 'navegar':
	include 'app/views/navegar.php';
	break;

	case 'blast':
	include 'app/views/blast.php';
	break;
	
	default:
	include 'app/views/home.php';
	break;
}

/* Carrega o footer.php */
include 'app/views/footer.php';
