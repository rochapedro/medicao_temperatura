<?php
session_start(); //Iniciando a sessão

if(!isset($_SESSION["id_usuario"]) || !isset($_SESSION["usuario"])){

 			header('Location: ../login.php');
}else{

	$idUsuario = $_SESSION["id_usuario"]; 
	$usuario   = $_SESSION["usuario"];
	$perm	   = $_SESSION["is_admin"];
	$foto      = $_SESSION["foto"];
}

?>