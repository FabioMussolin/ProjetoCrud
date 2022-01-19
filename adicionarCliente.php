<?php
include 'cliente.class.php';
$cliente = new Cliente();
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>:: Adicionar Cliente</title>
  <link href="css/style.default.css" rel="stylesheet">
</head>

<body>
	  <div class="form"> 
	  	<h2>Cadastrar Cliente</h2><br/><br/>
		  <form method="POST">  
				  <label>Nome: </label>
				  <input type="text" class="form-control"  name="nome" placeholder="Nome" /><br/><br/>

				  <label>Email: </label>
				  <input type="text" class="form-control"  name="email" placeholder="Email" /><br/><br/>
			    <button class="btn btn-primary" id="salvar">Salvar</button>
			</form>		
		</div>
<?php
	if(!empty($_POST['email'])) {
	$nome = $_POST['nome'];
	$email = $_POST['email'];

	$cliente->adicionar($email, $nome);

}
?>		

