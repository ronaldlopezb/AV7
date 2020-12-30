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

	//Obtener el Codigo del Blog
	$CodigoBlog = 2;
	$CodigoCategoria = $_POST["LstCategoria"];

	$Titulo = $_POST["TxtTitulo"];
	$Alias = $_POST["TxtAlias"];

	$TextoIntro = $_POST["TxtIntroduccion"];
	$TextoCompleto = $_POST["TxtContenido"];

	$FechaCreacion =  date("Y-m-d H:i:s");
	$TotalVistas = 0;
	$TotalMeGusta = 0;
	$TotalComentarios = 0;
	$TotalVotos = 0;

	$ActivarComentarios = $_POST["LstComentarios"];
	$EstadoPublicacion = $_POST["LstEstado"];

	$MetaKey = $_POST["TxtMetaKeywords"];
	$MetaDescription = $_POST["TxtMetaDescription"];

	$FacebookTitulo = $_POST["TxtFacebookTitulo"];
	$FacebookContenido = $_POST["TxtFacebookDescripcion"];

	$CodigoUsuario = $UsuarioCodigo;


	//Mostrar DATOS
	echo '<br>Codigo del Blog: '.$CodigoBlog;
	echo '<br>Codigo del Categoria: '.$CodigoCategoria;
	echo'<br>';

	echo '<br>Titulo: '.$Titulo;
	echo '<br>Alias: '.$Alias;
	echo'<br>';

	echo '<br>Intro: '.$TextoIntro;
	echo '<br>Contenido: '.$TextoCompleto;
	echo'<br>';

	echo '<br>Fecha: '.$FechaCreacion;
	echo '<br>Visitas: '.$TotalVistas;
	echo '<br>Me Gusta: '.$TotalMeGusta;
	echo '<br>Comentarios: '.$TotalComentarios;
	echo '<br>Votos: '.$TotalVotos;
	echo'<br>';

	echo '<br>Comentario Activo: '.$ActivarComentarios;
	echo '<br>Estado: '.$EstadoPublicacion;
	echo'<br>';

	echo '<br>MetaKey: '.$MetaKey;
	echo '<br>MetaDescription: '.$MetaDescription;
	echo'<br>';

	echo '<br>Face Titulo: '.$FacebookTitulo;
	echo '<br>Face Descripcion: '.$FacebookContenido;
	echo'<br>';

	echo '<br>Usuario: '.$CodigoUsuario;




	//Comprobar si la categoria pertenece a este usuario
//	$SqlComprobarUsuario = "select * from tabla_blog_categorias where IdCategoria= $CodigoCategoria and CodigoUsuario = $UsuarioCodigo";
//	$ResSql = $Conexion->query($SqlComprobarUsuario);
//	$TotalCategoria = $ResSql->num_rows;




//	if ($TotalCategoria == 0){
//		header("Location: ".$RutaServidor."componentes/08-escritorio-blog/index.php?p=listarcategorias");
//	}else{

//		$ActualizarCategoriaBlog = "update tabla_blog_categorias set Categoria='".$Categoria."' where IdCategoria='".$CodigoCategoria."'";
//		mysqli_query($Conexion,$ActualizarCategoriaBlog);
//		header("Location: ".$RutaServidor."componentes/08-escritorio-blog/index.php?p=listarcategorias&m=2");
//	}
?>
