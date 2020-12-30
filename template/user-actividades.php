<?php
	function MostrarUserActividades(){
		global $RutaServidor;




		if(isset($_SESSION['UsuarioLogeado'])) 
		{
			echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown">';
				echo '<i class="icon-bell2"></i>';
				echo '<span class="visible-xs-inline-block position-right">Actividades</span>';
				echo '<span class="status-mark border-pink-300"></span>';
			echo '</a>';

			// Cuadro de Actividades
			echo '<div class="dropdown-menu dropdown-content">';
				echo '<div class="dropdown-content-heading">';
					echo 'Actividades';
					echo '<ul class="icons-list">';
						echo '<li><a href="#"><i class="icon-menu7"></i></a></li>';
					echo '</ul>';
				echo '</div>';

				echo '<ul class="media-list dropdown-content-body width-350">';
					echo '<li class="media">';
						echo '<div class="media-left">';
							echo '<a href="#" class="btn bg-success-400 btn-rounded btn-icon btn-xs"><i class="icon-mention"></i></a>';
						echo '</div>';

						echo '<div class="media-body">';
							echo '<a href="#">Taylor Swift</a> mentioned you in a post "Angular JS. Tips and tricks"';
							echo '<div class="media-annotation">4 minutes ago</div>';
						echo '</div>';
					echo '</li>';

					echo '<li class="media">';
						echo '<div class="media-left">';
							echo '<a href="#" class="btn bg-pink-400 btn-rounded btn-icon btn-xs"><i class="icon-paperplane"></i></a>';
						echo '</div>';
						
						echo '<div class="media-body">';
							echo 'Special offers have been sent to subscribed users by <a href="#">Donna Gordon</a>';
							echo '<div class="media-annotation">36 minutes ago</div>';
						echo '</div>';
					echo '</li>';



				echo '</ul>';
			echo '</div>';
		}

		
	}
?>