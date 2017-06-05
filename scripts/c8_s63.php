<?php 
require 'aminoacidos.php';
$aminoacido = new Aminoacidos();
echo "<b>Nome: </b>".$aminoacido->nome;
echo "<br>";
echo "<b>Sigla: </b>".$aminoacido->abreviacao;
echo "<br>";
echo "<b>Tipo: </b>".$aminoacido->tipo;
