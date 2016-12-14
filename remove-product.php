<?php  require_once("header.php"); 
require_once("storage.php"); 
require_once("user-logic.php"); 

$id =$_POST['id'];
removeProduto($conexao, $id);
	$_SESSION["success"] = "Produto removido com sucesso.";
	header("location: product-list.php");
	die();
?>

