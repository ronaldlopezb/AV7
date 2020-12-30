<?php
	function MostrarLogo(){
		global $RutaServidor;
		echo '<a class="navbar-brand" href="'.$RutaServidor.'componentes/01-index/index.php">';
			echo '<img src="'.$RutaServidor.'imagenes/sistema/logo-aprende-viendo.png" alt="AprendeViendo - Enseñanza Virtual Gratuita">';
		echo '</a>';

		// Menu mobile - Iconos Actividades, Mensajes, Usuarios -->
		echo '<ul class="nav navbar-nav pull-right visible-xs-block">';
			echo '<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-grid3"></i></a></li>';
		echo '</ul>';

	}
?>