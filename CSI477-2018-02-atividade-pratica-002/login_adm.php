<?php
	session_start();
	if (isset($_SESSION['user']) || isset($_SESSION['senha'])) {
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
	<title>PetStyle</title>

	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="menu.css">
	<link rel="stylesheet" type="text/css" href="geral.css">

	<script src="jquery-3.3.1.js"></script>

	<script src="script_pagina_principal.js"></script>

</head>
<body>

	<div class="container lista-produtos">
		<form method="post" id="login" action="fazer_login_adm.php">
			<div class="form-group">
				<label for="email">E-mail:</label>
				<input type="email" name="email" id="email" class="form-control" placeholder="Digite o e-mail:">
			</div>
			<div class="form-group">
				<label for="senha">Senha:</label>
				<input type="password" name="senha" id="senha" class="form-control" placeholder="Digite a senha:">
			</div>
			<button type="submit" class="btn btn-lg btn-block btn-light">Fazer Login</button>
		</form>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>