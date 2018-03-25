<?php
class A{
	protected $a = 10;
	function a(){
		echo $this->a++;
	}
}

class B extends A{
	protected $a = 10;
	function b(){
		echo $this->a++; $this->a();
	}
}


//para manter o legado do OO do php4 o construtor executa a função b() como construtor


$b = new B;//echo 1011
$b->b();//echo 1213

//resposta 10111213	