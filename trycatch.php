<?php

$conexao = new PDO("mysql:host=localhost;dbname=biscuits","root","root");

try{
	$conexao->beginTransaction();
	$sql = "INSERT INTO contatos (nome,endereco,dataNascimento,email) values(:nome,:endereco,:dataNascimento,:email)";
	$insert = $conexao->prepare($sql);
	$nome     = "Daniel Fiuza";
	$endereco = "SHPS QUADRA 104";
	$dataNasc = "1993-04-13";
	$email    = "daniel.fiuza@hotmail.com";
	$insert->bindParam(":nome",$nome);
	$insert->bindParam(":endereco",$endereco);
	$insert->bindParam(":dataNascimento",$dataNasc);
	$insert->bindParam(":email",$email);
	$insert->execute();
	$conexao->commit();
}catch(Exception $e){
	print_r($e->getMessage());
	$conexao->rollBack();
}finally{
	$conexao->exec("UNLOCK TABLES");
}