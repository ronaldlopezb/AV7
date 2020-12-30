<?PHP
	//VERIFICAMOS SI LA SESION ESTA INICIADA O NO
	//session_start();
	require_once('includes/bd/conexion.php');
	

	//header("Location: ".$RutaServidor."componentes/01-index/index.php"); //Ruta Normal
	//header("Location: ".$RutaServidor."componentes/02-login/index.php"); //Ruta Normal
	header("Location: ".$RutaServidor."index.html"); //Ruta HtAccess

	//exit();

?>