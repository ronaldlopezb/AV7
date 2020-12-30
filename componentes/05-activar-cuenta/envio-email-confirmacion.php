<?php
	//VERIFICAMOS SI LA SESION ESTA INICIADA O NO
	if(isset($_SESSION['UsuarioLogeado']))
	{
	require_once('../../includes/bd/conexion.php');
	header("Location: ".$RutaServidor."componentes/01-index/index.php");
	exit();
	}
?>

<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
	<!-- Simple login form -->
	<div class="panel panel-body">
		<div class="text-center">
			<div class="icon-object border-success text-success "><i class="icon-lock"></i></div>
			<h5 class="content-group">Se envió un Email de activación a su correo electrónico </h5>
			<p>Ingrese a su correo electrónico y active su cuenta.</p>
		</div>
	</div>
</div>
