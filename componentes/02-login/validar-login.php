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
	//Recibir las Variables de Usuario y Clave
	require_once('../../includes/bd/conexion.php');

	$Ruta = $RutaServidor;
	$Email = $_POST["TxtMail"];
	$Clave = $_POST["TxtClave"];


	if (!empty($Email) && !empty($Clave)) {
		Login($Email,$Clave,$Ruta);
	}else{
		header("Location: ".$Ruta."componentes/02-login/index.php"); //ingresar.html
	}

	//Crear una Funciona para Validar el Login
	function Login($email,$pass,$server){
		global $Conexion;
		//Realizo la consulta SQL para validar el Login
		$ConsultaSQL = "select * from tabla_usuario where CorreoElectronico='".$email."' and Contraseña='".$pass."' and Verificado=1 and Bloqueado=0";
		$ResultadoLogin=$Conexion->query($ConsultaSQL);
		$TotalRegistrosEncontrados = $ResultadoLogin->num_rows;

		if ($TotalRegistrosEncontrados<>0) //si encontro por lo menos 1 registro
		{
			session_start();
			//Almacenamos el nombre de usuario en una variable de sesión usuario
			$_SESSION['UsuarioLogeado'] = $email; // Será la Variable de Sesión Principal

			//$registro=mysql_fetch_array($ResultadoLogin);
			$registro = $ResultadoLogin->fetch_array();

			//Con esta variable $_SESSION['codigousuariologeado'] podre saber siempre el codigo del usuario logeado
			$_SESSION['codigousuariologeado'] = $registro['iduser'];
			$_SESSION['codigoveriusuariologeado'] = $registro['CodigoActivacion'];

			header("Location: ".$server."componentes/01-index/index.php");
		}else{
			header("Location: ".$server."componentes/02-login/index.php?error=1"); //Muestra Error de mal login
		}
	}
?>
