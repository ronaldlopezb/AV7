<?php
	function MostrarRutas(){
		global $RutaServidor;

		//Cargar las Variables de Usuario que se usan aquí
		global $PerfilSexo;
		global $PerfilNombre;
		global $PerfilApePaterno;
		global $PerfilApeMaterno;


		if(isset($_SESSION['UsuarioLogeado'])) 
		{
			echo '<div class="page-title">';
				
				if ($PerfilSexo=="Hombre"){
					echo '<h4>Portal <small>Bienvenido '.$PerfilNombre.' '.$PerfilApePaterno.' '.$PerfilApeMaterno.'</small></h4>';
				}else{
					echo '<h4>Portal <small>Bienvenida '.$PerfilNombre.' '.$PerfilApePaterno.' '.$PerfilApeMaterno.'</small></h4>';
				}
			echo '</div>';

			echo '<div class="heading-elements">';
				echo '<ul class="breadcrumb heading-text">';
					echo '<li><a href="'.$RutaServidor.'componentes/01-index/index.php"><i class="icon-home2 position-left"></i> Inicio</a></li>';
					echo '<li class="active">Portal</li>';
				echo '</ul>';
			echo '</div>';
		}else{
			echo '<div class="page-title">';
				echo '<h4>Portal <small>Bienvenido(a) a AprendeViendo</small></h4>';
			echo '</div>';

			echo '<div class="heading-elements">';
				echo '<ul class="breadcrumb heading-text">';
					echo '<li><a href="'.$RutaServidor.'componentes/01-index/index.php"><i class="icon-home2 position-left"></i> Inicio</a></li>';
					echo '<li class="active">Portal</li>';
				echo '</ul>';
			echo '</div>';
		}
		
	}
?>