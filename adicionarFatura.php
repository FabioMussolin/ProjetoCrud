<?php
include 'fatura.class.php';
$fatura = new Fatura();
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>:: Adicionar Fatura</title>
  <link href="css/style.default.css" rel="stylesheet">
</head>

<body>
	  <div class="form"> 
	  	<h2>Cadastrar Fatura</h2><br/><br/>
		  <form method="POST">  
          <label>Código do Cliente: </label>
				  <input type="text" class="form-control"  name="id_cliente" placeholder="Identificação" /><br/><br/>   

				  <label>Data: </label>
				  <input type="date" class="form-control"  name="data" placeholder="data" /><br/><br/>
			   

			    <label>Data Vencimento: </label>
				  <input type="date" class="form-control"  name="data_vencimento" placeholder="data" /><br/><br/>
			    <button class="btn btn-primary" id="salvar">Salvar</button>
			</form>		
		</div>
<?php
  


	if(!empty($_POST['id_cliente'])) {
	$id_cliente = $_POST['id_cliente'];
	$data = $_POST['data'];
	$data_vencimento = $_POST['data_vencimento'];

	$fatura->adicionar($id_cliente, $data, $data_vencimento);

}
?>		

