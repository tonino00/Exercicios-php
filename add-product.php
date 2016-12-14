<?php require_once("header.php");
 	  require_once("storage.php");
 	  require_once("user-logic.php");

	


 	  	verificaUsuario();

		$nome = $_POST['nome'];
		$preco = $_POST['preco'];
		$descricao = $_POST['descricao'];
		$categoria_id = $_POST['categoria_id'];
		if(array_key_exists('usado', $_POST)) {
			$usado = "true";
		} else {
			$usado = "false";
		}



		if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id, $usado)) { ?>
		<p class="text-success">O produto <?= $nome; ?>, <?= $preco; ?> foi adcionado</p>
		<?php } else { 
			$msg = mysqli_error($conexao);
		?>
		<p class="text-danger">O Produto <?= $nome; ?>, <?= $preco; ?>não foi adcionado:<?= $msg?></p>
		<?php
	}

	?>


<?php include("footer.php");?>
