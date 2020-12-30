<?php
	//VERIFICAMOS SI LA SESION ESTA INICIADA O NO
	//session_start();
	if(isset($_SESSION['UsuarioLogeado'])) {
		require_once('../../includes/bd/conexion.php');
		header("Location: ".$RutaServidor."componentes/01-index/index.php");
		exit();
	}


	//////////////////////////////////////////////////////////////////////////////////////
	//TRAER ERROR
	if (!isset($_GET['error'])){ // isset ve si existe esa variable
		$ErrorEstado = 0;
	}else{
		$ErrorEstado = $_GET['error'];
	}
?>




<!-- Formulario de 3 Columnas -->
<div class="col-lg-10 col-lg-offset-1">
	<?php
		if ($ErrorEstado==1){
			echo '<div class="alert alert-warning alert-styled-left">';
				echo '<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>';
				echo '<span class="text-semibold">Credenciales Incorrectas!</span> <br>Los datos ingresados no corresponden a ninguna cuenta activa.';
		    echo '</div>';
		}
	?>

	<div class="row">
		<!-- Formulario -->
		<div class="col-md-4">
			<form class="login-form" action="validar-login.php" method="post">
				<div class="panel panel-body login-form">
					<div class="text-center">
						<div class="icon-object border-success text-success"><i class="icon-reading"></i></div>
						<h5 class="content-group text-semibold">
							Ingresa a tu cuenta 
							<small class="display-block">Ingrese sus credenciales</small>
						</h5>
					</div> 
					<div class="form-group has-feedback has-feedback-left">
						<input type="text" name="TxtMail" class="form-control required" placeholder="Correo electrónico" required="">
						<div class="form-control-feedback"><i class="icon-user text-muted"></i></div>
					</div>

					<div class="form-group has-feedback has-feedback-left">
						<input type="password" name="TxtClave" class="form-control required" placeholder="Contraseña" required="">
						<div class="form-control-feedback"><i class="icon-lock2 text-muted"></i></div>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-success btn-block">
							Ingresar <i class="icon-circle-right2 position-right"></i>
						</button>
					</div>

					<div class="text-center">
						<a href="<?php echo $RutaServidor; ?>componentes/03-recuperar-clave/index.php">¿Olvido su contraseña?</a>
					</div>
				</div>
			</form>
		</div>
		<!-- Beneficios -->
		<div class="col-md-5">
			<div class="panel">
				<div class="panel-body text-center">
					<div class="icon-object border-warning text-warning"><i class="icon-user-check"></i></div>
					<h5 class="content-group text-semibold">Beneficios de tener una cuenta en AprendeViendo</h5>
					<p class="mb-15" style="text-align: left;">Formar parte de Grupo Aprendeviendo, pone a tu disposición una gran cantidad de cursos en diversos formatos. También el poder compartir y crear tu propia red, conseguir seguidores, entre otros. </p>
					<ul style="text-align: left;">
						<li>Cursos en VideoTutoriales</li>
						<li>Cursos en Biblioteca</li>
						<li>Salones de foro</li>
						<li>Crear tu propia red</li>
						<br>
						<p class="mb-15" style="text-align: left;">Enseña, Aprende y Comparte.</p>
					</ul>
				</div>
			</div>
		</div>

		<!-- Registrarse -->
		<div class="col-md-3">
			<div class="panel">
				<div class="panel-body text-center">
					<div class="icon-object border-primary text-primary"><i class="icon-user-plus"></i></div>
					<h5 class="content-group text-semibold">¿Aún no tienes una cuenta?</h5>
					<p class="mb-15" style="text-align: justify;">Crea tu cuenta totalmente gratis y obtén todos los beneficios que tenemos para ofrecerte.</p>
					<a href="<?php echo $RutaServidor; ?>componentes/04-registrarse/index.php" class="btn btn-primary btn-block">
						Crear Nueva Cuenta <i class="icon-user-plus position-right"></i>
					</a>

					<h5 class="content-group text-semibold">¿Aún no activas tu cuenta?</h5>
					<a href="<?php echo $RutaServidor; ?>componentes/05-activar-cuenta/index.php" class="btn btn-warning btn-block">
						Activar Cuenta de Usuario<i class="icon-user-check position-right"></i>
					</a>


				</div>
			</div>
		</div>
	</div>
</div>