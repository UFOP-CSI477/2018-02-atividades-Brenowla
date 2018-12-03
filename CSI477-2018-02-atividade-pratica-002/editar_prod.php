<?php 
session_start();
if (!isset($_SESSION['user']) || !isset($_SESSION['senha']) || !isset($_SESSION["tipo"]) || $_SESSION["tipo"]==1) {
	header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>PetStyle</title>

	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="menu.css">
	<link rel="stylesheet" type="text/css" href="geral.css">

</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-light">

		<div class="container-fluid">

			<div class="navbar-header d-flex">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
					<span class="navbar-toggler-icon"></span>
				</button>

				<a href="index.php">
					<span> 
						<img src="logo.png" class="logo">
					</span>
				</a>	
			</div>

			<div class="collapse navbar-collapse justify-content-center" id="conteudoNavbarSuportado">

				<ul class="nav navbar-nav">

					<?php 
					if($_SESSION["tipo"]==3){
						echo "<li class='nav-item'>
						<a class='nav-link' href='editar_prod.php''>Alterar produto</a>
						</li>";
					}
					else if($_SESSION["tipo"]==2){
						echo "<li class='nav-item'>
						<a class='nav-link' href='cadastrar_prod.php'>Adicionar produto</a>
						</li>

						<li class='nav-item'>
						<a class='nav-link' href='listar_prod.php'>Listar produtos</a>
						</li>

						<li class='nav-item'>
						<a class='nav-link' href='editar_prod.php'>Alterar produto</a>
						</li>

						<li class='nav-item'>
						<a class='nav-link' href='remover_prod.php'>Remover produto</a>
						</li>";
					}
					?>

			</ul>

		</div>

	</div>

</nav>

<div class="container bloco">
	<form>
		<div class="form-group">
			<label for="id-produto">ID do produto:</label>
			<input type="email" name="nome-produto" class="form-control">
		</div>
		<div class="form-group">
			<label for="nome-produto">Nome do produto:</label>
			<input type="email" name="nome-produto" class="form-control">
		</div>
		<div class="form-group">
			<label for="preco-produto">Preço do produto:</label>
			<input type="text" name="preco-produto" class="form-control">
		</div>
		<div class="custom-file">
			<input type="file" name="imagem-produto" class="custom-file-input">
			<label for="imagem-produto" class="custom-file-label">Imagem do produto:</label>
		</div>
		<button type="submit" class="btn btn-lg btn-block btn-light">Editar produto</button>
	</form>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>