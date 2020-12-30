<?php
	ob_start();
?>
<?php
	require_once('datos-escritorio-blog.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php  MostrarHead(); ?>
	</head>

	<body class="navbar-bottom">

		<!-- Cabecera Roja -->
		<div class="page-header page-header-inverse">

			<!-- Linea 01: Logo + Iconos -->
			<div class="navbar navbar-inverse navbar-transparent">
				<div class="navbar-header">
					<!-- Logo del Sitio -->
					<?php  MostrarLogo(); ?>
				</div>

				<div class="navbar-collapse collapse" id="navbar-mobile">
					<div class="navbar-right">
						<ul class="nav navbar-nav">
							<li class="dropdown">
								<!-- Desplegable de Actividades -->
								<?php  MostrarUserActividades(); ?>
							</li>

							<li class="dropdown">
								<!-- Desplegable de Mensajes -->
								<?php  MostrarUserMensajes(); ?>
							</li>

							<li class="dropdown dropdown-user">
								<!-- Desplegable de Usuario -->
								<?php  MostrarUserUsuario(); ?>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /Linea 01: Logo + Iconos -->


			<!-- Linea 02: Rutas -->
			<div class="page-header-content">
				<?php  MostrarRutas(); ?>
			</div>
			<!-- /Linea 02: Rutas -->


			<!-- Linea 03: Menu Principal + Configuracion -->
			<?php  MostrarMenuPrincipalContenedor(); ?>
			<!-- /Linea 03: Menu Principal + Configuracion -->


			<!-- Menu Flotante -->
			<?php  MostrarMenuFlotante(); ?>
			<!-- /floating menu -->
		</div>
		<!-- /Cabecera Roja -->
		<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


		<!-- Contenedor Página -->
		<div class="page-container">
			<!-- Contenido de la Página -->
			<div class="page-content">


				<?php
					//Publicaciones - Listado
					if ($MostrarPagina == "listarpublicaciones"){
						require_once('listado-articulos.php');
					}

					//Publicaciones - Nuevo
					if ($MostrarPagina == "nuevapublicacion"){
						require_once('articulo-nuevo.php');
					}


					//Configurar Blog
					if ($MostrarPagina == "configurarblog"){
						require_once('configurar-blog.php');
					}



					//Categorias - Listados
					if ($MostrarPagina == "listarcategorias"){
						require_once('listado-categorias.php');
					}

					//Categoria - Nuevo
					if ($MostrarPagina == "categoria-nuevo"){
						require_once('categoria-nuevo.php');
					}

					//Categoria - Editar
					if ($MostrarPagina == "categoria-editar"){
						require_once('categoria-editar.php');
					}

					//Categoria - Eliminar
					if ($MostrarPagina == "categoria-eliminar"){
						require_once('categoria-eliminar.php');
					}
				?>

			</div>
			<!-- Contenido de la Página -->
		</div>
		<!-- Contenedor Página -->


		<!-- Pie de Página -->
		<?php  MostrarPie(); ?>
		<!-- /footer -->


		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

	</body>
</html>
<?php
ob_end_flush();
?>
<!-- Se hace una condicion para cargar el Script necesario para el Ajax de paginacion de cada lista ... Publicaciones o Categorias -->
<?php
if ($MostrarPagina == "listarpublicaciones"){ ?>
	<!-- Script Ajax Publicaciones -->
	<script>
		$(document).ready(function(){
			load(1);
		});

		function load(page){
			var parametros = {"action":"ajax","page":page};
			$("#loaderpublicaciones").fadeIn('slow');
			$.ajax({
				url:'ajax-publicaciones.php',
				data: parametros,
				 beforeSend: function(objeto){
				$("#loaderpublicaciones").html("<img src='../../imagenes/predeterminado/loader.gif'>");
				},
				success:function(data){
					$(".outer_div_publicaciones").html(data).fadeIn('slow');
					$("#loaderpublicaciones").html("");
				}
			})
		}
	</script>
<?php }
 ?>


<?php
if ($MostrarPagina == "listarcategorias"){ ?>
	<!-- Script Ajax Categorias Blog -->
	<script>
		$(document).ready(function(){
			load(1);
		});

		function load(page){
			var parametros = {"action":"ajax","page":page};
			$("#loadercategoriasblog").fadeIn('slow');
			$.ajax({
				url:'ajax-categorias-blog.php',
				data: parametros,
				 beforeSend: function(objeto){
				$("#loadercategoriasblog").html("<img src='../../imagenes/predeterminado/loader.gif'>");
				},
				success:function(data){
					$(".outer_div_categorias").html(data).fadeIn('slow');
					$("#loadercategoriasblog").html("");
				}
			})
		}
	</script>
<?php }
 ?>
