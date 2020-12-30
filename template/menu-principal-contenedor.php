<?php
	function MostrarMenuPrincipalContenedor(){

		global $RutaServidor;
		require_once('menu-principal-estructura.php'); 
		require_once('menu-principal-configuracion.php'); 
		

		echo '<div class="navbar navbar-inverse navbar-transparent" id="navbar-second">';
			echo '<ul class="nav navbar-nav visible-xs-block">';
				echo '<li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-paragraph-justify3"></i></a></li>';
			echo '</ul>';

			echo '<div class="navbar-collapse collapse" id="navbar-second-toggle">';
				//<!-- Menu Principal -->
				MostrarMenuPrincipalEstructura();

				//<!-- Configuración General -->
				MostrarMenuPrincipalConfiguracion();
			echo '</div>';
		echo '</div>';

	}
?>