<?PHP
	//VERIFICAMOS SI LA SESION ESTA INICIADA O NO
	session_start();
	if(isset($_SESSION['UsuarioLogeado']))
	{
	require_once('../../includes/bd/conexion.php');
	header("Location: ".$RutaServidor."componentes/01-index/index.php");
	exit();
	}
?>
<?php
	//Base de Datos
	require_once('../../includes/bd/conexion.php');
?>
<?php
	//Verificar si existe la Variable de code
	if (!isset($_GET['code'])){
		$code = 0;
	}else{
		$code = $_GET['code'];
	}

	//echo 'Codigo: '.$code;
	$ConsultarCode = "select * from tabla_usuario where CodigoActivacion='".$code."' and Verificado=0 ";
	$ResultadoCode=$Conexion->query($ConsultarCode);
	$Total = $ResultadoCode->num_rows;
	$registro = $ResultadoCode->fetch_array();


	$EstadoBloqueado = $registro['Bloqueado'];
	$EstadoVerificado = $registro['Verificado'];
	$CorreoElec = $registro['CorreoElectronico'];

	//echo '<br>Mail: '.$CorreoElec;
	//echo '<br>Bloqueado: '.$EstadoBloqueado;
	//echo '<br>verificado: '.$EstadoVerificado;




	//No se encontró el Correo
	//Comprobar Bloqueado
	if ($Total == 0) //Si esta Bloqueado
	{
		header("Location: ".$RutaServidor."componentes/05-activar-cuenta/index.php?error=4");
		exit();
	}


	//Comprobar Bloqueado
	if ($EstadoBloqueado == 1) //Si esta Bloqueado
	{
		header("Location: ".$RutaServidor."componentes/05-activar-cuenta/index.php?error=2");
		exit();
	}

	//Comprobar Verificado
	if ($EstadoVerificado == 1) //si no esta verificado
	{
		header("Location: ".$RutaServidor."componentes/05-activar-cuenta/index.php?error=3");
		exit();
	}




	//Cambair y enviar contraseña

	if ($Total>0 and $EstadoVerificado == 0) //si encontro por lo menos 1 registro
	{
		//echo '<br><br>la cuenta fue verificada';

		//Guardar la Nueva Contraseña
		mysqli_query($Conexion,"UPDATE tabla_usuario set Verificado= 1 where CorreoElectronico='".$CorreoElec."'");


		//Enviar NUEVA CONTRASEÑA POR EMAIL
		$asunto = "AprendeViendo - Cuenta Activada";
		$cuerpo = '
		<html>
		<head>
		<title>Tu Cuenta fue Activada Correctamente</title>
		</head>
		<body>
		<h2>Puedes ingresar iniciando sesión desde este enlace!</h2>

		<p>
			<a href="'.$RutaServidor.'componentes/02-login/index.php" target="_blank">Iniciar Sesión</a>
			<br><br>
		</p>
		<br><br>
		Aprende Viendo - Enseñanza Virtual Gratuita
		</body>
		</html>
		';

		//para el envío en formato HTML
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=utf-8\r\n";

		//dirección del remitente
		$headers .= "From: Cuenta Activada - AprendeViendo <info@aprende-viendo.com>\r\n";

		//dirección de respuesta, si queremos que sea distinta que la del remitente
		$headers .= "Reply-To: info@aprende-viendo.com\r\n";

		//ruta del mensaje desde origen a destino
		$headers .= "Return-path: info@aprende-viendo.com\r\n";

		mail($CorreoElec,$asunto,$cuerpo,$headers) ;
		//echo '<br><br><br>Llego al final: Encontró el correo y envió la contraseña';
		header("Location: ".$RutaServidor."componentes/05-activar-cuenta/index.php?m=2");
	}
?>
