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

	//Obtener Mensajes
	if (!isset($_GET['m'])){ // isset ve si existe esa variable
		$Mensaje = 0;
	}else{
		$Mensaje = $_GET['m'];
	}


	//Obtener El código de Usuario
	$BlogUsuarioSQL = "select * from tabla_usuario where CorreoElectronico='".$UsuarioEmail."'";
	$BlogUsuarioDatos = $Conexion->query($BlogUsuarioSQL);
	$BlogUsuarioResultado = $BlogUsuarioDatos->fetch_array();

	$CodigoUsuarioBlog = $BlogUsuarioResultado['IdUsuario'];


	//Obtener Datos del Blog
	// Buscar si existe el Blog
	$BlogBlogSQL = "select * from tabla_blog where CodigoUsuario=".$CodigoUsuarioBlog;
	$BlogBlogDatos = $Conexion->query($BlogBlogSQL);
	$TotalBlogEncontrados = $BlogBlogDatos->num_rows;




	if ($TotalBlogEncontrados == 1){
		$BlogBlogResultado = $BlogBlogDatos->fetch_array();
		$BlogActivoEstado = $BlogBlogResultado['BlogActivo'];
		$BlogBanneadoEstado = $BlogBlogResultado['BlogBanneado'];
	}
	//echo 'Total de Blog Encontrados : '.$TotalBlogEncontrados.'<br><br>';
?>
