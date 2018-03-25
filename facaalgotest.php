<?php
class MinhaClasse {}
function facaAlgo(MinhaClasse $c = null) {
echo empty($c) ? "vazia" : "não vazia";
}
$c = new MinhaClasse;
facaAlgo();