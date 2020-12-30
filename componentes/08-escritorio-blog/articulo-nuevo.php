


<!-- Main content -->
<div class="content-wrapper">
	<!-- Cabecera Blog -->
	<?php //require_once('cabecera-blog.php'); ?>

	<form  action="articulo-nuevo-guardar.php" method="post">

		<div class="panel-heading">
			<h2 class="panel-title text-semibold">Publicación: Nuevo Artículo</h2>
			<div class="heading-elements">
				<button type="submit" class="btn btn-primary"> <i class="icon-file-plus position-left"></i>Guardar Publicación</button>
				<a type="button" class="btn btn-danger" href="../08-escritorio-blog/index.php?p=listarpublicaciones"> <i class="icon-undo position-left"></i>Volver</a>
			</div>
		</div>


		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-white border-left-xlg border-left-primary">





					<!-- Nueva Publicación -->
					<div class="panel-body">

						<!-- Datos Principales -->
						<div class="col-lg-12">
							<!-- Titulo -->
							<div class="form-group">
								<div class="row">
									<div class="col-md-12">
										<h6 class="text-semibold">Título del Artículo</h6>
										<input type="text" class="form-control" placeholder="Ingrese el nombre del artículo" name="TxtTitulo">
									</div>
								</div>
							</div>

							<!-- Introduccion -->
							<div class="form-group">
								<div class="row">
									<div class="col-md-12">
									<h6 class="text-semibold">Introducción</h6>
										<textarea rows="3" cols="5" class="form-control" placeholder="Ingrese un texto de introducción del artículo" name="TxtIntroduccion"></textarea>
									</div>
								</div>
							</div>
						</div>


						<!-- Lado de Opciones de Publicación -->
						<div class="col-lg-12">

							<!-- Tabulador -->
							<div class="">
								<ul class="nav nav-lg nav-tabs nav-tabs-bottom nav-tabs-toolbar no-margin">
									<li class="active">
										<a href="#TabContenido" data-toggle="tab">
											<i class="icon-menu7 position-left"></i> Contenido
										</a>
									</li>
									<li>
										<a href="#TabConfigurar" data-toggle="tab">
											<i class="icon-people position-left"></i> Configurar
										</a>
									</li>
									<li>
										<a href="#TabSEO" data-toggle="tab">
											<i class="icon-people position-left"></i> SEO
										</a>
									</li>
									<li>
										<a href="#TabFacebook" data-toggle="tab">
											<i class="icon-people position-left"></i> Facebook
										</a>
									</li>
									<li>
										<a href="#TabInformacion" data-toggle="tab">
											<i class="icon-people position-left"></i> Información
										</a>
									</li>
								</ul>


								<div class="tab-content">

									<!-- TAB - Contenido -->
									<div class="tab-pane fade in active" id="TabContenido">

										<div class="panel-body">
											<div class="form-group" style="margin-left:-20px !important; margin-right:-20px !important;">
												<textarea rows="20" cols="5" class="form-control" name="TxtContenido" placeholder="Ingrese el contenido del artículo"></textarea>
											</div>


										</div>

									</div>

									<!-- Configurar -->
									<div class="tab-pane fade" id="TabConfigurar">
										<div class="panel-body">

											<!-- Categoria del Artículo -->
											<div class="form-group">
												<div class="row">
													<div class="col-md-12">
														<h6 class="text-semibold">Categoría del Artículo</h6>
														<select class="form-control" name="LstCategoria">
															<option value="c1">Cate 01</option>
															<option value="c2">Cate 02</option>
															<option value="c3">Cate 03</option>
															<option value="c4">Cate 04</option>
														</select>
													</div>
												</div>
											</div>

											<!-- Estado del Artículo-->
											<div class="form-group">
												<div class="row">
													<div class="col-md-12">
														<h6 class="text-semibold">Estado del Artículo</h6>
														<select class="form-control" name="LstEstado">
															<option value="1">Publicado</option>
															<option value="0">Despublicado</option>
														</select>
													</div>
												</div>
											</div>

											<!-- Aceptar Comentarios en el Artículo -->
											<div class="form-group">
												<div class="row">
													<div class="col-md-12">
														<h6 class="text-semibold">Comentarios en el Artículo</h6>
														<select class="form-control" name="LstComentarios">
															<option value="1">Aceptar Comentarios</option>
															<option value="0">Sin Comentarios</option>
														</select>
													</div>
												</div>
											</div>

											<!-- Alias -->
											<div class="form-group">
												<div class="row">
													<div class="col-md-12">
														<h6 class="text-semibold">Alias del Artículo</h6>
														<input type="text" class="form-control" placeholder="Ingrese el alias del artículo" name="TxtAlias">
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- SEO -->
									<div class="tab-pane fade" id="TabSEO">
										<div class="panel-body">

											<!-- MetaKey -->
											<div class="form-group">
												<div class="row">
													<div class="col-md-12">
														<h6 class="text-semibold">Meta Keywords</h6>
														<p>Separas las palabras con una COMA   ( , )</p>
														<textarea rows="3" cols="5" class="form-control" name="TxtMetaKeywords" placeholder="Ingrese las palabras clave para su artículo"></textarea>
													</div>
												</div>
											</div>

											<!-- MetaDescription -->
											<div class="form-group">
												<div class="row">
													<div class="col-md-12">
														<h6 class="text-semibold">Meta Description</h6>
														<textarea rows="3" cols="5" class="form-control" name="TxtMetaDescription" placeholder="Ingrese la Descripción META del artículo"></textarea>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- Facebook -->
									<div class="tab-pane fade" id="TabFacebook">
										<div class="panel-body">
											<!-- Titulo Actividades -->
											<div class="content-group-lg">
												<h4 class="text-semibold">Compartir en Facebook</h4>
												<p>
													Al compartir el enlace de tu artículo en facebook, este llamara el Título, la descripción y la imágen de tu artículo.
													Desde aquí puedes especificar el nombre de tu artículo y descripción al momento de ser compartido en facebook.
												</p>
											</div>

											<!-- Facebook Titulo -->
											<div class="form-group">
												<div class="row">
													<div class="col-md-12">
														<h6 class="text-semibold">Facebook Título del Artículo</h6>
														<input type="text" class="form-control" name ="TxtFacebookTitulo" placeholder="Ingrese le Título del artículo al compartir en Facebook">
													</div>
												</div>
											</div>

											<!-- Facebook Descripcion -->
											<div class="form-group">
												<div class="row">
													<div class="col-md-12">
														<h6 class="text-semibold">Facebook Description</h6>
														<textarea rows="3" cols="5" class="form-control" name="TxtFacebookDescripcion" placeholder="Ingrese la descripción del artículo al compartir en Facebook"></textarea>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!-- Informacion -->
									<div class="tab-pane fade" id="TabInformacion">
										<div class="panel-body">

											<div class="content-group-lg">
												<h4 class="text-semibold">Información del Artículo</h4>
												<p>
													Aquí se detalla toda la información del artículo. Recordar que cada artículo recibe diversos puntos en base a comentarios, Me Gusta y Votaciones.
												</p>
											</div>

											<!-- Fecha de Creación -->
											<div class="form-group">
												<div class="row">
													<div class="col-md-12">
														<h6 class="text-semibold">Fecha de Creación</h6>
														<input type="text" class="form-control" name ="TxtInfoFecha" readonly="readonly" value="28/06/2018">
													</div>
												</div>
											</div>

											<!-- Cantidad Visitas -->
											<div class="form-group">
												<div class="row">
													<div class="col-md-12">
														<h6 class="text-semibold">Cantidad de Visitas</h6>
														<input type="text" class="form-control" name ="TxtInfoVisitas" readonly="readonly" value="0">
													</div>
												</div>
											</div>

											<!-- Cantidad Me Gusta -->
											<div class="form-group">
												<div class="row">
													<div class="col-md-12">
														<h6 class="text-semibold">Cantidad de Me Gusta</h6>
														<input type="text" class="form-control" name ="TxInfoMeGusta" readonly="readonly" value="0">
													</div>
												</div>
											</div>

											<!-- Cantidad Comentarios -->
											<div class="form-group">
												<div class="row">
													<div class="col-md-12">
														<h6 class="text-semibold">Cantidad de Comentarios</h6>
														<input type="text" class="form-control" name ="TxtInfoComentarios" readonly="readonly" value="0">
													</div>
												</div>
											</div>

											<!-- Cantidad Votos -->
											<div class="form-group">
												<div class="row">
													<div class="col-md-12">
														<h6 class="text-semibold">Cantidad de Votos</h6>
														<input type="text" class="form-control" name ="TxtInfoVoto" readonly="readonly" value="0">
													</div>
												</div>
											</div>

											<!-- Creador -->
											<div class="form-group">
												<div class="row">
													<div class="col-md-12">
														<h6 class="text-semibold">Este artículo pertenece a</h6>
														<input type="text" class="form-control" name ="TxtInfoCreador" readonly="readonly" value="Vanesa Fiorela Castañeda">
													</div>
												</div>
											</div>

											<!-- Blog -->
											<div class="form-group">
												<div class="row">
													<div class="col-md-12">
														<h6 class="text-semibold">Este artículo pertenece al blog</h6>
														<input type="text" class="form-control" name ="TxtInfoBlog" readonly="readonly" value="Blog de Vanecast">
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div>

						</div>

					</div>






				</div>
			</div>
		</div>




	</form>









</div>
<!-- /main content -->
