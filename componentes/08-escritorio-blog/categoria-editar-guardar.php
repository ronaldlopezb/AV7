<?php
	// LA SESION DE USUARIO DEBE ESTAR INICIADA PARA PODER VER ESTA PAGINA ////////
	session_start();
	if(!isset($_SESSION['UsuarioLogeado'])) {
		require_once('../../includes/bd/conexion.php');
		header("Location: ".$RutaServidor."componentes/01-index/index.php");
		exit();
	}
	/////////////////////////////////////////////////////////////////////////////

	require_once('../../includes/bd/conexion.php');
	require_once('../../includes/precarga/DatosUsuario.php');
	require_once('datos-escritorio-blog.php');

	$Categoria = $_POST["TxtCategoria"];
	$CodigoCategoria = $_POST["OcultoCodigoCategoria"];


	//Comprobar si la categoria pertenece a este usuario
	$SqlComprobarUsuario = "select * from tabla_blog_categorias where IdCategoria= $CodigoCategoria and CodigoUsuario = $UsuarioCodigo";
	$ResSql = $Conexion->query($SqlComprobarUsuario);
	$TotalCategoria = $ResSql->num_rows;





	if ($TotalCategoria == 0){
		header("Location: ".$RutaServidor."componentes/08-escritorio-blog/index.php?p=listarcategorias");
	}else{

		$ActualizarCategoriaBlog = "update tabla_blog_categorias set Categoria='".$Categoria."' where IdCategoria='".$CodigoCategoria."'";
		mysqli_query($Conexion,$ActualizarCategoriaBlog);
		header("Location: ".$RutaServidor."componentes/08-escritorio-blog/index.php?p=listarcategorias&m=2");
	}
?>
