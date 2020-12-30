<?php
	function MostrarUserUsuario(){
		global $RutaServidor;

		//Cargar las Variables de Usuario que se usan aquí
		global $PerfilNombre;
		global $PerfilApePaterno;
		global $PerfilFotografia;
		
		
		if(!isset($_SESSION['UsuarioLogeado'])) 
		{
			//NO Logeado
			echo '<a href="'.$RutaServidor.'componentes/02-login/index.php"><i class="icon-user-check"></i> Iniciar Sesión</a>';

		}else{
			//LOGEADO
			// Dentro del menu Usuarios
			echo '<a class="dropdown-toggle" data-toggle="dropdown">';
				echo '<img src="'.$RutaServidor.$PerfilFotografia.'" alt="">';
				echo '<span>'.$PerfilNombre.' '.$PerfilApePaterno.'</span>';
				echo '<i class="caret"></i>';
			echo '</a>';
			

			//<!-- Cuadro de Usuario -->
			echo '<ul class="dropdown-menu dropdown-menu-right">';
				echo '<li><a href="'.$RutaServidor.'componentes/06-perfil/index.php"><i class="icon-user-plus"></i> Mi Perfil</a></li>';
				echo '<li><a href="'.$RutaServidor.'componentes/07-escritorio/index.php"><i class="icon-display"></i> Escritorio</a></li>';
				echo '<li><a href="#"><i class="icon-coins"></i> Mi Balance</a></li>';
				echo '<li><a href="#"><span class="badge bg-blue pull-right">26</span> <i class="icon-comment-discussion"></i> Mensajes</a></li>';
				echo '<li class="divider"></li>';
				echo '<li><a href="#"><i class="icon-cog5"></i> Configurar Cuenta</a></li>';
				echo '<li><a href="'.$RutaServidor.'componentes/02-login/cerrar-sesion.php"><i class="icon-switch2"></i> Cerrar Sesión</a></li>';
			echo '</ul>';
		}
	}
?>