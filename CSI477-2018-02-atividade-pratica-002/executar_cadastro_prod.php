<?php

session_start();
if (!isset($_SESSION['user']) || !isset($_SESSION['senha']) || !isset($_SESSION["tipo"]) || $_SESSION["tipo"]==1 ||  $_SESSION["tipo"]==3) {
	header('Location: index.php');
}

include("conexao.php");
$nome = $_POST['nome-produto'];
$preco = $_POST['preco-produto'];

$foto = $_FILES['imagem-produto'];
$arq_temp = $foto['tmp_name'];

$nomeF = $foto["name"];

        //Seleciona extensão
$extensaoF = pathinfo($nomeF, PATHINFO_EXTENSION);

        //Converte a extensão para minúsculo
$extensaoF =  strtolower($extensaoF);
$novoNomeF = uniqid(time()).$extensaoF;
$destino = 'imagens_produtos/' . $novoNomeF;
move_uploaded_file($arquivoTMP, $destino);

$insertion = $connection->prepare('INSERT INTO produtos  (nome,preco,imagem) VALUES (:nome,:preco,:imagem)');
$insertion->execute(array(
		':nome' => $nome,
		':preco' => $preco,
		':imagem' => $destino
	));
header('Location: area_administrativa.php')
?>
