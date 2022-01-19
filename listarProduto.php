<?php
include 'produto.class.php';
$produto = new Produto();
?>

<h1>Lista de Produtos</h1>

<table border="1" width="600">
	<tr>
		<th>ID</th>
		<th>Produto</th>
		<th>Valor R$</th>
		<th>Alterar</th>
	</tr>	

	<?php
	$lista = $produto->getAll();
	foreach ($lista as $item):
	?>
	
	<tr>
	     <td><?php echo $item['id'];?></td>
	     <td><?php echo $item['produto'];?></td>
	     <td><?php echo $item['valor'];?></td>
	     <td>
              <a href="editarProduto.php?id=<?php echo $item['id'];?>">[ Editar ]</a>
              <a href="excluirProduto.php?id=<?php echo $item['id'];?>">[ Excluir ]</a>
	     </td>
	 </tr>
	 <?php endforeach; ?>
</table>    	