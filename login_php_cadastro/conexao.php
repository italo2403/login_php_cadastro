<?php
$servidor ="localhost";
$usuario = "root";
$senha = "Italo@1989";
$dbname="cadastroweb";

$conexao=mysqli_connect($servidor, $usuario, $senha, $dbname);
if(!$conexao){
 die("Houve um erro: ".mysqli_connect_error());
}