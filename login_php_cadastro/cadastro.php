<?php

	include("conexao.php");
	
	$email=$_POST['email'];
	$senha=$_POST['senha'];
	
	
	$sql="INSERT INTO cadastro(email, senha)
	VALUES ('$email', '$senha')";
	if(mysqli_query($conexao, $sql)){
		echo "Usuário Cadastrado com sucesso";
	}else{
		echo "Erro". mysqli_connect_error($conexao);
	}
	
	mysqli_close($conexao);
?>