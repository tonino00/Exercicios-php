<?php require_once("header.php"); 
 	  require_once("storage.php");
	


 	  	$id = $_POST['id'];
		$nome = $_POST['nome'];
		$preco = $_POST['preco'];
		$descricao = $_POST['descricao'];
		$categoria_id = $_POST['categoria_id'];
		if(array_key_exists('usado', $_POST)) {
			$usado = "true";
		} else {
			$usado = "false";
		}


		if(alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id, $usado)) { ?>
		<p class="text-success">O produto <?= $nome; ?>, <?= $preco; ?> foi alterado</p>
		<?php } else { 
			$msg = mysqli_error($conexao);
		?>
		<p class="text-danger">O Produto <?= $nome; ?>, <?= $preco; ?>não foi alterado:<?= $msg?></p>
		<?php
	}

	?>


<?php include("footer.php");?>
