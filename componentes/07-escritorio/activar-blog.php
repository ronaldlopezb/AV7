<?PHP
	//VERIFICAMOS SI LA SESION ESTA INICIADA O NO
	session_start();
	if(!isset($_SESSION['UsuarioLogeado'])) {
		require_once('../../includes/bd/conexion.php');
		header("Location: ".$RutaServidor."componentes/01-index/index.php");
		exit();
	}
?>

<?php
	require_once('../../includes/bd/conexion.php');
	$UsuarioEmail = $_SESSION['UsuarioLogeado'];
	//echo 'El Correo de sesión es: '.$UsuarioEmail.'<br>';


	//Obtener El código de Usuario
	$BlogUsuarioSQL = "select * from tabla_usuario where CorreoElectronico='".$UsuarioEmail."'";
	$BlogUsuarioDatos = $Conexion->query($BlogUsuarioSQL);
	$BlogUsuarioResultado = $BlogUsuarioDatos->fetch_array();

	$CodigoUsuarioBlog = $BlogUsuarioResultado['IdUsuario'];
	echo 'El codigo de usuario es: '.$CodigoUsuarioBlog.'<br>';


	// Buscar si existe el Blog
	$BlogBlogSQL = "select * from tabla_blog where CodigoUsuario=".$CodigoUsuarioBlog;
	$BlogBlogDatos = $Conexion->query($BlogBlogSQL);
	$TotalBlogEncontrados = $BlogBlogDatos->num_rows;

	echo 'Total de Blog Encontrados : '.$TotalBlogEncontrados.'<br><br>';



	// Si el blog ya existe
	if ($TotalBlogEncontrados == 1){
		//Obtener los datos del blog
		$BlogBlogResultado = $BlogBlogDatos->fetch_array();

		$BlogActivoEstado = $BlogBlogResultado['BlogActivo'];
		$BlogBanneadoEstado = $BlogBlogResultado['BlogBanneado'];

		//Si el blog esta Banneado
		if ($BlogBanneadoEstado == 1){
			header("Location: ".$RutaServidor."componentes/07-escritorio/index.php?m=b3");
			//echo 'El blog fue banneado por un administrador';
			exit();
		}

		//Si el blog ya se encuentra activo y no está banneado
		if ($BlogActivoEstado == 1 and $BlogBanneadoEstado == 0){
			header("Location: ".$RutaServidor."componentes/07-escritorio/index.php");
			//echo 'El Blog ya se encuentra activo';
			exit();
		}

		//Si el blog esta Inactivo por el usuario y no Banneado
		if ($BlogActivoEstado == 0 and $BlogBanneadoEstado == 0){
			// Fue desactivado por el Usuario ----> puede volver a activarlo
			$EstadoActivoBlog = 1;

			//Editar Registro BLOG
			$ActualizarBlog = "update tabla_blog set BlogActivo= $EstadoActivoBlog where CodigoUsuario= $CodigoUsuarioBlog";
			mysqli_query($Conexion,$ActualizarBlog);
			header("Location: ".$RutaServidor."componentes/07-escritorio/index.php?m=b2");
			exit();
		}
	}


	if ($TotalBlogEncontrados == 0){
		//Obtener Variables para Crear Blog
		$BlogPerfilUsuarioSql = "select * from tabla_usuario_perfil where IdUsuario=".$CodigoUsuarioBlog;
		$BlogPerfilUsuarioDatos = $Conexion->query($BlogPerfilUsuarioSql);
		$BlogPerfilUsuarioResultado = $BlogPerfilUsuarioDatos->fetch_array();


		$BlogPerfilNombres = $BlogPerfilUsuarioResultado['Nombres'];
		$BlogPerfilApePaterno = $BlogPerfilUsuarioResultado['ApePaterno'];


		$BlogCodigoUsuario = $CodigoUsuarioBlog;

		$BlogTitulo = "Blog de ".$BlogPerfilNombres." ".$BlogPerfilApePaterno;
		$BlogDescripcion = "En este Blog escribe ".$BlogPerfilNombres." ".$BlogPerfilApePaterno;
		$BlogFoto = 'imagenes/predeterminado/blog.png';

		$BlogFechaCreacion = date("Y-m-d H:m");
		$BlogMeGusta = 0;
		$BlogVotos = 0;

		$BlogPermitirComentarios=1;
		$BlogCantidadListadoFrondend=20;
		$BlogCantidadListadoBackend=20;

		$BlogActivo = 1;
		$BlogBanneado = 0;

		//echo 'Dato: '.$BlogPerfilApePaterno.'<br><br>';

		$SqlCrearBlog = "INSERT INTO tabla_blog (CodigoUsuario,
											BlogTitulo,
											BlogDescripcion,
											BlogFoto,

											BlogFechaCreacion,
											BlogMeGusta,
											BlogVotos,

											BlogPermitirComentarios,
											BlogCantidadListadoFrontend,
											BlogCantidadListadoBackend,

											BlogActivo,
											BlogBanneado)

								VALUES ('".$BlogCodigoUsuario."',
										'".$BlogTitulo."',
										'".$BlogDescripcion."',
										'".$BlogFoto."',

										'".$BlogFechaCreacion."',
										'".$BlogMeGusta."',
										'".$BlogVotos."',

										'".$BlogPermitirComentarios."',
										'".$BlogCantidadListadoFrondend."',
										'".$BlogCantidadListadoBackend."',

										'".$BlogActivo."',
										'".$BlogBanneado."')";

		$result = $Conexion->query($SqlCrearBlog);

		//echo 'El Blog no se encontró y se creará como nuevo';
		header("Location: ".$RutaServidor."componentes/07-escritorio/index.php?m=b1");
	}
?>
