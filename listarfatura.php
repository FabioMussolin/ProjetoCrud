<?php
include 'fatura.class.php';
$fatura = new Fatura();
?>

<h1>Lista de Faturas</h1>

<table border="1" width="600">
	<tr>
		<th>ID</th>
		<th>Cliente</th>
		<th>valor</th>
		<th>Data</th>
		<th>Data Vencimento</th>
		<th>Alterar</th>
	</tr>	

	<?php
	$lista = $fatura->getAll();
	foreach ($lista as $item):
	?>
	
	<tr>
	     <td><?php echo $item['id'];?></td>
	     <td><?php echo $item['id_cliente'];?></td>
	     <td><?php echo $item['valor'];?></td>
	     <td><?php echo $item['data'];?></td>
	     <td><?php echo $item['data_vencimento'];?></td>
	     <td>
              <a href="editarFatura.php?id=<?php echo $item['id'];?>">[ Editar ]</a>
              <a href="excluirFatura.php?id=<?php echo $item['id'];?>">[ Excluir ]</a>
	     </td>
	 </tr>
	 <?php endforeach; ?>

	 </table>    	