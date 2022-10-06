<?php

	include("conexao.php");

	$email=$_POST['email'];
	$senha=$_POST['senha'];
	$senha2=$_POST['senha2'];
	
	$sql="INSERT INTO cadastro2( email, senha, senha2)
	VALUES ('$email', '$senha', '$senha2')";
	if(mysqli_query($conexao, $sql)){
		echo "Usuário Cadastrado com sucesso";
	}else{
		echo "Erro". mysqli_connect_error($conexao);
	}
	
	mysqli_close($conexao);
?>