<?php
	// LA SESION DE USUARIO DEBE ESTAR INICIADA PARA PODER VER ESTA PAGINA ////////
	session_start();
	if(!isset($_SESSION['UsuarioLogeado'])){
		require_once('../../includes/bd/conexion.php');
		header("Location: ".$RutaServidor."componentes/01-index/index.php");
		exit();
	}
	/////////////////////////////////////////////////////////////////////////////

	require_once('../../includes/bd/conexion.php');
	require_once('../../includes/precarga/DatosUsuario.php');
	require_once('datos-escritorio-blog.php');

	$Categoria = $_POST["TxtCategoria"];

	$InsertarSqlCategoria = "INSERT INTO tabla_blog_categorias (Categoria, CodigoBlog, CodigoUsuario) VALUES ('".$Categoria."', '".$BlogCodigo."', '".$UsuarioCodigo."')";
	$result = $Conexion->query($InsertarSqlCategoria);

	//Enviar a Lista de Categorias
	header("Location: ".$RutaServidor."componentes/08-escritorio-blog/index.php?p=listarcategorias&m=1");
?>
