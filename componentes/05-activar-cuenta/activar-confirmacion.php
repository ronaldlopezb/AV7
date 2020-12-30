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
	<div class="panel panel-body">
		<div class="text-center">
			<div class="icon-object border-success text-success "><i class="icon-checkmark4"></i></div>
			<h5 class="content-group">Su Cuenta fue Activada Correctamente </h5>
		</div>

		<div class="form-group">
			<a href="<?php echo $RutaServidor.'componentes/02-login/index.php' ?>" class="btn bg-success btn-block">Iniciar Sesión<i class="icon-circle-right2 position-right"></i></a>
		</div>
	</div>
</div>
