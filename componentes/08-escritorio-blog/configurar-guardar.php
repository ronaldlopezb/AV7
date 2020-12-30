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

	$BlogTitulo = $_POST["TxtBlogNombre"];
	$BlogDescripcion = $_POST["TxtBlogDescripcion"];
	$BlogComentarios = $_POST["LstBlogComentarios"];
	$BlogCantidadFrontend = $_POST["LstBlogCantidadFrontend"];
	$BlogCantidadBackend = $_POST["LstBlogCantidadBackend"];
	$BlogActivo = $_POST["LstBlogActivo"];

	//echo '<br>Titulo: '.$BlogTitulo;
	//echo '<br>BlogDescripcion: '.$BlogDescripcion;
	//echo '<br>BlogComentarios: '.$BlogComentarios;
	//echo '<br>BlogCantidadFrontend: '.$BlogCantidadFrontend;
	//echo '<br>BlogCantidadBackend: '.$BlogCantidadBackend;
	//echo '<br>BlogActivo: '.$BlogActivo;

	//echo '<br>Codigo Usuario: '.$UsuarioCodigo;

	//Comprobar si el Blog pertenece a este usuario
	$SqlConfigurarBlog = "select * from tabla_blog where CodigoUsuario= $UsuarioCodigo";
	$ResConfigurarBlog = $Conexion->query($SqlConfigurarBlog);
	$TotalBlogConfi = $ResConfigurarBlog->num_rows;





	if ($TotalBlogConfi == 0){
		header("Location: ".$RutaServidor."componentes/08-escritorio-blog/index.php?p=listarpublicaciones");
	}else{
		//$ActualizarBlogConfi = "update tabla_blog_categorias set Categoria='".$Categoria."' where IdCategoria='".$CodigoCategoria."'";

		$ActualizarBlogConfi = "update tabla_blog set BlogTitulo= '$BlogTitulo',
												BlogDescripcion= '$BlogDescripcion',
												BlogPermitirComentarios= '$BlogComentarios',
												BlogCantidadListadoFrontend= '$BlogCantidadFrontend',
												BlogCantidadListadoBackend= '$BlogCantidadBackend',
												BlogActivo= '$BlogActivo'
									where CodigoUsuario= $UsuarioCodigo";

		mysqli_query($Conexion,$ActualizarBlogConfi);
		header("Location: ".$RutaServidor."componentes/08-escritorio-blog/index.php?p=listarpublicaciones&m=4");
	}
?>
