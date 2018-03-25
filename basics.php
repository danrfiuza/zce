<?php
$a = array('a','b' => 'c');
print (property_exists((object)$a, 'a')?'verdadeiro':'falso').PHP_EOL;
print (property_exists((object)$a,'b')?'verdadeiro':'falso').PHP_EOL;
print_r((object)$a);