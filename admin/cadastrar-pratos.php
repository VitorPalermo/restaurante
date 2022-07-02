<?php
// include = abri conexao com banco de dados
include('../includes/conexao.php');

// $_post = nao aparece as informações na aba do site
// get = aparece as informações na aba do site


$nome = $_POST['nome'];
$codigo = $_POST['codigo'];
$preco = $_POST['preco'];
$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];
$calorias = $_POST['calorias'];
$destaque = $_POST['destaque'];

$sql = "INSERT INTO tb_pratos (codigo, nome, categoria, descricao, preco, calorias, destaque)
VALUES ('$codigo','$nome','$categoria','$descricao','$preco','$calorias','$destaque')";

// query vai executar dentro do banco de dados

$conexao->query($sql);

$conexao->close();

header('location: listar_pratos.php');


?>