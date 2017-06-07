<?php $tmp = fopen("app/data/tmp.fasta","w");
fwrite($tmp, ">Query\n".$query);
fclose($tmp);
