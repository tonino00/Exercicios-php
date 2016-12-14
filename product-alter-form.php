<?php require_once("header.php");
require_once("storage-category.php");
require_once("storage.php");

$id = $_GET['id'];
$produto = buscaProduto($conexao, $id);
$categorias = listaCategorias($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";
?>
<div class="col-sm-6 col-sm-offset-3">
	<h1>Alterar produto</h1>
	<form action="alter-product.php" method="post">
			<input type="hidden" name="id" value="<?=$produto['id']?>">
		<table class="table">
			<?php include("product-form-base.php"); ?>
		</table>
		<input class="btn btn-primary" type="submit" value="Alterar">
	</form>
</div>

<?php include("footer.php");?>