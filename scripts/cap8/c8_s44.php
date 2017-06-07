<?php 

$aminoacidos = array("Alanina","Cisteina","Aspartato");

# Removendo um unico aminoacido
unset($aminoacidos[2]);
print_r($aminoacidos); # Alanina Cisteina

# Apagando todo o array
unset($aminoacidos);
