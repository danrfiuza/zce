<?php
$question  = "QUAL A RESPOSTA DO CÓDIGO A SEGUIR?\n";
$question .='<?php'."\n\t".'echo strlen('."'".'1\n2'."'".') * strlen('.'"1\n2"'.')';
$question .="\n".'?>'."\n";
echo $question;
print 'RESPOSTA: '.(strlen('1\n2')*strlen("1\n2")).PHP_EOL;


