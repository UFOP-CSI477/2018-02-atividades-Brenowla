<?php 
	session_start();
	include("conexao.php");
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>PetStyle</title>

	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="menu.css">
	<link rel="stylesheet" type="text/css" href="geral.css">

	<script src="jquery-3.3.1.js"></script>

	<script src="script_pagina_principal.js"></script>

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

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span>
								<img src="usuario.png" width="30px" ">
							</span>
						</a>

						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<?php 
								if(isset($_SESSION['user']) && isset($_SESSION['senha'])){
									echo "<p class='dropdown-item'> Conectado como: ".$_SESSION["user"]."</p>
									<a class='dropdown-item' href='minhaconta.php'>Minha Conta</a>
									<a class='dropdown-item' href='deslogar.php'>Sair</a>";
								}
								else{
									echo "<form method='post' class='dropdown-item' id='login' action='login.php'>
								<div class='form-group'>
									<label for='email'>E-mail:</label>
									<input type='email' name='e-mail' class='form-control' placeholder='E-mail:' id='email'>
								</div>
								<div class='form-group'>
									<label for='senha'>Senha:</label>
									<input type='password' name='senha' class='form-control' placeholder='Senha:' id='senha'>	
								</div>
								<button type='submit' class='btn btn-lg btn-block btn-light' id='logar'>Login</button>
							</form>
							<div class='dropdown-divider'></div>
							<a class='dropdown-item' href='cadastrar.php'>Cadastrar</a>";
								}
							?>	
	
						</div>
					</li>

					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<span>
								<img src="carrinho.png" width="30px">
							</span>
						</a>

						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<?php ?>
							<div class="dropdown-item align-items-baseline mw-100">
								<p>Nome do produto</p>
								<p>Quantidade: </p>
							</div>
							<div class="dropdown-divider"></div>
							<div class="dropdown-item align-items-baseline mw-100">
								<p>Nome do produto</p>
								<p>Quantidade: </p>
							</div>
							<div class="dropdown-divider"></div>
							<button class="btn btn-lg btn-block btn-light">Finalizar compra</button>
						</div>
					</li>

					<div style="margin-left: 100px;">
						
					</div>
				</ul>
			</div>

		</div>

	</nav>

	<div class="container lista-produtos">
		<div class="row">
			<div class="col-md-3 d-flex justify-content-center">
				<div class="produto w-75 ">
					<img src="produto.jpeg" class="w-100 imagem-produto" alt="Nome do produto">
					<h6 class="text-center">Nome do produto</h6>
					<h6 class="text-center">R$ 100,00</h6>
					<form method="post" class="d-flex justify-content-center">
						<input type="number" name="quantidade" min="1" max="99" placeholder="Quant.:" class="form-control">
						<input type="hidden" name="cod-prod" value="">
						<button type="submit" name="comprar" class="btn btn-dark">Comprar</button>
					</form>
				</div>
			</div>
			<div class="col-md-3 d-flex justify-content-center">
				<div class="produto w-75 ">
					<img src="produto.jpeg" class="w-100 imagem-produto" alt="Nome do produto">
					<h6 class="text-center">Nome do produto</h6>
					<h6 class="text-center">R$ 100,00</h6>
					<form method="post" class="d-flex justify-content-center">
						<input type="number" name="quantidade" min="1" max="99" placeholder="Quant.:" class="form-control">
						<input type="hidden" name="cod-prod" value="">
						<button type="submit" name="comprar" class="btn btn-dark">Comprar</button>
					</form>
				</div>
			</div>
			<div class="col-md-3 d-flex justify-content-center">
				<div class="produto w-75 ">
					<img src="produto.jpeg" class="w-100 imagem-produto" alt="Nome do produto">
					<h6 class="text-center">Nome do produto</h6>
					<h6 class="text-center">R$ 100,00</h6>
					<form method="post" class="d-flex justify-content-center">
						<input type="number" name="quantidade" min="1" max="99" placeholder="Quant.:" class="form-control">
						<input type="hidden" name="cod-prod" value="">
						<button type="submit" name="comprar" class="btn btn-dark">Comprar</button>
					</form>
				</div>
			</div>
			<div class="col-md-3 d-flex justify-content-center">
				<div class="produto w-75 ">
					<img src="produto.jpeg" class="w-100 imagem-produto" alt="Nome do produto">
					<h6 class="text-center">Nome do produto</h6>
					<h6 class="text-center">R$ 100,00</h6>
					<form method="post" class="d-flex justify-content-center">
						<input type="number" name="quantidade" min="1" max="99" placeholder="Quant.:" class="form-control">
						<input type="hidden" name="cod-prod" value="">
						<button type="submit" name="comprar" class="btn btn-dark">Comprar</button>
					</form>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-3 d-flex justify-content-center">
				<div class="produto w-75 ">
					<img src="produto.jpeg" class="w-100 imagem-produto" alt="Nome do produto">
					<h6 class="text-center">Nome do produto</h6>
					<h6 class="text-center">R$ 100,00</h6>
					<form method="post" class="d-flex justify-content-center">
						<input type="number" name="quantidade" min="1" max="99" placeholder="Quant.:" class="form-control">
						<input type="hidden" name="cod-prod" value="">
						<button type="submit" name="comprar" class="btn btn-dark">Comprar</button>
					</form>
				</div>
			</div>
			<div class="col-md-3 d-flex justify-content-center">
				<div class="produto w-75 ">
					<img src="produto.jpeg" class="w-100 imagem-produto" alt="Nome do produto">
					<h6 class="text-center">Nome do produto</h6>
					<h6 class="text-center">R$ 100,00</h6>
					<form method="post" class="d-flex justify-content-center">
						<input type="number" name="quantidade" min="1" max="99" placeholder="Quant.:" class="form-control">
						<input type="hidden" name="cod-prod" value="">
						<button type="submit" name="comprar" class="btn btn-dark">Comprar</button>
					</form>
				</div>
			</div>
			<div class="col-md-3 d-flex justify-content-center">
				<div class="produto w-75 ">
					<img src="produto.jpeg" class="w-100 imagem-produto" alt="Nome do produto">
					<h6 class="text-center">Nome do produto</h6>
					<h6 class="text-center">R$ 100,00</h6>
					<form method="post" class="d-flex justify-content-center">
						<input type="number" name="quantidade" min="1" max="99" placeholder="Quant.:" class="form-control">
						<input type="hidden" name="cod-prod" value="">
						<button type="submit" name="comprar" class="btn btn-dark">Comprar</button>
					</form>
				</div>
			</div>
			<div class="col-md-3 d-flex justify-content-center">
				<div class="produto w-75 ">
					<img src="produto.jpeg" class="w-100 imagem-produto" alt="Nome do produto">
					<h6 class="text-center">Nome do produto</h6>
					<h6 class="text-center">R$ 100,00</h6>
					<form method="post" class="d-flex justify-content-center">
						<input type="number" name="quantidade" min="1" max="99" placeholder="Quant.:" class="form-control">
						<input type="hidden" name="cod-prod" value="">
						<button type="submit" name="comprar" class="btn btn-dark">Comprar</button>
					</form>
				</div>
			</div>
		</div>

		<div class="d-flex justify-content-end">
			<a class="link-adm" href="login_adm.php">Área Administrativa</a>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>