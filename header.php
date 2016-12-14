<?php 
error_reporting(E_ALL ^ E_NOTICE);
require_once("view-alert.php"); ?>

<html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="content-language" content="pt-br">
	<title>Minha loja</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/loja.css">

</head>
<body>
	
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">To' Apps</a>
			</div>
			<div class="menu">
				<ul class="nav navbar-nav">
					<li><a href="product-form.php">Adcionar novo produto</a></li>
					<li><a href="product-list.php">Produtos</a></li>
					<li><a href="contato.php">Contato</a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="principal">