<?php require_once("user-logic.php");
logout();
$_SESSION["success"] = "Deslogado com sucesso.";
header("location: index.php");
die();