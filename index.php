<?php
include 'cliente.class.php';
$cliente = new Cliente();
?>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
    <title>:: Cadastro CRUD</title>

  <link href="css/style.default.css" rel="stylesheet">
</head>

<h1>Software CRUD - Escolha uma Opção</h1>

<div class="leftpanelinner">      
	  <h5 class="sidebartitle">Navegação</h5>
	  <ul class="nav nav-pills nav-stacked nav-bracket">
		<li><a href="listarCliente.php" target="_blank"><i class="fa fa-tasks"></i> <span>Listar Clientes</span></a></li>
		<li><a href="adicionarCliente.php" target="_blank"><i class="fa fa-tasks"></i> <span>Inserir Novo Cliente</span></a></li>
		<li><a href="listarProduto.php" target="_blank"><i class="fa fa-tasks"></i> <span>Listar Produtos</span></a></li>
		<li><a href="adicionarProduto.php" target="_blank"><i class="fa fa-tasks"></i> <span>Inserir Novo Produto</span></a></li>
		<li><a href="listarFatura.php" target="_blank"><i class="fa fa-tasks"></i> <span>Listar Faturas</span></a></li>
		<li><a href="adicionarFatura.php" target="_blank"><i class="fa fa-tasks"></i> <span>Inserir Nova Fatura</span></a></li>
		
	  </ul>
	</div>
  </div>


