<?php
//EXPLICAÇÃO DA FUNÇÃO:


function z($x) {
    return function ($y) use ($x) {
    	echo $y;
        return str_repeat($y, $x);
    };
}


$a = z(2);//REPASSA A FUNÇÃO Z COM A FUNÇÃO ANÔNIMA PARA A VARIÁVEL $a
$b = z(3);

$a(3);//retorna o valor de $a
// echo $a(3) . $b(2);