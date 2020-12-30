<?php
	function MostrarMenuPrincipalConfiguracion(){
		global $RutaServidor;
		global $UsuarioTipoCuenta;


		if(isset($_SESSION['UsuarioLogeado'])) 
		{
			//Es Usuario
			echo '<ul class="nav navbar-nav navbar-nav-material navbar-right">';
				echo '<li>';
					echo '<a href="#">';
						echo '<span class="status-mark status-mark-inline border-success-300 position-left"></span>';
						echo 'Ayuda';
					echo '</a>';
				echo '</li>';

				// Validar si es administrador
				if ($UsuarioTipoCuenta==2){
					echo '<li class="dropdown">';
						echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown">';
							echo '<i class="icon-cog3"></i>';
							echo '<span class="visible-xs-inline-block position-right">Configurar</span>';
							echo '<span class="caret"></span>';
						echo '</a>';
					
						echo '<ul class="dropdown-menu dropdown-menu-right">';
							echo '<li><a href="#"><i class="icon-user-lock"></i> Seguridad</a></li>';
							echo '<li><a href="#"><i class="icon-statistics"></i> Analitica Del Sitio</a></li>';
							echo '<li><a href="#"><i class="icon-accessibility"></i> Accesisbilidad</a></li>';
							echo '<li class="divider"></li>';
							echo '<li><a href="#"><i class="icon-gear"></i> Configuraciones</a></li>';
						echo '</ul>';
					echo '</li>';
				}
			echo '</ul>';
		}else{
			//NO ES USUARIO.. ES VISITANTE
			echo '<ul class="nav navbar-nav navbar-nav-material navbar-right">';
				echo '<li>';
					echo '<a href="'.$RutaServidor.'componentes/04-registrarse/index.php">';
						echo '<span class="status-mark status-mark-inline border-success-300 position-left"></span>';
						echo 'CREAR CUENTA DE USUARIO';
					echo '</a>';
				echo '</li>';

				echo '<li>';
					echo '<a href="#">';
						echo '<span class="status-mark status-mark-inline border-success-300 position-left"></span>';
						echo 'Ayuda';
					echo '</a>';
				echo '</li>';
			echo '</ul>';
		}
	}


?>