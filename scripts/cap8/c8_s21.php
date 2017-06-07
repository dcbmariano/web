<?php
$i = 0;
while($i < 10){
	$i++;
	if ($i > 5){ 
		continue;
	}
	print $i; #12345
}