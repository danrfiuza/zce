<?php
class Pessoa{
	private $nome  = '';
	private $idade = '';

	function __construct(string $nome,int $idade)
	{
		$this->nome  = $nome;
		$this->idade = $idade; 
	}

	public function saudacao() : string
	{
		return 'Meu nome é'.$this->nome.' eu tenho '.$this->idade.' anos.';
	}
}