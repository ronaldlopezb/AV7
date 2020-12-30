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

	$CodigoCategoria = $_POST["OcultoCodigoCategoria"];


	//Comprobar si la categoria pertenece a este usuario
	$SqlComprobarUsuario = "select * from tabla_blog_categorias where IdCategoria= $CodigoCategoria and CodigoUsuario = $UsuarioCodigo";
	$ResSqlComprobarUsuario = $Conexion->query($SqlComprobarUsuario);
	$TotalCategoria = $ResSqlComprobarUsuario->num_rows;



	if ($TotalCategoria == 0){
		header("Location: ".$RutaServidor."componentes/08-escritorio-blog/index.php?p=listarcategorias");
		exit();
	}



	//Comprobar si la categoría tiene Publiaciones
	$SqlComprobarPublicaciones = "select * from tabla_blog_publicaciones where CodigoCategoria= $CodigoCategoria and CodigoUsuario = $UsuarioCodigo";
	$ResSqlPublicaciones = $Conexion->query($SqlComprobarPublicaciones);
	$TotalPublicaciones = $ResSqlPublicaciones->num_rows;



	if ($TotalPublicaciones == 0){
		$EliminarCategoriaBlog = "delete from tabla_blog_categorias where IdCategoria= $CodigoCategoria";
		mysqli_query($Conexion,$EliminarCategoriaBlog);
		header("Location: ".$RutaServidor."componentes/08-escritorio-blog/index.php?p=listarcategorias&m=3");
		exit();
	}else{
		header("Location: ".$RutaServidor."componentes/08-escritorio-blog/index.php?p=listarcategorias&m=4");
		exit();
	}
?>
