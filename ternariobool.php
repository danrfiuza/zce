<?php
echo  ((bool)(new stdClass) ? (bool)true : (bool)false ).PHP_EOL;//return 1
$res = 'DONE';
$a = $res ?: 'TODO';
echo $a.PHP_EOL;