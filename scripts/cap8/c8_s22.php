<?php

$i = 0;

while($i < 10){
	$i++;
	if ($i % 2 == 1){ 
		continue;
	}
	print $i; # 246810
}
