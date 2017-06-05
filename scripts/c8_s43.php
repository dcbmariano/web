<?php 

$aminoacidos = array("Alanina","Cisteina","Aspartato");

# Inserindo um novo elemento
array_push($aminoacidos, "Glutamato");

# Inserindo mais de um elemento por vez
array_push($aminoacidos, "Fenilalanina","Glicina","Histidina");

print_r($aminoacidos);
# Alanina Cisteina Aspartato Glutamato 
# Fenilalanina Glicina Histidina