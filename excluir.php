<?php
include 'cliente.class.php';
$cliente = new Cliente();

if(!empty($_GET['id'])) {
	$id = $_GET['id'];

	$cliente->excluir($id);



}

header("Location: listarCliente.php");

?>

