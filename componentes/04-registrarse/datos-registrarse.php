<?php
	//VERIFICAMOS SI LA SESION ESTA INICIADA O NO
	session_start();
	if(isset($_SESSION['UsuarioLogeado']))
	{
	require_once('../../includes/bd/conexion.php');
	header("Location: ".$RutaServidor."componentes/01-index/index.php");
	exit();
	}

	//Base de Datos
	require_once('../../includes/bd/conexion.php');

	require_once('../../template/head.php');
	require_once('../../template/logo.php');
	require_once('../../template/user-actividades.php');
	require_once('../../template/user-mensajes.php');
	require_once('../../template/user-usuario.php');

	require_once('../../template/rutas.php');
	require_once('../../template/menu-principal-contenedor.php');
	require_once('../../template/menu-flotante.php');

	require_once('../../template/pie.php');

	//Cargar Datos Precargados
	require_once('../../includes/precarga/Configuracion.php');  //Configuracion de Sitio


	//Obtener Mensaje ---> Para mostrar confirmación
	if (!isset($_GET['m'])){ // isset ve si existe esa variable
		$Mensaje = 0;
	}else{
		$Mensaje = $_GET['m'];
	}

	//Obtener Errores --->
	if (!isset($_GET['error'])){ // isset ve si existe esa variable
		$ErrorNumero = 0;
	}else{
		$ErrorNumero = $_GET['error'];
	}
?>
