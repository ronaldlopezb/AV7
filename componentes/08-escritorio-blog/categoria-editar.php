<?php
	//Capturar el Codigo de la Categoria
	if (isset($_GET['idCategoria'])){
		$CodigoCategoria = $_GET['idCategoria'];
	}

	//Obtener los datos de la Categoria
	$Sql = "select * from tabla_blog_categorias where IdCategoria= $CodigoCategoria and CodigoBlog = $BlogCodigo";
	$ResSql = $Conexion->query($Sql);
	$TotalCategoria = $ResSql->num_rows;

	if ($TotalCategoria == 0){
		header("Location: ".$RutaServidor."componentes/08-escritorio-blog/index.php?p=listarcategorias");
	}

	$RegCategoria = $ResSql->fetch_array();
	$Categoria = $RegCategoria['Categoria'];
?>


<!-- Main content -->
<div class="content-wrapper">
	<!-- Cabecera Blog -->
	<?php require_once('cabecera-blog.php'); ?>


	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-white border-left-xlg border-left-primary">
				<form  action="categoria-editar-guardar.php" method="post">
					<div class="panel-heading">
						<h4 class="panel-title text-semibold">Editar Información de Categoría</h4>
						<div class="heading-elements">
							<button type="submit" class="btn btn-success"> <i class="icon-folder-open position-left"></i>Editar Categoría</button>
							<a type="button" class="btn btn-danger" href="../08-escritorio-blog/index.php?p=listarcategorias"> <i class="icon-undo position-left"></i>Volver</a>
	                	</div>
	                </div>

					<div class="tab-content">
						<!-- Editar Categoría -->
						<div class="panel-body">
							<div class="form-group">
								<div class="row">
									<div class="col-md-12">
									<h6 class="text-semibold">Nombre de la Categoría</h6>
										<input type="text" name="TxtCategoria" placeholder="Ingrese nombre de la categoría" class="form-control" value="<?php echo $Categoria; ?>">
										<input type="hidden" name="OcultoCodigoCategoria" name="opcion" value="<?php echo $CodigoCategoria; ?>">
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