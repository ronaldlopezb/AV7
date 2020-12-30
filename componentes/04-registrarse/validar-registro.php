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
	//If las variables no existen debe enviar a Registrar
	if (!isset($_POST['TxtEmail'])
		or !isset($_POST['TxtClave01'])
		or !isset($_POST['TxtClave02'])

		or !isset($_POST['TxtNombres'])
		or !isset($_POST['TxtPaterno'])
		or !isset($_POST['TxtMaterno'])
		or !isset($_POST['CboPais'])
		or !isset($_POST['CboSexo'])

		or !isset($_POST['ChkBoletin'])
		or !isset($_POST['ChkTerminos'])

	)
	{
		require_once('../../includes/bd/conexion.php');
		header("Location: ".$RutaServidor."componentes/04-registrarse/index.php");

	}else{

		//Abro la Conexion
		require_once('../../includes/bd/conexion.php');

		//Capturo los Datos Recibidios
		$Email = $_POST["TxtEmail"];
		$Clave01 = $_POST["TxtClave01"];
		$Clave02 = $_POST["TxtClave02"];

		$Nombre = $_POST["TxtNombres"];
		$Paterno = $_POST["TxtPaterno"];
		$Materno = $_POST["TxtMaterno"];
		$Pais = $_POST["CboPais"];
		$Sexo = $_POST["CboSexo"];



		if (isset($_POST['ChkBoletin']) == '1'){ $SuscribirBoletin = 1;}else{$SuscribirBoletin = 0;}
		if (isset($_POST['ChkTerminos']) == '1'){ $AceptoTerminos = 1;}else{$AceptoTerminos = 0;}

		////////////////////////////////////////////////////////////////////////////////////////////////////
		//MOSTRAR LOS DATOS EN PANTALLA

		//echo "<br>Email: ".$Email;
		//echo "<br>Clave01: ".$Clave01;
		//echo "<br>Clave02: ".$Clave02;
		//echo "<br>";
		//echo "<br>Nombres: ".$Nombre;
		//echo "<br>Paterno: ".$Paterno;
		//echo "<br>Materno: ".$Materno;
		//echo "<br>Telefono: ".$Telefono;
		//echo "<br>País: ".$Pais;
		//echo "<br>Sexo: ".$Sexo;
		//echo "<br>";
		//echo "<br>Suscribirse a Boletines: ".$SuscribirBoletin;
		//echo "<br>Acepto Terminos: ".$AceptoTerminos;




		//////////////////////////////////  VALIDACIONES  ////////////////////////////////////////////////////
		//VALIDAR QUE LAS CONTRASEÑAS SEAN IGUALES
		if ($Clave01 != $Clave02){
			header("Location: ".$RutaServidor."componentes/04-registrarse/index.php?error=1"); //Error1 = Claves no concuerdan
			//header("Location: ".$RutaServidor."registrarse.html?error=1"); //Error1= Claves no concuerdan
			exit();
		}


		////VALIDAR QUE EL CORREO NO PERTENESCA A OTRA CUENTA - POO
		$BuscarCorreoSQL = "select CorreoElectronico from tabla_usuario where CorreoElectronico='".$Email."'";
		$ResultadoBuscarCorreoSQL=$Conexion->query($BuscarCorreoSQL);
		$TotalCorreo = $ResultadoBuscarCorreoSQL->num_rows;

		if ($TotalCorreo != 0){
			header("Location: ".$RutaServidor."componentes/04-registrarse/index.php?error=2"); //Error1= Claves no concuerdan
			//header("Location: ".$RutaServidor."registrarse.html?error=2"); //Error1= Claves no concuerdan
			exit();
		}


		//////////////////////////////////  CARGAR LOS DATOS FALTANTES  ////////////////////////////////////////////////////
		//Datos para Tabla Usuario
		$FechaRegistro = date("Y-m-d H:i:s");
		$Ultimavisita="";
		$Bloqueado = 0;
		$CodigoActivacion = sha1(mt_rand().time().mt_rand().$_SERVER['REMOTE_ADDR']);
		$Verificado = 0;
		$AsistentePerfil = 1;
		$IdTipoCuenta=1;
		$CantidadListado = 10;


		//Datos para Tabla Perfil
		if ($Sexo=="Hombre"){
			$FotoUser="imagenes/predeterminado/pred-h.jpg";
		}else{
			$FotoUser="imagenes/predeterminado/pred-m.jpg";
		}

		//echo "<br>Foto: ".$FotoUser;
		//echo "<br>Fecha Registro: ".$FechaRegistro;
		//echo "<br>Bloqueado: ".$Bloqueado;
		//echo "<br>Codigo Activacion: ".$CodigoActivacion;
		//echo "<br>Estado Verificado: ".$Verificado;
		//echo "<br>Asistente Perfil: ".$AsistentePerfil;

		//////////////////////////////////  GUARDAR NUEVO USUARIOS ////////////////////////////////////////////////////
		$InsertarSQL = "INSERT INTO tabla_usuario (FechaRegistro,
												CorreoElectronico,
												Contraseña,

												Bloqueado,
												CodigoActivacion,
												Verificado,

												AsistentePerfil,
												IdTipoCuenta,

												CantidadListado)

										VALUES	('".$FechaRegistro."',

												'".$Email."',
												'".$Clave01."',

												'".$Bloqueado."',
												'".$CodigoActivacion."',
												'".$Verificado."',

												'".$AsistentePerfil."',
												'".$IdTipoCuenta."',

												'".$CantidadListado."')";

		$result=$Conexion->query($InsertarSQL);

		//////////////////////////////////  GUARDAR NUEVO PERFIL ////////////////////////////////////////////////////
		//Obtener el Id del Usuario Creado y Crear Perfil - POO
		$IdUsuarioAgregado = mysqli_insert_id($Conexion);

		$InsertarSqlPerfil = "INSERT INTO tabla_usuario_perfil (IdUsuario,
																Nombres,
																ApePaterno,
																ApeMaterno,

																Pais,
																Sexo,
																Fotografia)

													VALUES ('".$IdUsuarioAgregado."',

															'".$Nombre."',
															'".$Paterno."',
															'".$Materno."',

															'".$Pais."',
															'".$Sexo."',
															'".$FotoUser."')";

		$result=$Conexion->query($InsertarSqlPerfil);

		//////////////////////////////////  CREAR ESTRUCTURA DE CARPETA PARA CADA USUARIOS  ////////////////////// - POO
		$CarpetaUser = $RutaDirectorioServidor .'/imagenes/usuario/'.$IdUsuarioAgregado.'-'.$CodigoActivacion;
		//echo '<br><br>Carpeta Creada de Usuario: '.$CarpetaUser;
		if(!is_dir($CarpetaUser)){
			@mkdir($CarpetaUser, 0755);
		}


		//////////////////////////////////  ENVIAR EMAIL AL USUARIO Y AL ADMIN ///////////////////////////////// - POO
		require_once('registrar-mail-usuario.php');
		require_once('registrar-mail-admin.php');


		//////////////////////////////////  REDIRECCIONAR A PERFIL ////////////////////////////////////////////////////
		header("Location: ".$RutaServidor."componentes/04-registrarse/index.php?m=1"); //Pagina registro_completo_sin_validar.php
		//echo 'Registrado correctamente';
		//exit();
	}
?>
