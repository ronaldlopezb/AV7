<?php
	require_once('datos-registrarse.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php  MostrarHead(); ?>
	</head>

	<body class="navbar-bottom">

		<!-- Cabecera Roja -->
		<div class="page-header page-header-inverse">

			<!-- Linea 01: Logo + Iconos -->
			<div class="navbar navbar-inverse navbar-transparent">
				<div class="navbar-header">
					<!-- Logo del Sitio -->
					<?php  MostrarLogo(); ?>
				</div>

				<div class="navbar-collapse collapse" id="navbar-mobile">
					<div class="navbar-right">
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<!-- Desplegable de Actividades -->
								<?php  MostrarUserActividades(); ?>
							</li>

							<li class="dropdown">
								<!-- Desplegable de Mensajes -->
								<?php  MostrarUserMensajes(); ?>
							</li>

							<li class="dropdown dropdown-user">
								<!-- Desplegable de Usuario -->
								<?php  MostrarUserUsuario(); ?>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Linea 01: Logo + Iconos -->


			<!-- Linea 02: Rutas -->
			<div class="page-header-content">
				<?php  MostrarRutas(); ?>
			</div>
			<!-- /Linea 02: Rutas -->


			<!-- Linea 03: Menu Principal + Configuracion -->
			<?php  MostrarMenuPrincipalContenedor(); ?>
			<!-- /Linea 03: Menu Principal + Configuracion -->


			<!-- Menu Flotante -->
			<?php  MostrarMenuFlotante(); ?>
			<!-- /floating menu -->
		</div>
		<!-- /Cabecera Roja -->

		<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


		<!-- Contenedor Página -->
		<div class="page-container">
			<!-- Contenido de la Página -->
			<div class="page-content">

				<?php

					// Mostrar Formulario de Registro
					if ($Mensaje==0){
						require_once('formulario.php');
					}



					//Mostrar Mensaje de Registrado
					if ($Mensaje==1){
						require_once('registrado-sin-verificar.php');
					}

					//Mostrar Mensaje de VERIFICADO
					if ($Mensaje==2){
						require_once('registrado-verificado.php');
					}



				?>



			</div>
			<!-- Contenido de la Página -->
		</div>
		<!-- Contenedor Página -->


		<!-- Pie de Página -->
		<?php  MostrarPie(); ?>
		<!-- /footer -->
	</body>
</html>
