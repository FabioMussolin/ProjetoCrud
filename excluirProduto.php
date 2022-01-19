<?php
include 'produto.class.php';
$produto = new Produto();

if(!empty($_GET['id'])) {
	$id = $_GET['id'];

	$produto->excluir($id);



}

header("Location: listarProduto.php");

?>

