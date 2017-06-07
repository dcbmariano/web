<?php 
# Ordenando strings
$aminoacidos = [
	"C"=>"Cistenia",
	"S"=>"Serina",
	"V"=>"Valina",
	"A"=>"Alanina",
	"F"=>"Fenilalanina",
	"E"=>"Glutamato"
];
ksort($aminoacidos);
print_r($aminoacidos);
# Alanina Cistenia Fenilalanina Glutamato Serina Valina