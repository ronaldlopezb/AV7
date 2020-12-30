<?php
	//VERIFICAMOS SI LA SESION ESTA INICIADA O NO
	if(isset($_SESSION['UsuarioLogeado']))
	{
	require_once('../../includes/bd/conexion.php');
	header("Location: ".$RutaServidor."componentes/01-index/index.php");
	exit();
	}

	//////////////////////////////////////////////////////////////////////////////////////
	//Traer Errores
	if (!isset($_GET['error'])){ // isset ve si existe esa variable
		$ErrorEstado = 0;
	}else{
		$ErrorEstado = $_GET['error'];
	}
?>

<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">

	<?php
		//No se encontró el correo
		if ($ErrorEstado==1){
			echo '<div class="alert alert-warning alert-styled-left">';
				echo '<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>';
				echo '<span class="text-semibold">Credenciales Incorrectas!</span> <br>No se encontró ninguna cuenta asociada a ese correo electrónico.';
		    echo '</div>';
		}

		//Cuenta Bloqueada
		if ($ErrorEstado==2){
			echo '<div class="alert alert-danger alert-styled-left alert-bordered">';
				echo '<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>';
				echo '<span class="text-semibold">Cuenta Banneada!</span> <br>Esta cuenta fue bloqueada por un administrador.';
		    echo '</div>';
		}

		//Cuenta no Verificada
		if ($ErrorEstado==3){
			echo '<div class="alert alert-info alert-styled-left alert-bordered">';
				echo '<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>';
				echo '<span class="text-semibold">Cuenta ya se encuentra verificada!</span>';
		    echo '</div>';
		}


		//Codigo de verificacion incorrecto
		if ($ErrorEstado==4){
			echo '<div class="alert alert-danger alert-styled-left alert-bordered">';
				echo '<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>';
				echo '<span class="text-semibold">Código de Activación incorrecto!</span>.';
		    echo '</div>';
		}
	?>


	<!-- Simple login form -->
	<form class="login-form" action="activar-cuenta-email.php" method="post">
		<div class="panel panel-body">
			<div class="text-center">
				<div class="icon-object border-warning text-warning "><i class="icon-user-lock"></i></div>
				<h5 class="content-group">Activar Cuenta de Usuario <small class="display-block">Ingrese Correo Electrónico de su Cuenta</small></h5>
			</div>

			<div class="form-group has-feedback has-feedback-left">
				<input type="email" class="form-control required" placeholder="Correo Electrónico" name="TxtMail" required="true">
				<div class="form-control-feedback">
					<i class="icon-user text-muted"></i>
				</div>
			</div>

			<div class="form-group">
				<button type="submit" class="btn bg-warning btn-block">Activar Cuenta <i class="icon-circle-right2 position-right"></i></button>
			</div>

			<div class="text-center">
				<a href="../04-registrarse/index.php">Crear Cuenta de Usuario</a>
			</div>
		</div>
	</form>
</div>
