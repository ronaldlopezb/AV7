<?php
	if(isset($_SESSION['UsuarioLogeado'])) {
		//El Usuario esta Logeado

		//Abrir BD y Obtener El Código del Usuario
		require_once('../../includes/bd/conexion.php');

		$UsuarioEmail = $_SESSION['UsuarioLogeado'];

		//Buscar al Usuario para obtener su configuracion - POO
		$SqlUsuario = "select * from tabla_usuario where CorreoElectronico='".$UsuarioEmail."'";
		$DatosUsuario=$Conexion->query($SqlUsuario);
		$RegistroUsuario = $DatosUsuario->fetch_array();


		$UsuarioCodigo = $RegistroUsuario['IdUsuario'];
		$UsuarioFechaRegistro = date("d-m-Y", strtotime($RegistroUsuario['FechaRegistro']));
		$UsuarioUltimaVisita = $RegistroUsuario['UltimaVisita'];
		$UsuarioBloqueado = $RegistroUsuario['Bloqueado'];
		$UsuarioCodigoActivacion = $RegistroUsuario['CodigoActivacion'];
		$UsuarioVerificado = $RegistroUsuario['Verificado'];
		$UsuarioAsistentePerfil = $RegistroUsuario['AsistentePerfil'];
		$UsuarioTipoCuenta = $RegistroUsuario['IdTipoCuenta'];
		$UsuarioCantidadListado = $RegistroUsuario['CantidadListado'];


		//echo '<br>Id Usuario: '.$UsuarioCodigo;
		//echo '<br>Fecha de Registro: '.$UsuarioFechaRegistro;
		//echo '<br>Última visita: '.$UsuarioUltimaVisita;
		//echo '<br>Bloqueado: '.$UsuarioBloqueado;
		//echo '<br>Activación: '.$UsuarioCodigoActivacion;
		//echo '<br>Verificado: '.$UsuarioVerificado;
		//echo '<br>Asistente: '.$UsuarioAsistentePerfil;
		//echo '<br>Cuenta: '.$UsuarioTipoCuenta;
		//echo '<br>Cantidad Listado: '.$UsuarioCantidadListado;



		// Buscar Perfil de Usuario
		//$SqlPerfil = "select * from tabla_usuario_perfil where IdUsuario='".$UsuarioCodigo."'";
		//$DatosPerfil = mysql_query($SqlPerfil);
		//$RegistroPerfil = mysql_fetch_array($DatosPerfil);


		$SqlPerfil = "select * from tabla_usuario_perfil where IdUsuario='".$UsuarioCodigo."'";
		$DatosPerfil=$Conexion->query($SqlPerfil);
		$RegistroPerfil = $DatosPerfil->fetch_array();



		$PerfilNombre = $RegistroPerfil['Nombres'];
		$PerfilApePaterno = $RegistroPerfil['ApePaterno'];
		$PerfilApeMaterno = $RegistroPerfil['ApeMaterno'];

		$PerfilPais = $RegistroPerfil['Pais'];
		$PerfilLocalidad = $RegistroPerfil['Localidad'];
		$PerfilTelefono = $RegistroPerfil['Telefono'];

		$PerfilSexo = $RegistroPerfil['Sexo'];
		$PerfilFechaNacimiento = date("d-m-Y", strtotime($RegistroPerfil['FechaNacimiento']));
		$PerfilBiografia = $RegistroPerfil['Biografia'];

		$PerfilFacebook = $RegistroPerfil['Facebook'];
		$PerfilTwitter = $RegistroPerfil['Twitter'];
		$PerfilYoutube = $RegistroPerfil['Youtube'];
		$PerfilLinkedin = $RegistroPerfil['Linkedin'];

		$PerfilFotografia = $RegistroPerfil['Fotografia'];

		$PerfilProfesion = $RegistroPerfil['Profesion'];


		//echo '<br>Nombre: '.$PerfilNombre;
		//echo '<br>Apellido Paterno: '.$PerfilApePaterno;
		//echo '<br>Apellido Materno: '.$PerfilApeMaterno;

		//echo '<br>País: '.$PerfilPais;
		//echo '<br>Localidad: '.$PerfilLocalidad;
		//echo '<br>Teléfono: '.$PerfilTelefono;

		//echo '<br>Sexo: '.$PerfilSexo;
		//echo '<br>Fecha Nacimiento: '.$PerfilFechaNacimiento;
		//echo '<br>Biografia: '.$PerfilBiografia;

		//echo '<br>Facebook: '.$PerfilFacebook;
		//echo '<br>Twitter: '.$PerfilTwitter;
		//echo '<br>Youtube: '.$PerfilYoutube;
		//echo '<br>Linkedin: '.$PerfilLinkedin;
	}
?>
