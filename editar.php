<?php
include 'cliente.class.php';
$cliente = new Cliente();

if(!empty($_GET['id'])) {
	$id = $_GET['id'];

  $info = $cliente->getInfo($id);

}
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>:: Atualziar Cliente</title>
  <link href="css/style.default.css" rel="stylesheet">
</head>

<body>
	  <div class="form"> 
	  	<h2>Cadastrar Cliente</h2><br/><br/>
		  <form method="POST"> 
		      <input type="hidden" name="id" value="<?php echo $info['id'] ?>">

				  <label>Nome: </label>
				  <input type="text" class="form-control"  name="nome" value="<?php echo $info['nome'] ?>" /><br/><br/>

				  <label>Email: </label>
				  <input type="text" class="form-control"  name="email" value="<?php echo $info['email'] ?>" /><br/><br/>
			    <button class="btn btn-primary" id="salvar">Salvar</button>
			</form>		
		</div>
<?php
	if(!empty($_POST['email'])) {
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$id = $_POST['id'];

	$cliente->editar($nome, $email, $id);

	header("Location: listarCliente.php");
}

?>	