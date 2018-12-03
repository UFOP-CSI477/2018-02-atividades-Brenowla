<?php
	session_start();
	if (isset($_SESSION['user']) || isset($_SESSION['senha'])) {
		header('Location: index.php');
	} 

	include("conexao.php");
	$nome = $_POST['nome'];
	$senha = $_POST['senha'];
	$email = $_POST['email'];
	$insertion = $connection->prepare('INSERT INTO users  (name,email,password,type) VALUES (:nome,:email,:senha,1)');
	$insertion->execute(array(
		':nome' => $nome,
		':email' => $email,
		':senha' => $senha
	));

	$_SESSION['user'] = $nome;
	$_SESSION['email'] = $email;
	$_SESSION['senha'] = $senha;

	header('Location: index.php');
?>