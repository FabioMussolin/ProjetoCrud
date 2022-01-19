<?php
include 'produto.class.php';
$produto = new Produto();

if(!empty($_GET['id'])) {
	$id = $_GET['id'];

  $info = $produto->getInfo($id);

}
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>:: Atualziar Produto</title>
  <link href="css/style.default.css" rel="stylesheet">
</head>

<body>
	  <div class="form"> 
	  	<h2>Cadastrar Produto</h2><br/><br/>
		  <form method="POST"> 
		      <input type="hidden" name="id" value="<?php echo $info['id'] ?>">

				  <label>Produto: </label>
				  <input type="text" class="form-control"  name="produto" value="<?php echo $info['produto'] ?>" /><br/><br/>

				  <label>Valor: </label>
				  <input type="text" class="form-control"  name="valor" value="<?php echo $info['valor'] ?>" /><br/><br/>
			    <button class="btn btn-primary" id="salvar">Salvar</button>
			</form>		
		</div>
<?php
	if(!empty($_POST['produto'])) {
	$nome = $_POST['produto'];
	$valor = $_POST['valor'];
	$id = $_POST['id'];

	$produto->editar($nome, $valor, $id);

	header("Location: listarProduto.php");
}

?>	