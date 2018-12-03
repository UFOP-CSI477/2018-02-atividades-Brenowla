<?php  
	session_start();
	include("conexao.php");
	unset($_SESSION['user']);
	unset($_SESSION['email']);
	unset($_SESSION['senha']);
	header('location:index.php');
?>