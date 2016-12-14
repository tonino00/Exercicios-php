<?php  require_once("header.php"); 
require_once("storage.php"); 
require_once("view-alert.php");
 require_once("user-logic.php");
 ?>

<?php alertaMsg("success"); ?>

	<?php verificaUsuario(); ?>

<table class="table table-striped table-bordered">
	
	<?php  
	$produtos = listaProdutos($conexao);
	foreach ($produtos as $produto) :
		?>
		
		<tr>
			<td><?=$produto['nome']?></td>
			<td><?=$produto['preco']?></td>
			<td><?= substr($produto['descricao'],0, 40)?></td>
			<td><?=$produto['categoria_nome']?></td>
			<td><a class="btn btn-primary" href="product-alter-form.php?id=<?=$produto['id']?>">Alterar</a></td>
			<td>
					<form action="remove-product.php" method="post">
						<input type="hidden" name="id" value="<?=$produto['id']?>">
						<button class="btn btn-danger">remover</button>
					</form>
			</td>
		</tr>

		<?php  
		endforeach
	?>

</table>

<?php include("footer.php");?>