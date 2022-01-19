<?php
include 'cliente.class.php';
$cliente = new Cliente();
?>

<h1>Lista de Clientes</h1>

<table border="1" width="600">
	<tr>
		<th>ID</th>
		<th>Nome</th>
		<th>E-mail</th>
		<th>Alterar</th>
	</tr>	

	<?php
	$lista = $cliente->getAll();
	foreach ($lista as $item):
	?>
	
	<tr>
	     <td><?php echo $item['id'];?></td>
	     <td><?php echo $item['nome'];?></td>
	     <td><?php echo $item['email'];?></td>
	     <td>
              <a href="editar.php?id=<?php echo $item['id'];?>">[ Editar ]</a>
              <a href="excluir.php?id=<?php echo $item['id'];?>">[ Excluir ]</a>
	     </td>
	 </tr>
	 <?php endforeach; ?>

	 </table>    	