<?php require_once("header.php");
require_once("user-logic.php");
?>
	

	 <?php 

	 	alertaMsg("success");
	 	alertaMsg("danger");

	  ?>
		
		<h1>Bem vindo a To'Apps</h1>

	<?php if(usuarioEstalogado()) {?>
		<p class="text-success">Você está logado como 
		<?= usuarioLogado()?>. <a href="logout.php">Deslogar</a></p>
			<?php } else {?>
			<div class="container">
				<div class="row">
					<div class=" login col-xs-6 col-sm-offset-3">
						<div class="panel panel-default">
							<div class="panel-heading"><h2>Minha conta</h2></div>
							<div class="panel-body">
								<form action="login.php" method="post">
								<div class="form-group">
									<label class="sr-only" for="text">Email</label>
									<input type="email" class="form-control" name="email" placeholder="Seu Email">
								</div>
								<div class="form-group">
									<label class="sr-only" for="text">Senha</label>
									<input type="password" class="form-control" name="senha" placeholder="Digite sua senha">
								</div>
										<button type="submit" class="btn btn-primary">Login</button>			
								</form>
							<?php }?>	
							</div>
						</div>
					</div>
				</div>
			</div>

<?php include("footer.php");?>