<?php
/*-----------------------
Autor: Obed Alvarado
http://www.obedalvarado.pw
Fecha: 12-06-2015
Version de PHP: 5.6.3
----------------------------*/

	# conectare la base de datos
	require_once('../../includes/bd/conexion.php');
	session_start();
	$UsuarioEmail = $_SESSION['UsuarioLogeado'];


	///////////////////////////////////////////
	//Buscar al Usuario para obtener su Código
	$SqlUsuario = "select * from tabla_usuario where CorreoElectronico='".$UsuarioEmail."'";
	$DatosUsuario = $Conexion->query($SqlUsuario);
	$RegistroUsuario = $DatosUsuario->fetch_array();

	$UsuarioCodigo = $RegistroUsuario['IdUsuario'];
	$CantidadListado = $RegistroUsuario['CantidadListado'];


	/////////////////////////////
    //Obtener el Código del Blog
	$SQLCodigoBlog = "select * from tabla_blog where CodigoUsuario='".$UsuarioCodigo."'";
	$SQLCodigoBlogDatos = $Conexion->query($SQLCodigoBlog);
	$SQLCodigoBlogResultado = $SQLCodigoBlogDatos->fetch_array();

	$CodigoBlog = $SQLCodigoBlogResultado['IdBlog'];



    //Seguir Ajax
	$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';

	if($action == 'ajax'){
		include '../../includes/funciones/pagination.php'; //incluir el archivo de paginación

		//las variables de paginación
		$page1 = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;

		$per_page = $CantidadListado; //la cantidad de registros que desea mostrar
		$AdjacentsArticulos  = 3; //brecha entre páginas después de varios adyacentes
		$offset = ($page1 - 1) * $per_page;



		////////////////////////////////////////////////
		//Cuenta el número total de filas de la tabla*/
		$count_query = "SELECT count(*) AS numrows FROM tabla_blog_publicaciones where CodigoBlog =$CodigoBlog";
		$SQLcount_query = $Conexion->query($count_query);


		if ($RsPublicaciones = $SQLcount_query->fetch_array()){
			$numrows = $RsPublicaciones['numrows'];
		}

		$TotalPaginasArticulo = ceil($numrows/$per_page);
		$RecargarArticulo = 'index.php';

		//echo 'TOTAL: '.$numrows;



		//consulta principal para recuperar los datos
		$query = "SELECT * FROM tabla_blog_publicaciones where CodigoBlog = $CodigoBlog order by IdArticulo DESC LIMIT $offset,$per_page";
		$SQLquery = $Conexion->query($query);

		if ($numrows>0){
			?>

			<table class="table datatable-basic">
				  <thead>
					<tr>
						<th>#</th>
						<th>Título</th>
						<th>Categoría</th>
						<th>Estado</th>
						<th class="text-center">Acciones</th>
					</tr>
				</thead>

				<tbody>
				<?php
					$i = 0;
					while($RsPublicaciones = $SQLquery->fetch_array()){

						?>
						<tr>
							<?php $i = $i + 1; ?>
							<!-- Numeración -->
							<td> <?php echo $i;?> </td>

							<!-- Nombre de la Publicacion -->
							<td>
								<a href="#"><?php echo $RsPublicaciones['Titulo'];?></a>
								<br>
								<small>
									<strong>Creado el:</strong> <?php echo $RsPublicaciones['FechaCreacion'];?> -
									<strong>Comentarios:</strong> <?php echo $RsPublicaciones['TotalComentarios'];?> -
									<strong>Veces visto:</strong> <?php echo $RsPublicaciones['TotalVisitas'];?>
								</small>
							</td>

							<!-- Categoria -->
							<td>
								<?php
									$SQLNombreCategoria = "select * from tabla_blog_categorias where IdCategoria=".$RsPublicaciones['CodigoCategoria'];
									$SQLNombreCategoriaDatos = $Conexion->query($SQLNombreCategoria);
									$SQLNombreCategoriaResultado = $SQLNombreCategoriaDatos->fetch_array();

									$NombreCategoria = $SQLNombreCategoriaResultado['Categoria'];
									echo $NombreCategoria;
								?>
							</td>

							<!-- Estado de Publicacion -->
							<td>
								<?php
									$EstadoPublicaciones = $RsPublicaciones['EstadoPublicacion'];
									if ($EstadoPublicaciones == 1){
										echo '<span class="label label-success">Publicado</span>';
									}else{
										echo '<span class="label label-danger">Despublicado</span>';
									}
								?>
							</td>

							<!-- Botones de Acción -->
							<td>
								<ul class="icons-list">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<i class="icon-menu9"></i>
										</a>

										<ul class="dropdown-menu dropdown-menu-right">
											<li><a href="#?paso=<?php echo $i; ?>"><i class="icon-image2"></i> Imágen principal</a></li>
											<li><a href="#"><i class="icon-file-eye"></i> Ver</a></li>
											<li class="divider"></li>
											<li><a href="#"><i class="icon-pencil5"></i> Editar</a></li>
											<li><a href="#"><i class="icon-eraser"></i> Eliminar</a></li>
										</ul>
									</li>
								</ul>
							</td>
						</tr>
						<?php
					}
				?>
				</tbody>
			</table>

			<!-- Numeracion -->
			<div class="text-center content-group pt-20">
				<?php echo paginate($RecargarArticulo, $page1, $TotalPaginasArticulo, $AdjacentsArticulos);?>
			</div>

		<?php

		} else {
			?>
			<div class="panel-body" style="padding-bottom: 0px;">
				<div class="content-group-lg" style="padding-bottom: -0px !important;">
					<div class="panel">
							<div class="panel-body text-center">
								<div class="icon-object border-success text-success"><i class="icon-book"></i></div>
								<h5 class="text-semibold">No se encontraron publicaciones</h5>
								<p class="mb-15">Actualmente tu blog se encuentra vacío. Crea tus categoría y publica tus artículo.</p>
								<a type="button" class="btn btn-primary" href="../08-escritorio-blog/index.php?p=nuevapublicacion"><i class="icon-file-plus position-left"></i>Nueva Publicación</a>
								<a href="../08-escritorio-blog/index.php?p=listarcategorias" class="btn bg-success"><i class="icon-folder-open position-left"></i>Categoría</a>
							</div>
						</div>
				</div>
			</div>
		<?php
		}
	}
?>
