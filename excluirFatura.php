<?php
include 'fatura.class.php';
$fatura = new Fatura();

if(!empty($_GET['id'])) {
	$id = $_GET['id'];

	$fatura->excluir($id);



}

header("Location: listarFatura.php");

?>

