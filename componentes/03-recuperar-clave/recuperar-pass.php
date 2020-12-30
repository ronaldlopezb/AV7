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
	$ResultadoEmail = mysql_query($ConsultaSQL);
	$Total = mysql_num_rows($ResultadoEmail); //Averiguar si encontro registro



	$ConsultaSQL = "select * from tabla_usuario where CorreoElectronico='".$Correo."'";
	$ResultadoEmail=$Conexion->query($ConsultaSQL);
	$Total = $ResultadoEmail->num_rows;

	$registro = $ResultadoEmail->fetch_array();

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
		header("Location: ".$RutaServidor."componentes/03-recuperar-clave/index.php?error=1");
		exit();
	}


	//Comprobar Bloqueado
	if ($EstadoBloqueado == 1) //Si esta Bloqueado
	{
		header("Location: ".$RutaServidor."componentes/03-recuperar-clave/index.php?error=2");
		exit();
	}

	//Comprobar Verificado
	if ($EstadoVerificado == 0) //si no esta verificado
	{
		header("Location: ".$RutaServidor."componentes/03-recuperar-clave/index.php?error=3");
		exit();
	}




	//Cambair y enviar contraseña

	if ($Total>0) //si encontro por lo menos 1 registro
	{
		//Generar nueva contraseña
		$str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
		$NuevaClave = "";
		for($i=0;$i<12;$i++) {
		$NuevaClave .= substr($str,rand(0,62),1);}

		//Guardar la Nueva Contraseña
		mysqli_query($Conexion, "UPDATE tabla_usuario set Contraseña='".$NuevaClave."' where CorreoElectronico='".$Correo."'");


		//Enviar NUEVA CONTRASEÑA POR EMAIL
		$asunto = "AprendeViendo - Nueva Contraseña";
		$cuerpo = '
		<html>
		<head>
		<title>Nueva Contraseña Generada</title>
		</head>
		<body>
		<h2>Solicitaste una nueva contraseña para tu cuenta!</h2>

		<p>
			Tu nueva contraseña es: '.$NuevaClave.'
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
		$headers .= "From: AprendeViendo <info@aprende-viendo.com>\r\n";

		//dirección de respuesta, si queremos que sea distinta que la del remitente
		$headers .= "Reply-To: info@aprende-viendo.com\r\n";

		//ruta del mensaje desde origen a destino
		$headers .= "Return-path: info@aprende-viendo.com\r\n";

		mail($Correo,$asunto,$cuerpo,$headers) ;
		//echo '<br><br><br>Llego al final: Encontró el correo y envió la contraseña';
		header("Location: ".$RutaServidor."componentes/03-recuperar-clave/index.php?m=1");
	}
?>
