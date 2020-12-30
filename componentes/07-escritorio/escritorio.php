<!-- Main content -->
<div class="content-wrapper">


	<!-- Saludo de Bienvenida -->
	<div class="panel panel-body">
		<div class="media no-margin">
			<div class="media-left media-middle">
				<i class="icon-home2 icon-3x text-purple-300"></i>
			</div>

			<div class="media-body">
				<?php
					if ($PerfilSexo=="Hombre"){
						echo '<h3 class="media-heading text-semibold">Bienvenido '.$PerfilNombre.' '.$PerfilApePaterno.' '.$PerfilApeMaterno.'</h3>';
					}else{
						echo '<h3 class="media-heading text-semibold">Bienvenida '.$PerfilNombre.' '.$PerfilApePaterno.' '.$PerfilApeMaterno.'</h3>';
					}
				?>
				<span class="text-muted">Este es tu Escritorio de Administración</span>
			</div>

			<div class="media-right media-middle">
				<a href="" ><i class="icon-cog3 icon-2x text-success"></i></a>
			</div>
		</div>
	</div>

	<div class="row">

		<!-- COLUMNA IZQUIERDA -->
		<div class="col-lg-3">
			<!-- 1 -->
			<div class="content-group">
				<div class="panel-body bg-blue border-radius-top text-center" style="background-image: url(http://demo.interface.club/limitless/assets/images/bg.png); background-size: contain;">
					<div class="content-group-sm">
						<h5 class="text-semibold no-margin-bottom">
							<?php echo $PerfilNombre.' '.$PerfilApePaterno.' '.$PerfilApeMaterno; ?>
						</h5>

						<span class="display-block"><?php echo $PerfilProfesion; ?></span>

					</div>

					<a class="display-inline-block content-group-sm">
						<img src="<?php echo $RutaServidor.$PerfilFotografia; ?>" class="img-circle img-responsive" alt="" style="width: 200px; height: 200px;">
					</a>

					<ul class="list-inline no-margin-bottom">
						<li><a href="#" class="btn bg-blue-700 btn-rounded btn-icon"><i class="icon-phone"></i></a></li>
						<li><a href="#" class="btn bg-blue-700 btn-rounded btn-icon"><i class="icon-bubbles4"></i></a></li>
						<li><a href="#" class="btn bg-blue-700 btn-rounded btn-icon"><i class="icon-envelop4"></i></a></li>
					</ul>
				</div>

				<div class="panel panel-body no-border-top no-border-radius-top">
					<div class="form-group mt-5">
						<label class="text-semibold">Nombre Completo:</label>
						<span class="pull-right-sm"><?php echo $PerfilNombre.' '.$PerfilApePaterno.' '.$PerfilApeMaterno ?></span>
						<br>
						<label class="text-semibold">Teléfono:</label>
						<span class="pull-right-sm"><?php echo $PerfilTelefono; ?></span>
						<br>
						<label class="text-semibold">Email Corporativo:</label>
						<span class="pull-right-sm"><a href="#"><?php echo $PerfilTelefono; ?></a></span>
						<br>
						<label class="text-semibold">Email Personal:</label>
						<span class="pull-right-sm"><a href="#">ronaldlopez@ronaldlopezb.com</a></span>
						<br>
						<label class="text-semibold">Sitio Web:</label>
						<span class="pull-right-sm"><a href="#">ronaldlopezb.com</a></span>
					</div>
				</div>
			</div>

			<!-- 2 -->
        	<div class="panel panel-body">
            	<h5 class="text-semibold">Limitless UI kit <small class="display-block"></small></h5>
            	<p class="content-group">In post mean shot ye. There out her child sir his lived. Design at uneasy me season of branch on praise esteem. Abilities discourse believing consisted remaining to no. Mistaken no me denoting dashwood as screened. Whence or esteem easily he on. Dissuade husbands at of no if disposal. Oh he decisively impression attachment friendship so if everything.</p>

            	<ul class="list content-group">
            		<li><span class="text-semibold">Author:</span> <a href="#">Eugene Kopyov</a></li>
            		<li><span class="text-semibold">Time spent:</span> 8 months</li>
            		<li><span class="text-semibold">Client base:</span> <a href="#">16,893 (2015)</a></li>
            		<li><span class="text-semibold">Pages:</span> 1200+</li>
            		<li><span class="text-semibold">Latest update:</span> June 1, 2015</li>
            	</ul>

            	<div class="content-group">
                	<h6>Photos</h6>
                	<div class="row">
                    	<div class="col-lg-4 col-sm-4">
                    		<p><a href="#"><img src="img/3.png" class="img-responsive img-rounded" alt=""></a></p>
                    		<p><a href="#"><img src="img/2.png" class="img-responsive img-rounded" alt=""></a></p>
                    	</div>

                    	<div class="col-lg-4 col-sm-4">
                    		<p><a href="#"><img src="img/1.png" class="img-responsive img-rounded" alt=""></a></p>
                    		<p><a href="#"><img src="img/4.png" class="img-responsive img-rounded" alt=""></a></p>
                    	</div>

                    	<div class="col-lg-4 col-sm-4">
                    		<p><a href="#"><img src="img/5.png" class="img-responsive img-rounded" alt=""></a></p>
                    		<p><a href="#"><img src="img/6.png" class="img-responsive img-rounded" alt=""></a></p>
                    	</div>
                	</div>
            	</div>
        	</div>
		</div>



		<!-- COLUMNA CENTRAL -->
		<div class="col-lg-6">

			<!-- Mensaje de explicación de Sub Sistemas-->
			<div class="panel panel-body">
				<div class="media no-margin">
					<div class="media-body">
						<h3 class="media-heading text-semibold">¿Qué es el Panel Administrativo de Usuario?</h3>

						<p style="text-align: justify;">
							AprendeViendo pone a tu disposición una gran cantidad de Aplicaciones para poder sobresalir como participante del sitio web. Tu aportes son de gran importancia para todos, y la calidad de estos te posicionará como el mejor.
						</p>
						<p style="text-align: justify;">
							Desde aquí podras escribir en tu propio blog, publicar cursos en modo texto y videocursos estructurados, Compartir Códigos fuente y software desarrollado por tí, así como también crear grupos, y poder administrar tus listados de contenido.
						</p>
					</div>

				</div>
			</div>



			<!-- Mostrar Mensajes -->
			<?php
                if (isset($_GET['m'])){ // isset ve si existe esa variable
                    //Blog activado correctamente
                    if ($Mensaje == 'b1'){
                        echo '<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">';
							echo '<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>';
							echo '<span class="text-semibold">Blog activado correctamente!</span> Ahora puedes crear tus categorías y publicar tus artículos.';
						echo '</div>';
                    }
                    //Blog Reactivado
                    if ($Mensaje == 'b2'){
                        echo '<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">';
							echo '<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>';
							echo '<span class="text-semibold">Blog nuevamente activo!</span> Ahora puedes continuar con tus publicaciones.';
						echo '</div>';
                    }

                    //Tu blog fue baneado
                    if ($Mensaje == 'b3'){
                        echo '<div class="alert alert-warning alert-styled-left">';
							echo '<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>';
							echo '<span class="text-semibold">Tu Blog fue Banneado!</span> Un administrador baneó tu blog.';
					    echo '</div>';
                    }
                }
			?>

			<div class="row">

				<!-- Blog -->
				<div class="col-lg-6">
					<div class="panel">
						<div class="panel-body">
							<h5 class="content-group">
								<span class="label label-flat label-rounded label-icon border-grey text-grey mr-10">
									<i class="icon-pen2"></i>
								</span>

								<strong>
									<a class="text-default"> Escribir Blog </a>
								</strong>
							</h5>

							<p class="content-group" style="text-align: justify;">
								Tu propio Blog!!! Crea Categorías para tus temas y publica tus artículos. La creación de un blog profesional es algo que puede aportar muchísimos beneficios, tanto a ti como a tus seguidores. Posicionate como el mejor publicando los mejores artículos.
							</p>

							<ul class="list list-icons">
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									But that would be extremely strained
								</li>
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									Who knows, maybe that would be the best
								</li>
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									That was something he was unable to do
								</li>
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									Way extensive and dejection get delivered
								</li>
							</ul>
						</div>

						<hr class="no-margin">

						<div class="panel-body text-center alpha-grey">

							<?php
								//No se encontró ningun blog
								if ($TotalBlogEncontrados == 0){
									echo '<a href="activar-blog.php" class="btn bg-pink-400"><i class="icon-checkmark4 position-left"></i>Activar Blog</a>';
								}

								//Si existe pero no está activo
								if ($TotalBlogEncontrados == 1 and $BlogActivoEstado == 0 and $BlogBanneadoEstado == 0){
									echo '<a href="activar-blog.php" class="btn bg-primary"><i class="icon-spinner9 position-left"></i>Reactivar Blog</a>';
								}

								//Si existe y si está activo y no está banneado
								if ($TotalBlogEncontrados == 1 and $BlogActivoEstado == 1 and $BlogBanneadoEstado == 0){
									echo '<a href="../08-escritorio-blog/index.php?p=listarpublicaciones" class="btn bg-primary"><i class="icon-display position-left"></i>Administrar Blog</a>';
								}

								//Si existe y está baneado
								if ($TotalBlogEncontrados == 1 and $BlogBanneadoEstado == 1){
									echo '<a class="btn bg-danger"><i class="icon-blocked position-left"></i>Banneado</a>';
								}
							?>


						</div>
					</div>
				</div>

				<!-- Cursos Escritos -->
				<div class="col-lg-6">
					<div class="panel">
						<div class="panel-body">
							<h5 class="content-group">
								<span class="label label-flat label-rounded label-icon border-grey text-grey mr-10">
									<i class="icon-pencil7"></i>
								</span>

								<strong>
									<a class="text-default">
										Cursos Escritos
									</a>
								</strong>
							</h5>

							<p class="content-group" style="text-align: justify;">
								Crea y publica Cursos en modo Texto de manera simple, cómoda y a la vez muy potente. Obten seguidores y gana gran reconocimiento con tus cursos. Administra la estructura de tus cursos por niveles en una estructura bien pensada y sencilla.
							</p>

							<ul class="list list-icons">
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									But that would be extremely strained
								</li>
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									Who knows, maybe that would be the best
								</li>
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									That was something he was unable to do
								</li>
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									Way extensive and dejection get delivered
								</li>
							</ul>
						</div>

						<hr class="no-margin">

						<div class="panel-body text-center alpha-grey">
							<a href="#" class="btn bg-pink-400">
								<i class="icon-bubbles8 position-left"></i>
								Request demo
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<!-- VideoCrusos -->
				<div class="col-lg-6">
					<div class="panel">
						<div class="panel-body">
							<h5 class="content-group">
								<span class="label label-flat label-rounded label-icon border-grey text-grey mr-10">
									<i class="icon-video-camera3"></i>
								</span>

								<strong>
									<a class="text-default">
										VideoCursos
									</a>
								</strong>
							</h5>

							<p class="content-group" style="text-align: justify;">
								Si creas videotutoriales, desde aquí podrás publicarlos en una estructura cómoda y sencilla. Ordénalos por niveles, publica la descargra de los archivos usados en el video, fomenta el comentario y da valor a tus videos.
							</p>

							<ul class="list list-icons">
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									But that would be extremely strained
								</li>
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									Who knows, maybe that would be the best
								</li>
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									That was something he was unable to do
								</li>
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									Way extensive and dejection get delivered
								</li>
							</ul>
						</div>

						<hr class="no-margin">

						<div class="panel-body text-center alpha-grey">
							<a href="#" class="btn bg-pink-400">
								<i class="icon-bubbles8 position-left"></i>
								Request demo
							</a>
						</div>
					</div>
				</div>

				<!-- Códigos Fuente -->
				<div class="col-lg-6">
					<div class="panel">
						<div class="panel-body">
							<h5 class="content-group">
								<span class="label label-flat label-rounded label-icon border-grey text-grey mr-10">
									<i class="icon-file-xml"></i>
								</span>

								<strong>
									<a class="text-default">
										Códigos Fuente
									</a>
								</strong>
							</h5>

							<p class="content-group" style="text-align: justify;">
								Comparte tu Programación, pedasos de código que realices y pienses que ayudarán a otras personas. Ayuda a otros a mejorar, o mejora tus propios códigos con la opinión de otros usuarios. Optimiza tu programación
							</p>

							<ul class="list list-icons">
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									But that would be extremely strained
								</li>
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									Who knows, maybe that would be the best
								</li>
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									That was something he was unable to do
								</li>
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									Way extensive and dejection get delivered
								</li>
							</ul>
						</div>

						<hr class="no-margin">

						<div class="panel-body text-center alpha-grey">
							<a href="#" class="btn bg-pink-400">
								<i class="icon-bubbles8 position-left"></i>
								Request demo
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<!-- Software -->
				<div class="col-lg-6">
					<div class="panel">
						<div class="panel-body">
							<h5 class="content-group">
								<span class="label label-flat label-rounded label-icon border-grey text-grey mr-10">
									<i class="icon-file-zip"></i>
								</span>

								<strong>
									<a class="text-default">
										Software
									</a>
								</strong>
							</h5>

							<p class="content-group" style="text-align: justify;">
								Comparte los programas que realices, los códigos fuente y la Base de Datos. Deja que todos vean tu trabajo, mejora tus sistemas con los comentarios de otros usuarios. Aumenta tu poplaridad en el sitio web y como Programador.
							</p>

							<ul class="list list-icons">
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									But that would be extremely strained
								</li>
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									Who knows, maybe that would be the best
								</li>
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									That was something he was unable to do
								</li>
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									Way extensive and dejection get delivered
								</li>
							</ul>
						</div>

						<hr class="no-margin">

						<div class="panel-body text-center alpha-grey">
							<a href="#" class="btn bg-pink-400">
								<i class="icon-bubbles8 position-left"></i>
								Request demo
							</a>
						</div>
					</div>
				</div>

				<!-- Listados -->
				<div class="col-lg-6">
					<div class="panel">
						<div class="panel-body">
							<h5 class="content-group">
								<span class="label label-flat label-rounded label-icon border-grey text-grey mr-10">
									<i class="icon-list"></i>
								</span>

								<strong>
									<a class="text-default">
										Listados
									</a>
								</strong>
							</h5>

							<p class="content-group" style="text-align: justify;">
								Crea listas de todo el contenido del sitio web, une artículos de distintos blog, o lecciones de cursos de distintos autores y/o temas. Aprende a tu ritmo y en el orden que desees. Comparte tus Listados con el contenido de todo el sitio web.
							</p>

							<ul class="list list-icons">
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									But that would be extremely strained
								</li>
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									Who knows, maybe that would be the best
								</li>
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									That was something he was unable to do
								</li>
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									Way extensive and dejection get delivered
								</li>
							</ul>
						</div>

						<hr class="no-margin">

						<div class="panel-body text-center alpha-grey">
							<a href="#" class="btn bg-pink-400">
								<i class="icon-bubbles8 position-left"></i>
								Request demo
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<!-- Grupos -->
				<div class="col-lg-6">
					<div class="panel">
						<div class="panel-body">
							<h5 class="content-group">
								<span class="label label-flat label-rounded label-icon border-grey text-grey mr-10">
									<i class="icon-people"></i>
								</span>

								<strong>
									<a class="text-default">
										Grupos
									</a>
								</strong>
							</h5>

							<p class="content-group" style="text-align: justify;">
								Crea y administra tus Propios Grupos sobre la temática que desees debatir, comparte enlaces y demás información. Los Grupos son un apartado donde cualquiera puede publicar sus aportes de manera directa
							</p>

							<ul class="list list-icons">
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									But that would be extremely strained
								</li>
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									Who knows, maybe that would be the best
								</li>
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									That was something he was unable to do
								</li>
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									Way extensive and dejection get delivered
								</li>
							</ul>
						</div>

						<hr class="no-margin">

						<div class="panel-body text-center alpha-grey">
							<a href="#" class="btn bg-pink-400">
								<i class="icon-bubbles8 position-left"></i>
								Request demo
							</a>
						</div>
					</div>
				</div>

				<!-- Ayuda -->
				<div class="col-lg-6">
					<div class="panel">
						<div class="panel-body">
							<h5 class="content-group">
								<span class="label label-flat label-rounded label-icon border-grey text-grey mr-10">
									<i class="icon-question7"></i>
								</span>

								<strong>
									<a class="text-default">
										Ayuda
									</a>
									<small>Manual de Usuario</small>
								</strong>
							</h5>

							<p class="content-group" style="text-align: justify;">
								Aprende a utilizar de forma correcta las aplicaciones que AprendeViendo te ofrece. Infórmate sobre como aprovechar al máximo las aplicaciones y ser de los mejores en el sitio Web. Todo Usuario debe leer previamente esta Sección.
							</p>

							<ul class="list list-icons">
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									But that would be extremely strained
								</li>
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									Who knows, maybe that would be the best
								</li>
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									That was something he was unable to do
								</li>
								<li>
									<i class="icon-checkmark-circle text-success position-left"></i>
									Way extensive and dejection get delivered
								</li>
							</ul>
						</div>

						<hr class="no-margin">

						<div class="panel-body text-center alpha-grey">
							<a href="#" class="btn bg-pink-400">
								<i class="icon-bubbles8 position-left"></i>
								Request demo
							</a>
						</div>
					</div>
				</div>
			</div>



			<!-- Resultados Busqueda -->
			<div class="panel panel-body">
				<p class="text-muted text-size-small">About 827,000 results (0.34 seconds)</p>

				<hr>

				<ul class="media-list search-results-list content-group">
                	<li class="media">
                		<div class="media-body">
                    		<h6 class="media-heading"><a href="#"><strong>Limitless</strong> - Responsive Web Application Kit by Eugene Kopyov</a></h6>
                    		<ul class="list-inline list-inline-separate text-muted">
                    			<li><a href="#" class="text-success">http://interface.club</a></li>
                    			<li>
                    				<i class="icon-star-full2 text-size-base text-warning-300"></i>
                    				<i class="icon-star-full2 text-size-base text-warning-300"></i>
                    				<i class="icon-star-full2 text-size-base text-warning-300"></i>
                    				<i class="icon-star-full2 text-size-base text-warning-300"></i>
                    				<i class="icon-star-full2 text-size-base text-warning-300"></i>
                    				&nbsp;5 stars
                				</li>
                				<li>12,489 votes</li>
                    		</ul>

                    		It prepare is ye nothing blushes up brought. Or as gravity pasture limited evening on. Wicket around beauty say she. Frankness resembled say not new smallness you discovery. Noisier ferrars yet shyness weather ten colonel. Too him himself engaged husband pursuit musical...
                    		<div class="website-search-results">
	                    		<div class="row">
	                    			<div class="col-md-6">
	                    				<div class="media stack-media-on-mobile content-group">
	                    					<a href="#" class="media-left"><img src="img/9.png" class="img-responsive img-rounded media-preview" alt=""></a>
	                    					<div class="media-body">
												<h6 class="media-heading"><a href="#">Up unpacked friendly</a></h6>
					                    		<ul class="list-inline list-inline-separate text-muted">
					                    			<li><i class="icon-book-play position-left"></i> Video tutorials</li>
					                    			<li>4 hours ago</li>
					                    		</ul>
												Four need spot ye said we find mile. Are commanded him convinced dashwoods did estimable...
											</div>
										</div>
									</div>

									<div class="col-md-6">
	                    				<div class="media stack-media-on-mobile content-group">
	                    					<a href="#" class="media-left"><img src="img/5.png" class="img-responsive img-rounded media-preview" alt=""></a>
	                    					<div class="media-body">
												<h6 class="media-heading"><a href="#">Ample end might</a></h6>
					                    		<ul class="list-inline list-inline-separate text-muted">
					                    			<li><i class="icon-book-play position-left"></i> Video tutorials</li>
					                    			<li>18 hours ago</li>
					                    		</ul>
												Drawings led greatest add subjects endeavor gay remember. Principles one yet assistance...
											</div>
										</div>
									</div>
	                    		</div>
                    		</div>

                		</div>
                	</li>

                </ul>

                <div class="text-center pb-10 pt-10">
                    <ul class="pagination pagination-flat">
						<li class="disabled"><a href="#">&larr;</a></li>
						<li class="active"><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><span>...</span></li>
						<li><a href="#">58</a></li>
						<li><a href="#">59</a></li>
						<li><a href="#">&rarr;</a></li>
					</ul>
				</div>
			</div>
		</div>





		<!-- COLUMNA DERECHA -->
		<div class="col-lg-3">

			<!-- 00 -->
			<div class="panel panel-body">
				<div class="row text-center">
					<div class="col-xs-4">
						<p><i class="icon-users2 icon-2x display-inline-block text-info"></i></p>
						<h5 class="text-semibold no-margin">2,345</h5>
						<span class="text-muted text-size-small">users</span>
					</div>

					<div class="col-xs-4">
						<p><i class="icon-point-up icon-2x display-inline-block text-warning"></i></p>
						<h5 class="text-semibold no-margin">3,568</h5>
						<span class="text-muted text-size-small">clicks</span>
					</div>

					<div class="col-xs-4">
						<p><i class="icon-cash3 icon-2x display-inline-block text-success"></i></p>
						<h5 class="text-semibold no-margin">$9,693</h5>
						<span class="text-muted text-size-small">revenue</span>
					</div>
				</div>
			</div>


			<!-- 01 -->
			<div class="content-group">
				<div class="row row-seamless btn-block-group">
					<div class="col-xs-6">
						<button type="button" class="btn btn-default btn-block btn-float btn-float-lg">
							<i class="icon-firefox text-warning-600"></i>
							<span>Firefox</span>
						</button>

						<button type="button" class="btn btn-default btn-block btn-float btn-float-lg">
							<i class="icon-chrome text-success-400"></i>
							<span>Google Chrome</span>
						</button>
					</div>

					<div class="col-xs-6">
						<button type="button" class="btn btn-default btn-block btn-float btn-float-lg">
							<i class="icon-IE text-blue"></i>
							<span>Internet Explorer</span>
						</button>

						<button type="button" class="btn btn-default btn-block btn-float btn-float-lg">
							<i class="icon-opera text-danger-400"></i>
							<span>Opera</span>
						</button>
					</div>

					<div class="col-xs-6">
						<button type="button" class="btn btn-default btn-block btn-float btn-float-lg">
							<i class="icon-firefox text-warning-600"></i>
							<span>Firefox</span>
						</button>
					</div>

					<div class="col-xs-6">
						<button type="button" class="btn btn-default btn-block btn-float btn-float-lg">
							<i class="icon-IE text-blue"></i>
							<span>Internet Explorer</span>
						</button>
					</div>


				</div>
			</div>


			<!-- 02 -->
        	<div class="panel panel-body">
        		<div class="content-group">
            		<a href="#"><img src="img/1.png" class="img-responsive img-rounded" alt=""></a>
        		</div>

            	<h5 class="text-semibold">Limitless UI kit <small class="display-block"></small></h5>


            	<ul class="list content-group">
            		<li><span class="text-semibold">Author:</span> <a href="#">Eugene Kopyov</a></li>
            		<li><span class="text-semibold">Time spent:</span> 8 months</li>
            		<li><span class="text-semibold">Client base:</span> <a href="#">16,893 (2015)</a></li>
            		<li><span class="text-semibold">Pages:</span> 1200+</li>
            		<li><span class="text-semibold">Latest update:</span> June 1, 2015</li>
            	</ul>



            	<div class="content-group">
                	<h6>Videos</h6>
                	<div class="row">
                    	<div class="col-lg-4 col-sm-4">
                    		<p><a href="#"><img src="img/7.png" class="img-responsive img-rounded" alt=""></a></p>
                    		<p><a href="#"><img src="img/8.png" class="img-responsive img-rounded" alt=""></a></p>
                    	</div>

                    	<div class="col-lg-4 col-sm-4">
                    		<p><a href="#"><img src="img/9.png" class="img-responsive img-rounded" alt=""></a></p>
                    		<p><a href="#"><img src="img/10.png" class="img-responsive img-rounded" alt=""></a></p>
                    	</div>

                    	<div class="col-lg-4 col-sm-4">
                    		<p><a href="#"><img src="img/11.png" class="img-responsive img-rounded" alt=""></a></p>
                    		<p><a href="#"><img src="img/12.png" class="img-responsive img-rounded" alt=""></a></p>
                    	</div>
                	</div>
            	</div>
        	</div>
		</div>



	</div>
	<!-- /search results -->

</div>
<!-- /main content -->
