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
	//Verificar si existe la Variable de Email
	if (!isset($_POST['TxtMail'])){
		$Correo = 0;
	}else{
		$Correo = $_POST['TxtMail'];
	}


	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//Validar si existe una cuenta con este correo
	$ConsultaSQL = "select * from tabla_usuario where CorreoElectronico='".$Correo."'";
	$ResultadoEmail=$Conexion->query($ConsultaSQL);
	$Total = $ResultadoEmail->num_rows;
	$registro = $ResultadoEmail->fetch_array();


	$EstadoBloqueado = $registro['Bloqueado'];
	$EstadoVerificado = $registro['Verificado'];
	$CorreoElec = $registro['CorreoElectronico'];
	$CodigoActivacion = $registro['CodigoActivacion'];


	//echo '<br>Mail: '.$CorreoElec;
	//echo '<br>Bloqueado: '.$EstadoBloqueado;
	//echo '<br>verificado: '.$EstadoVerificado;




	//No se encontró el Correo
	//Comprobar Bloqueado
	if ($Total == 0) //Si esta Bloqueado
	{
		header("Location: ".$RutaServidor."componentes/05-activar-cuenta/index.php?error=1");
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




	//enviar correo electrónico para verificar cuenta

	if ($Total>0 and $EstadoVerificado == 0) //si encontro por lo menos 1 registro
	{



		//Enviar NUEVA CONTRASEÑA POR EMAIL
		$asunto = "AprendeViendo - Activar Cuenta";
		$cuerpo = '
		<html>
		<head>
		<title>Solicitaste activar tu cuenta en AprendeViendo</title>
		</head>
		<body>
		<h2>Para activar tu cuenta da click en el siguiente enlace!</h2>

		<p>
			<a href="'.$RutaServidor.'componentes/05-activar-cuenta/activar-cuenta.php?code='.$CodigoActivacion.'" target="_blank">Activar Cuenta</a>
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
		$headers .= "From: Activar Cuenta - AprendeViendo <info@aprende-viendo.com>\r\n";

		//dirección de respuesta, si queremos que sea distinta que la del remitente
		$headers .= "Reply-To: info@aprende-viendo.com\r\n";

		//ruta del mensaje desde origen a destino
		$headers .= "Return-path: info@aprende-viendo.com\r\n";

		mail($Correo,$asunto,$cuerpo,$headers) ;
		//echo '<br><br><br>Llego al final: Encontró el correo y envió correo para activar cuenta';
		header("Location: ".$RutaServidor."componentes/05-activar-cuenta/index.php?m=1");
	}
?>
