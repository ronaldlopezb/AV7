<!-- Main content -->
<div class="content-wrapper">
	<!-- Cabecera Blog -->
	<?php require_once('cabecera-blog.php'); ?>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-white border-left-xlg border-left-primary">
				<form  action="categoria-nuevo-guardar.php" method="post">
					<div class="panel-heading">
						<h4 class="panel-title text-semibold">Registrar Nueva Categoría</h4>
						<div class="heading-elements">
							<button type="submit" class="btn btn-success"> <i class="icon-folder-open position-left"></i>Guardar Categoría</button>
							<a type="button" class="btn btn-danger" href="../08-escritorio-blog/index.php?p=listarcategorias"> <i class="icon-undo position-left"></i>Volver</a>
	                	</div>
	                </div>

					<div class="tab-content">
						<!-- Nueva Categoría -->
						<div class="panel-body">
							<div class="form-group">
								<div class="row">
									<div class="col-md-12">
									<h6 class="text-semibold">Nombre de la Categoría</h6>
										<input type="text" name="TxtCategoria" placeholder="Ingrese nombre de la nueva categoría" class="form-control">

									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- /main content -->
