<?php
	function MostrarPie(){
		global $RutaServidor;

		echo '<div class="navbar navbar-default navbar-fixed-bottom footer">';
			//<!-- Bloque Mobile - Pie de Página -->
			echo '<ul class="nav navbar-nav visible-xs-block">';
				echo '<li><a class="text-center collapsed" data-toggle="collapse" data-target="#footer"><i class="icon-circle-up2"></i></a></li>';
			echo '</ul>';

			echo '<div class="navbar-collapse collapse" id="footer">';
				echo '<div class="navbar-text">';
					echo '&copy; 2006 - 2017. Todos los derechos reservados. ';
					echo 'Grupo <a href="http://Aprende-Viendo.com" class="navbar-link">AprendeViendo</a>. ';
					echo 'Desarrollado por <a href="http://RonaldLopezB.com" class="navbar-link" target="_blank">Ronald López</a> ';
					echo 'y <a href="http://MasterHostPeru.com" class="navbar-link" target="_blank">MasterHostPeru</a>.';
				echo '</div>';

				echo '<div class="navbar-right">';
					echo '<ul class="nav navbar-nav">';
						echo '<li><a href="#">Nosotros</a></li>';
						echo '<li><a href="#">Aviso Legal</a></li>';
						echo '<li><a href="#">Términos de uso</a></li>';
						echo '<li><a href="#">Contacto</a></li>';
					echo '</ul>';
				echo '</div>';
			echo '</div>';
		echo '</div>';
	}
?>