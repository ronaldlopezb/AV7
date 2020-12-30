<?php
	session_start();
	unset($_SESSION['UsuarioLogeado']);

	//Redireccionar a login.php
	require_once('../../includes/bd/conexion.php');
	//header("Location: ".$RutaServidor."componentes/02-login/index.php");
	header("Location: ".$RutaServidor."componentes/02-login/index.php");
?>
