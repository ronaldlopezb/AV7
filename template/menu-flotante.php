<?php
	function MostrarMenuFlotante(){
		global $RutaServidor;

		if(isset($_SESSION['UsuarioLogeado'])) 
		{
			echo '<ul class="fab-menu fab-menu-top-right" data-fab-toggle="click">';
				echo '<li>';
					echo '<a class="fab-menu-btn btn bg-pink-300 btn-float btn-rounded btn-icon">';
						echo '<i class="fab-icon-open icon-plus3"></i>';
						echo '<i class="fab-icon-close icon-cross2"></i>';
					echo '</a>';

					echo '<ul class="fab-menu-inner">';
						echo '<li>';
							echo '<div data-fab-label="Escribir Email">';
								echo '<a href="#" class="btn btn-default btn-rounded btn-icon btn-float">';
									echo '<i class="icon-pencil"></i>';
								echo '</a>';
							echo '</div>';
						echo '</li>';
						echo '<li>';
							echo '<div data-fab-label="Conversaciones">';
								echo '<a href="#" class="btn btn-default btn-rounded btn-icon btn-float">';
									echo '<i class="icon-bubbles7"></i>';
								echo '</a>';
								echo '<span class="badge bg-primary-400">5</span>';
							echo '</div>';
						echo '</li>';
						echo '<li>';
							echo '<div data-fab-label="Conversación con Jack">';
								echo '<a href="#" class="btn bg-pink-400 btn-rounded btn-icon btn-float">';
									echo '<img src="'.$RutaServidor.'assets/images/placeholder.jpg" class="img-responsive" alt="">';
								echo '</a>';
								echo '<span class="status-mark border-pink-400"></span>';
							echo '</div>';
						echo '</li>';
					echo '</ul>';
				echo '</li>';
			echo '</ul>';
		}
	}
?>