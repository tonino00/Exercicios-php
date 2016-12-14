<?php require_once("header.php");
require_once("storage-category.php");
require_once("user-logic.php");

verificaUsuario();
$produto = array("nome" => "", "descricao" => "", "preco" => "", "categoria_id" => "1");
$usado = "";
$categorias = listaCategorias($conexao);
?>
<div class="col-sm-6 col-sm-offset-3">
	<h1>Formulário de produto</h1>
	<form action="add-product.php" method="post">
			<table class="table">

				<?php include("product-form-base.php"); ?>

			</table>
			<input class="btn btn-primary" type="submit" value="Cadastrar">
		</form>
</div>

<?php include("footer.php");?>