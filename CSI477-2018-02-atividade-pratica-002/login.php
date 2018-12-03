<?php  
	session_start();
	include("conexao.php");
	$email = $_POST['e-mail'];
	$senha = $_POST['senha'];
	$usuario = $connection->query("SELECT * FROM users WHERE email = '$email' AND password = '$senha'");
	if ($user = $usuario->fetch()) {
		$_SESSION["email"] = $user["email"];
		$_SESSION["senha"] = $user["password"];
		$_SESSION["user"] = $user["name"];
	}
	header('location:index.php');
?>