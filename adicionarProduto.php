<?php
include 'produto.class.php';
$produto = new Produto();
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>:: Adicionar Produtos</title>
  <link href="css/style.default.css" rel="stylesheet">
</head>

<body>
	  <div class="form"> 
	  	<h2>Cadastrar Produtos</h2><br/><br/>
		  <form method="POST">  
				  <label>Produto: </label>
				  <input type="text" class="form-control"  name="produto" placeholder="Produto" /><br/><br/>

				  <label>Valor: </label>
				  <input type="text" class="form-control"  name="valor" placeholder="0.00" /><br/><br/>

				  <label>Cliente: </label>
				  <input type="text" class="form-control"  name="id_cliente" placeholder="Codigo do Cliente" /><br/><br/>

			    <button class="btn btn-primary" id="salvar">Salvar</button>
			</form>		
		</div>
<?php
	if(!empty($_POST['produto'])) {
	$nome = $_POST['produto'];
	$valor = $_POST['valor'];
	$id_cliente = $_POST['id_cliente'];
	$produto->adicionar($nome, $valor, $id_cliente);

}
?>		

