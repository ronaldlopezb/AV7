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
		$count_query = "SELECT count(*) AS numrows FROM tabla_blog_categorias where CodigoBlog =$CodigoBlog";
		$SQLcount_query = $Conexion->query($count_query);


		if ($RsCategorias = $SQLcount_query->fetch_array()){
			$numrows = $RsCategorias['numrows'];
		}

		$TotalPaginasArticulo = ceil($numrows/$per_page);
		$RecargarArticulo = 'index.php';

		//echo 'TOTAL: '.$numrows;



		//consulta principal para recuperar los datos
		$query = "SELECT * FROM tabla_blog_categorias where CodigoBlog = $CodigoBlog order by Categoria LIMIT $offset,$per_page";
		$SQLquery = $Conexion->query($query);

		if ($numrows>0){
			?>

			<table class="table datatable-basic">
				<thead>
					<tr>
						<th style="width: 5%;">#</th>
						<th>Título</th>
						<th class="text-center" style="width: 15%;">Acciones</th>
					</tr>
				</thead>

				<tbody>
					<?php
						$i = 0;
						while($RsCategorias = $SQLquery->fetch_array()){
					?>
						<tr>
							<?php $i = $i + 1; ?>
							<!-- Numeración -->
							<td> <?php echo $i;?> </td>

							<!-- Nombre de la Categoria -->
							<td>
								<?php echo $RsCategorias['Categoria'];?>
							</td>

							<!-- Botones de Acción -->
							<td class="text-center">
								<ul class="icons-list">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											<i class="icon-menu9"></i>
										</a>
										<ul class="dropdown-menu dropdown-menu-right">
											<li>
												<a href="../08-escritorio-blog/index.php?p=categoria-editar&idCategoria=<?php echo $RsCategorias['IdCategoria']; ?>"><i class="icon-pencil5"></i> Editar</a>
											</li>
											<li>
												<a href="../08-escritorio-blog/index.php?p=categoria-eliminar&idCategoria=<?php echo $RsCategorias['IdCategoria']; ?>"><i class="icon-eraser"></i> Eliminar</a>
											</li>
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
								<div class="icon-object border-success text-success"><i class="icon-folder-open"></i></div>
								<h5 class="text-semibold">No se encontraron Categorias</h5>
								<p class="mb-15">Actualmente tu blog no cuenta con categorías. Crea tus categoría y publica tus artículo.</p>
								<a href="../08-escritorio-blog/index.php?p=categoria-nuevo" class="btn bg-success"><i class="icon-folder-open position-left"></i>Nueva Categoría</a>
							</div>
						</div>
				</div>
			</div>
		<?php
		}
	}
?>
