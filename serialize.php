<?php
$obj = new stdClass();
$obj->nome = 'Daniel';
$obj->curriculo = 'Analista Jr';

echo serialize($obj);