<?php
	//Obtener los datos de Configuración
	$SqlConfi = "select * from tabla_blog where CodigoUsuario= $UsuarioCodigo";
	$ResConfi = $Conexion->query($SqlConfi);
	$TotalConfig = $ResConfi->num_rows;

	if ($TotalConfig == 0){
		header("Location: ".$RutaServidor."componentes/08-escritorio-blog/index.php?p=listararticulos");
	}

	$RegConfig = $ResConfi->fetch_array();

	$BlogTitulo = $RegConfig['BlogTitulo'];
	$BlogDescripcion = $RegConfig['BlogDescripcion'];
	$BlogPermitirComentarios = $RegConfig['BlogPermitirComentarios'];
	$BlogCantListFront = $RegConfig['BlogCantidadListadoFrontend'];
	$BlogCantListBack = $RegConfig['BlogCantidadListadoBackend'];
	$BlogActivo = $RegConfig['BlogActivo'];


?>


<!-- Main content -->
<div class="content-wrapper">
	<!-- Cabecera Blog -->
	<?php require_once('cabecera-blog.php'); ?>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-white border-left-xlg border-left-primary">



				<form  action="configurar-guardar.php" method="post" class="form_horizontal">

					<div class="panel-heading">
						<h4 class="panel-title text-semibold">Configuración de Blog</h4>
						<div class="heading-elements">
							<button type="submit" class="btn btn-success"> <i class="icon-cog5 position-left"></i>Guardar Configuración</button>
							<a type="button" class="btn btn-danger" href="../08-escritorio-blog/index.php?p=listarpublicaciones"> <i class="icon-undo position-left"></i>Volver</a>
	                	</div>
	                </div>


					<!-- Configurar -->
					<div class="panel-body">
						<fieldset class="content-group">

							<!-- Nombre del Blog -->
							<div class="form-group">
							<h6 class="text-semibold">Nombre del Blog</h6>
								<input type="text" name="TxtBlogNombre" placeholder="Ingrese nombre del Blog" class="form-control" value="<?php echo $BlogTitulo; ?>">
							</div>

							<!-- Descripción del Blog-->
							<div class="form-group">
							<h6 class="text-semibold">Descripción del Blog</h6>
								<textarea name="TxtBlogDescripcion" rows="5" cols="5" class="form-control" placeholder="Descripción del Blog"><?php echo $BlogDescripcion; ?></textarea>
							</div>

							<!-- Comentarios en el Blog -->
							<div class="form-group">
							<h6 class="text-semibold">Permitir comentarios en el Blog</h6>
								<select name="LstBlogComentarios" class="form-control">
									<option value="1" <?php if ($BlogPermitirComentarios ==1) {echo 'selected="selected"';} ?>>Los Comentarios de las publicaciones del Blog están ACTIVADAS</option>
									<option value="0" <?php if ($BlogPermitirComentarios ==0) {echo 'selected="selected"';} ?>>Los Comentarios de las publicaciones del Blog están DESACTIVADAS</option>
								</select>
							</div>

							<!-- Listado Frontend-->
							<div class="form-group">
								<h6 class="text-semibold">Cantidad Listado Frontend</h6>
								<select name="LstBlogCantidadFrontend" class="form-control">
									<option value="5" <?php if ($BlogCantListFront ==5) {echo 'selected="selected"';} ?>>Mostrar 5 artículos por página</option>
									<option value="10" <?php if ($BlogCantListFront ==10) {echo 'selected="selected"';} ?>>Mostrar 10 artículos por página</option>
									<option value="20" <?php if ($BlogCantListFront ==20) {echo 'selected="selected"';} ?>>Mostrar 20 artículos por página</option>
									<option value="50" <?php if ($BlogCantListFront ==50) {echo 'selected="selected"';} ?>>Mostrar 50 artículos por página</option>
								</select>
							</div>

							<!-- Listado Backend-->
							<div class="form-group">
							<h6 class="text-semibold">Cantidad Listado Backend</h6>
								<select name="LstBlogCantidadBackend" class="form-control">
									<option value="5" <?php if ($BlogCantListBack ==5) {echo 'selected="selected"';} ?>>Mostrar 5 artículos por página</option>
									<option value="10" <?php if ($BlogCantListBack ==10) {echo 'selected="selected"';} ?>>Mostrar 10 artículos por página</option>
									<option value="20" <?php if ($BlogCantListBack ==20) {echo 'selected="selected"';} ?>>Mostrar 20 artículos por página</option>
									<option value="50" <?php if ($BlogCantListBack ==50) {echo 'selected="selected"';} ?>>Mostrar 50 artículos por página</option>
								</select>
							</div>

							<!-- Estado del Blog -->
							<div class="form-group">
								<h6 class="text-semibold">Estado del Blog</h6>
								<select name="LstBlogActivo" class="form-control">
									<option value="1" <?php if ($BlogActivo ==1) {echo 'selected="selected"';} ?>>SI, Quiero que mi Blog este ACTIVO</option>
									<option value="0" <?php if ($BlogActivo ==0) {echo 'selected="selected"';} ?>>Quiero que mi Blog este INACTIVO</option>
								</select>
							</div>



						</div>
					</div>



				</form>




			</div>
		</div>
	</div>
</div>
<!-- /main content -->
