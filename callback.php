<?php
class Test {
	/**
	*string $name nome da função capturada
	*$args agumentos da função
	*
	*/
	//3 ao chamar a função inexistente é disparado o método mágico __call
	//recuperando o nome da função e os parâmetros da mesma
    public function __call($name, $args) {
    	//4 invoca a função testS staticamente
        call_user_func_array(array('static', "test$name"), $args);
    }
    public function testS($l) {
        echo "$l,";
   }
}
class Test2 extends Test {
    public function testS($l) {
    echo "$l,$l,";
    }
}
//1 Instancia a classe
$test = new Test2();
//chama um método inexistente
$test->S('A');
//5 retorna A,A,