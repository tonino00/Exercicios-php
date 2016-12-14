<?php require_once("header.php"); ?>

	<form action="send-contact.php" method="post">
		<table class="table">
			<tr>
				<td>Nome</td>
				<td><input type="text" name="nome" class="form-control"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" class="form-control"></td>
			</tr>
			<tr>
				<td>Mensagem</td>
				<td><textarea class="form-control" name="mensagem"></textarea></td>
			</tr>
			<tr>
				<td><button class="btn btn-primary">Enviar</button></td>
			</tr>

		</table>
	</form>

<?php require_once("footer.php"); ?>