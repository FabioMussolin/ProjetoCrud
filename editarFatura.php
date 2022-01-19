<?php
include 'fatura.class.php';
$fatura = new Fatura();

if(!empty($_GET['id'])) {
	$id = $_GET['id'];

  $info = $fatura->getInfo($id);

}
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>:: Atualziar Fatura</title>
  <link href="css/style.default.css" rel="stylesheet">
</head>

<body>
	  <div class="form"> 
	  	<h2>Cadastrar Fatura</h2><br/><br/>
		  <form method="POST">  
		  	  <input type="hidden" name="id" value="<?php echo $info['id'] ?>">

          <label>Código do Cliente: </label>
				  <input type="text" class="form-control"  name="id_cliente" value="<?php echo $info['id_cliente'] ?>" /><br/><br/>   

				  <label>Valor: </label>
				  <input type="text" class="form-control"  name="valor" value="<?php echo $info['valor'] ?>" /><br/><br/>

				  <label>Data: </label>
				  <input type="date" class="form-control"  name="data" value="<?php echo $info['data'] ?>" /><br/><br/>
			   

			    <label>Data Vencimento: </label>
				  <input type="date" class="form-control"  name="data_vencimento" value="<?php echo $info['data_vencimento'] ?>" /><br/><br/>
			    <button class="btn btn-primary" id="salvar">Salvar</button>
			</form>		
		</div>
<?php
	if(!empty($_POST['id_cliente'])) {
	$id_cliente = $_POST['id_cliente'];
	$valor = $_POST['valor'];
	$data = $_POST['data'];
	$data_vencimento = $_POST['data_vencimento'];
	$id = $_POST['id'];

	$fatura->editar( $valor, $data, $data_vencimento, $id_cliente, $id );

	header("Location: listarFatura.php");
}

?>	