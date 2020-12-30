<!-- Main content -->
<div class="content-wrapper">
	<!-- Cabecera Blog -->
	<?php require_once('cabecera-blog.php'); ?>
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-white">
				<div class="panel-heading">
					<h4 class="panel-title text-semibold">Publicaciones</h4>
					<div class="heading-elements">
						<a type="button" class="btn btn-primary" href="../08-escritorio-blog/index.php?p=nuevapublicacion"> <i class="icon-file-plus position-left"></i>Nueva Publicación</a>
						<a type="button" class="btn btn-success" href="../08-escritorio-blog/index.php?p=listarcategorias"> <i class="icon-folder-open position-left"></i>Categorías</a>
						<a type="button" class="btn btn-danger" href="../08-escritorio-blog/index.php?p=configurarblog"> <i class="icon-cog5 position-left"></i>Configuración</a>
                	</div>
                </div>

				<div class="tab-content">
					<!-- Lista de Artículo -->
					<div class="tab-pane fade in active" id="AdministrarBlog">
						<div class="panel-body" style="padding-bottom: 0px;">
							<div class="content-group-lg" style="padding-bottom: -0px !important;">
								<!-- Mensaje del Sistema - Nuevo, Editar, Eliminar -->
								<?php
									if ($mensaje ==1){
										echo '<div class="alert alert-success no-border">';
												echo '<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>';
												echo '<span class="text-semibold">Artículo Guardado Correctamente!</span> .';
										echo '</div>';
									}

									if ($mensaje ==2){
										echo '<div class="alert alert-primary no-border">';
											echo '<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>';
											echo '<span class="text-semibold">Artículo Editado Correctamente!</span>.';
							    		echo '</div>';
									}

									if ($mensaje ==3){
										echo '<div class="alert alert-danger no-border">';
											echo '<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>';
											echo '<span class="text-semibold">Artículo Eliminado!</a>.';
									    echo '</div>';
									}

									if ($mensaje ==4){
										echo '<div class="alert alert-success no-border">';
											echo '<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>';
											echo '<span class="text-semibold">La Configuración del Blog se Guardó Correctamente</a>.';
									    echo '</div>';
									}

								?>
								<!-- /Mensaje del Sistema - Nuevo, Editar, Eliminar -->
							</div>
						</div>



						<!-- Tabla de Publicaciones - AJAX -->
						<div id="loaderpublicaciones" class="text-center"> <img src="loader.gif"></div>
						<div class="outer_div_publicaciones"></div><!-- Datos ajax Final -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /main content -->
