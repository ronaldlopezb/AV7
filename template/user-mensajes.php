<?php
	function MostrarUserMensajes(){
		global $RutaServidor;

		if(isset($_SESSION['UsuarioLogeado'])) 
		{

			echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown">';
				echo '<i class="icon-bubble8"></i>';
				echo '<span class="visible-xs-inline-block position-right">Mensajes</span>';
			echo '</a>';


			//<!-- Cuadro de Mensajes -->
			echo '<div class="dropdown-menu dropdown-content width-350">';
				echo '<div class="dropdown-content-heading">';
					echo 'Messages';
					echo '<ul class="icons-list">';
						echo '<li><a href="#"><i class="icon-menu7"></i></a></li>';
					echo '</ul>';
				echo '</div>';

				echo '<ul class="media-list dropdown-content-body">';
					echo '<li class="media">';
						echo '<div class="media-left">';
							echo '<img src="'.$RutaServidor.'assets/images/placeholder.jpg" class="img-circle img-sm" alt="">';
							echo '<span class="badge bg-danger-400 media-badge">5</span>';
						echo '</div>';

						echo '<div class="media-body">';
							echo '<a href="#" class="media-heading">';
								echo '<span class="text-semibold">James Alexander</span>';
								echo '<span class="media-annotation pull-right">04:58</span>';
							echo '</a>';

							echo '<span class="text-muted">who knows, maybe that would be the best thing for me...</span>';
						echo '</div>';
					echo '</li>';

					echo '<li class="media">';
						echo '<div class="media-left">';
							echo '<img src="'.$RutaServidor.'assets/images/placeholder.jpg" class="img-circle img-sm" alt="">';
							echo '<span class="badge bg-danger-400 media-badge">4</span>';
						echo '</div>';

						echo '<div class="media-body">';
							echo '<a href="#" class="media-heading">';
								echo '<span class="text-semibold">Margo Baker</span>';
								echo '<span class="media-annotation pull-right">12:16</span>';
							echo '</a>';

							echo '<span class="text-muted">That was something he was unable to do because...</span>';
						echo '</div>';
					echo '</li>';
				echo '</ul>';
			echo '</div>';
		}
	}
?>