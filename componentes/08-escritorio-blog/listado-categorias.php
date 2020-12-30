<!-- Main content -->
<div class="content-wrapper">

	<!-- Cabecera Blog -->
	<?php require_once('cabecera-blog.php'); ?>

	

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-white">
				<div class="panel-heading">
					<h4 class="panel-title text-semibold">Categorías de Publicaciones</h4>
					<div class="heading-elements">
						<a type="button" class="btn btn-success" href="../08-escritorio-blog/index.php?p=categoria-nuevo"> <i class="icon-folder-open position-left"></i>Nueva Categoría</a>
						<a type="button" class="btn btn-danger" href="../08-escritorio-blog/index.php?p=listarpublicaciones"> <i class="icon-cog5 position-left"></i>Volver a Publicaciones</a>

                	</div>
                </div>

				<div class="tab-content">
					<!-- Lista de Categorias -->
					<div class="tab-pane fade in active" id="AdministrarBlog">
						<div class="panel-body" style="padding-bottom: 0px;">
							<div class="content-group-lg" style="padding-bottom: -0px !important;">

								<!-- Mensaje del Sistema - Nuevo, Editar, Eliminar -->
								<?php
									if ($mensaje ==1){
										echo '<div class="alert alert-success no-border">';
												echo '<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>';
												echo '<span class="text-semibold">Categoría Guardada Correctamente!</span> .';
										echo '</div>';
									}

									if ($mensaje ==2){
										echo '<div class="alert alert-primary no-border">';
											echo '<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>';
											echo '<span class="text-semibold">Categoría Editada Correctamente!</span>.';
							    		echo '</div>';
									}

									if ($mensaje ==3){
										echo '<div class="alert alert-danger no-border">';
											echo '<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>';
											echo '<span class="text-semibold">Categoría Eliminada!</a>.';
									    echo '</div>';
									}

									if ($mensaje ==4){
										echo '<div class="alert alert-warning no-border">';
											echo '<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>';
											echo '<span class="text-semibold">No se puede eliminar la Categoría ya que actualmente tiene publicaciones!</a>.';
									    echo '</div>';
									}

								?>
								<!-- /Mensaje del Sistema - Nuevo, Editar, Eliminar -->
							</div>
						</div>

						<!-- Tabla de Categorias - AJAX -->
						<div id="loadercategoriasblog" class="text-center"> <img src="loader.gif"></div>
						<div class="outer_div_categorias"></div><!-- Datos ajax Final -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /main content -->