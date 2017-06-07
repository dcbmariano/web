<?php //Executa blast
system("cd app/data && ../bin/$programa -query tmp.fasta -subject seq.fasta > results.txt");