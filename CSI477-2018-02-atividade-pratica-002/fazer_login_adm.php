<?php 
session_start();
include("conexao.php");
$email = $_POST['email'];
$senha = $_POST['senha'];
$usuario = $connection->query("SELECT * FROM users WHERE email = '$email' AND password = '$senha'");

if ($user = $usuario->fetch()){
	if($user["type"] >1) {
		$_SESSION["email"] = $user["email"];
		$_SESSION["senha"] = $user["password"];
		$_SESSION["user"] = $user["name"];
		$_SESSION["tipo"] = $user["type"];
		header('location:area_administrativa.php');
	}
	else{
		header('location:index.php');

	}
}else{
	header('location:index.php');
}

?>