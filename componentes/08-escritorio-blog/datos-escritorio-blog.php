<?php
	// LA SESION DE USUARIO DEBE ESTAR INICIADA PARA PODER VER ESTA PAGINA ////////
	session_start();
	if(!isset($_SESSION['UsuarioLogeado'])) {
		require_once('../../includes/bd/conexion.php');
		header("Location: ".$RutaServidor."componentes/01-index/index.php");
		exit();
	}
	/////////////////////////////////////////////////////////////////////////////


	//Base de Datos
	require_once('../../includes/bd/conexion.php');
	//Template
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
	require_once('../../includes/precarga/DatosUsuario.php');  //Usuario Logeado
	require_once('../../includes/precarga/Configuracion.php');  //Configuracion de Sitio

	//Obtener el Codigo de la Página a mostrar
	if (!isset($_GET['p'])){ // isset ve si existe esa variable
		$MostrarPagina = 0;
	}else{
		$MostrarPagina = $_GET['p'];
	}

	//Obtener el Mensaje de Editado
	if (isset($_GET['m'])){
		$mensaje = $_GET['m'];
	}


	//Obtener El código de Usuario
	$BlogUsuarioSQL = "select * from tabla_usuario where CorreoElectronico='".$UsuarioEmail."'";
	$BlogUsuarioDatos = $Conexion->query($BlogUsuarioSQL);
	$BlogUsuarioResultado = $BlogUsuarioDatos->fetch_array();

	$CodigoUsuarioBlog = $BlogUsuarioResultado['IdUsuario'];

	// Buscar si existe el Blog
	$BlogBlogSQL = "select * from tabla_blog where CodigoUsuario=".$CodigoUsuarioBlog;
	$BlogBlogDatos=$Conexion->query($BlogBlogSQL);
	$TotalBlogEncontrados = $BlogBlogDatos->num_rows;
	//echo 'Total de Blog Encontrados : '.$TotalBlogEncontrados.'<br><br>';




	// Si el blog ya existe
	if ($TotalBlogEncontrados == 1){
		//Obtener los datos del blog
		$BlogBlogResultado = $BlogBlogDatos->fetch_array();

		$BlogCodigo = $BlogBlogResultado['IdBlog'];
		$BlogActivoEstado = $BlogBlogResultado['BlogActivo'];
		$BlogBanneadoEstado = $BlogBlogResultado['BlogBanneado'];

		//Si el blog esta Banneado
		if ($BlogBanneadoEstado == 1){
			header("Location: ".$RutaServidor."componentes/07-escritorio/index.php?m=b3");
			//echo 'El blog fue banneado por un administrador';
			exit();
		}

		//Si el blog esta Inactivo por el usuario y no Banneado
		if ($BlogActivoEstado == 0 and $BlogBanneadoEstado == 0){
			// Fue desactivado por el Usuario ----> puede volver a activarlo
			header("Location: ".$RutaServidor."componentes/07-escritorio/index.php");
			echo 'Despoublicado por el usuario';
			exit();
		}
	}


	if ($TotalBlogEncontrados == 0){
		header("Location: ".$RutaServidor."componentes/07-escritorio/index.php");
		exit();
	}
?>
