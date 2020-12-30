<?php
	function MostrarMenuPrincipalEstructura(){
		global $RutaServidor;

		echo '<ul class="nav navbar-nav navbar-nav-material">';
			echo '<li class="active"><a href="'.$RutaServidor.'componentes/01-index/index.php">Portal</a></li>';

			echo '<li class="dropdown mega-menu mega-menu-wide">';
				echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown">Components <span class="caret"></span></a>';

				echo '<div class="dropdown-menu dropdown-content">';
					echo '<div class="dropdown-content-body">';
						echo '<div class="row">';
							echo '<div class="col-md-3">';
								echo '<span class="menu-heading underlined">Forms</span>';
								echo '<ul class="menu-list">';
									echo '<li>';
										echo '<a href="#"><i class="icon-pencil3"></i> Form components</a>';
									echo '</li>';

									echo '<li>';
										echo '<a href="#"><i class="icon-file-css"></i> JSON forms</a>';
									echo '</li>';
								echo '</ul>';
							echo '</div>';
							
							echo '<div class="col-md-3">';
								echo '<span class="menu-heading underlined">Appearance</span>';
								echo '<ul class="menu-list">';
									echo '<li>';
										echo '<a href="#"><i class="icon-grid"></i> Components</a>';
									echo '</li>';

									echo '<li>';
										echo '<a href="#"><i class="icon-browser"></i> Content panels</a>';
									echo '</li>';
								echo '</ul>';
							echo '</div>';
							echo '<div class="col-md-3">';
								echo '<span class="menu-heading underlined">Extensions</span>';
								echo '<ul class="menu-list">';
									echo '<li>';
										echo '<a href="#"><i class="icon-puzzle4"></i> Extensions</a>';
									echo '</li>';

									echo '<li>';
										echo '<a href="#"><i class="icon-popout"></i> JQuery UI</a>';
									echo '</li>';
								echo '</ul>';
							echo '</div>';
							echo '<div class="col-md-3">';
								echo '<span class="menu-heading underlined">Tables</span>';
								echo '<ul class="menu-list">';
									echo '<li>';
										echo '<a href="#"><i class="icon-table2"></i> Basic tables</a>';
									echo '</li>';
									echo '<li>';
										echo '<a href="#"><i class="icon-grid7"></i> Data tables</a>';
									echo '</li>';
								echo '</ul>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			echo '</li>';





			echo '<li class="dropdown mega-menu mega-menu-wide">';
				echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown">Features <span class="caret"></span></a>';

				echo '<div class="dropdown-menu dropdown-content">';
					echo '<div class="dropdown-content-body">';
						echo '<div class="row">';
							echo '<div class="col-md-3">';
								echo '<span class="menu-heading underlined">Main content</span>';
								echo '<ul class="menu-list">';
									echo '<li>';
										echo '<a href="#"><i class="icon-stack2"></i> Page layouts</a>';
									echo '</li>';
									echo '<li>';
										echo '<a href="#"><i class="icon-align-center-horizontal"></i> Fixed width</a>';
									echo '</li>';
								echo '</ul>';
							echo '</div>';
							echo '<div class="col-md-3">';
								echo '<span class="menu-heading underlined">Layout</span>';
								echo '<ul class="menu-list">';
									echo '<li>';
										echo '<a href="#"><i class="icon-indent-decrease2"></i> Sidebars</a>';
									echo '</li>';
									echo '<li>';
										echo '<a href="#"><i class="icon-sort"></i> Vertical navigation</a>';
									echo '</li>';

								echo '</ul>';
							echo '</div>';
							echo '<div class="col-md-3">';
								echo '<span class="menu-heading underlined">Data visualization</span>';
								echo '<ul class="menu-list">';
									echo '<li>';
										echo '<a href="#"><i class="icon-graph"></i> Echarts library</a>';
									echo '</li>';
									echo '<li>';
										echo '<a href="#"><i class="icon-statistics"></i> D3 library</a>';
									echo '</li>';
								echo '</ul>';
							echo '</div>';
							echo '<div class="col-md-3">';
								echo '<span class="menu-heading underlined">Extras</span>';
								echo '<ul class="menu-list">';
									echo '<li><a href="#"><i class="icon-spinner3 spinner position-left"></i> CSS3 animations</a></li>';
									echo '<li>';
										echo '<a href="#"><i class="icon-spinner10 spinner position-left"></i> Velocity animations</a>';
									echo '</li>';
								echo '</ul>';
							echo '</div>';
						echo '</div>';
					echo '</div>';
				echo '</div>';
			echo '</li>';






			echo '<li class="dropdown">';
				echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown">';
					echo 'Page kits <span class="caret"></span>';
				echo '</a>';

				echo '<ul class="dropdown-menu width-250">';
					echo '<li class="dropdown-header">General pages</li>';
					echo '<li>';
						echo '<a href="#"><i class="icon-task"></i> Blog</a>';
					echo '</li>';

					echo '<li>';
						echo '<a href="#"><i class="icon-images2"></i> Gallery</a>';
					echo '</li>';

					echo '<li>';
						echo '<a href="#"><i class="icon-grid6"></i> Others</a>';
					echo '</li>';

					echo '<li class="dropdown-header">Service pages</li>';
					echo '<li>';
						echo '<a href="#"><i class="icon-cash3"></i> Invoicing</a>';
					echo '</li>';

					echo '<li>';
						echo '<a href="#"><i class="icon-user-plus"></i> Authentication</a>';
					echo '</li>';

				echo '</ul>';
			echo '</li>';
		echo '</ul>';

	}
?>