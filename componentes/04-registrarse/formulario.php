<!-- Main content -->
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">

            <form class="login-form" action="validar-registro.php" method="post">
                <h1> Crear Nueva Cuenta<small><br>* Todos los campos son requeridos</small></h1>
                
                <!-- INICIA - ERROR DE CLAVES NO COINCIDEN Y CORREO YA UTILIZADO -->
                <?php
                    if (isset($_GET['error'])){ // isset ve si existe esa variable
                        //Claves no Coinciden
                        if ($ErrorNumero == 1){
                            echo'<div class="content-group-lg">';
                            echo '<div class="alert alert-danger alert-styled-left">';
                                echo '<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Cerrar</span></button>';
                                echo '<strong>LAS CONTRASEÑAS NO COINCIDEN</strong> <BR>Verifique que las contraseñas sean iguales';
                            echo '</div>';
                            echo '</div>';
                        }
                        //Correo ya usado
                        if ($ErrorNumero == 2){
                            echo'<div class="content-group-lg">';
                            echo '<div class="alert alert-danger alert-styled-left">';
                                echo '<button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Cerrar</span></button>';
                                echo '<strong>EL CORREO YA EXISTE</strong> <BR>Ya existe una cuenta utilizando este correo electrónico.';
                            echo '</div>';
                            echo '</div>';
                        }
                    }
                ?>
                <!-- TERMINA - ERROR DE CLAVES NO COINCIDEN -->
                

                <!-- INICIO - INFORMACION DE ACCESO -->
                <div class="row">
                    <div class="panel panel-white border-left-xlg border-left-success">
                        <div class="panel-heading">   
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="icon-object border-success text-success" style="float: right;">
                                        <i class="icon-user-lock"></i>
                                    </div>
                                    <div style="float: left; padding-top: 20px;"> 
                                        <h3 class="panel-title">Información de Acceso</h3>
                                        <small>Verificar correctamente la información ingresada</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                       
                        
                        <!-- INICIO - CUERPO DEL PANEL - ACCESO -->
                        <div class="panel-body">
                            <!-- INICIO - FILA DE CAMPOS -->
                            <div class="row">

                                <!-- INICIO - CORREO ELECTRONICO -->
                                <div class="col-md-4">      
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group has-feedback has-feedback-left">
                                              <input type="email" name="TxtEmail" class="form-control required" placeholder="Correo Electrónico" maxlength="50" tabindex="1" required>
                                              <div class="form-control-feedback">
                                                <i class="icon-mention text-muted"></i>
                                              </div>
                                            </div>
                                        </div>

                                    </div>
                                </div> 
                                <!-- TERMINA - CORREO ELECTRONICO -->


                                <!-- INICIO - CONTRASEÑA 01 -->
                                <div class="col-md-4">      
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group has-feedback has-feedback-left">
                                              <input type="password" name="TxtClave01" class="form-control required" placeholder="Crear contraseña" maxlength="20" tabindex="2" required>
                                              <div class="form-control-feedback">
                                                <i class="icon-user-lock text-muted"></i>
                                              </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                                <!-- TERMINA - CONTRASEÑA 01 -->
                                
                                
                                <!-- INICIO - CONTRASEÑA 02 -->
                                <div class="col-md-4">      
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group has-feedback has-feedback-left">
                                                <input type="password" name="TxtClave02" class="form-control required" placeholder="Repetir Contraseña" maxlength="20" tabindex="3" required>
                                                <div class="form-control-feedback">
                                                    <i class="icon-user-lock text-muted"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- TERMINA - CONTRASEÑA 02 -->
                            </div>
                            <!-- TERMINA - FILA DE CAMPOS -->
                        </div>
                        <!-- TERMINA - CUERPO DEL PANEL - ACCESO -->
                    </div>
                </div>

            
                
                <!-- INICIO - INFORMACION PERSONAL -->
                <div class="row">
                    <div class="panel panel-white border-left-xlg border-left-primary">
                        <div class="panel-heading">   
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="icon-object border-blue text-blue" style="float: right;">
                                        <i class="icon-reading"></i>
                                    </div>
                                    <div style="float: left; padding-top: 20px;"> 
                                        <h3 class="panel-title">Información Personal</h3>
                                        <small>Bríndenos información sobre usted</small>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="panel-body">
                            <div class="row">
                                <!-- NOMBRES -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nombres: <span class="text-danger">*</span></label>
                                        <input type="text" name="TxtNombres" class="form-control required" tabindex="4" placeholder="Ingrese Nombres" required>
                                    </div>
                                </div>

                                <!-- PAIS -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>País: <span class="text-danger">*</span></label>
                                        <select name="CboPais" data-placeholder="Elegir País" tabindex="7" class="select" required>
                                            <option></option>

                                            <optgroup label="Sudamérica">
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Brasil">Brasil</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="Colombia">Colombia</option>

                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Perú">Perú</option>
                                                    <option value="Surinam">Surinam</option>

                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Venezuela">Venezuela</option>
                                            </optgroup>

                                            <optgroup label="América del norte, central y las Antillas">
                                                    <option value="Antigua y Barbuda">Antigua y Barbuda</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belice">Belice</option>
                                                    <option value="Canadá">Canadá</option>

                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Estados Unidos">Estados Unidos</option>

                                                    <option value="Granada">Granada</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Haití">Haití</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Jamaica">Jamaica</option>

                                                    <option value="México">México</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Panamá">Panamá</option>
                                                    <option value="República Dominicana">República Dominicana</option>
                                                    <option value="San Cristóbal y Nieves">San Cristóbal y Nieves</option>

                                                        <option value="San Vicente y las Granadinas">San Vicente y las Granadinas</option>
                                                        <option value="Santa Lucía">Santa Lucía</option>
                                                        <option value="Trinidad y Tobago">Trinidad y Tobago</option>
                                            </optgroup>

                                            <optgroup label="Europa">
                                                        <option value="Albania">Albania</option>
                                                        <option value="Alemania">Alemania</option>
                                                        <option value="Andorra">Andorra</option>
                                                        <option value="Armenia">Armenia</option>

                                                        <option value="Austria">Austria</option>
                                                        <option value="Azerbaiyán">Azerbaiyán</option>
                                                        <option value="Bélgica">Bélgica</option>
                                                        <option value="Bielorrusia">Bielorrusia</option>

                                                        <option value="Bosnia-Herzegovina">Bosnia-Herzegovina</option>
                                                        <option value="Bulgaria">Bulgaria</option>
                                                        <option value="Chipre">Chipre</option>
                                                        <option value="Ciudad del Vaticano">Ciudad del Vaticano</option>

                                                        <option value="Croacia">Croacia</option>
                                                        <option value="Dinamarca">Dinamarca</option>
                                                        <option value="Eslovaquia">Eslovaquia</option>
                                                        <option value="Eslovenia">Eslovenia</option>

                                                        <option value="España">España</option>
                                                        <option value="Estonia">Estonia</option>
                                                        <option value="Finlandia">Finlandia</option>
                                                        <option value="Francia">Francia</option>

                                                        <option value="Georgia">Georgia</option>
                                                        <option value="Grecia">Grecia</option>
                                                        <option value="Hungría">Hungría</option>
                                                        <option value="Irlanda">Irlanda</option>

                                                        <option value="Islandia">Islandia</option>
                                                        <option value="Italia">Italia</option>
                                                        <option value="Kosovo">Kosovo</option>
                                                        <option value="Letonia">Letonia</option>

                                                        <option value="Liechtenstein">Liechtenstein</option>
                                                        <option value="Lituania">Lituania</option>
                                                        <option value="Luxemburgo">Luxemburgo</option>
                                                        <option value="República de Macedonia">República de Macedonia</option>

                                                        <option value="Malta">Malta</option>
                                                        <option value="Moldavia">Moldavia</option>
                                                        <option value="Mónaco">Mónaco</option>
                                                        <option value="Montenegro">Montenegro</option>

                                                        <option value="Noruega">Noruega</option>
                                                        <option value="Holanda - Países Bajos">Holanda - Países Bajos</option>
                                                        <option value="Polonia">Polonia</option>
                                                        <option value="Portugal">Portugal</option>

                                                        <option value="Reino Unido">Reino Unido</option>
                                                        <option value="República Checa">República Checa</option>
                                                        <option value="Rumanía">Rumanía</option>
                                                        <option value="Rusia">Rusia</option>

                                                        <option value="San Marino">San Marino</option>
                                                        <option value="Serbia">Serbia</option>
                                                        <option value="Suecia">Suecia</option>
                                                        <option value="Suiza">Suiza</option>

                                                        <option value="Turquía">Turquía</option>
                                                        <option value="Ucrania">Ucrania</option>
                                            </optgroup>

                                            <optgroup label="Asia">
                                                        <option value="Afganistán">Afganistán</option>
                                                        <option value="Arabia Saudí">Arabia Saudí</option>
                                                        <option value="Baréin">Baréin</option>
                                                        <option value="Bangladés">Bangladés</option>
                                                        <option value="Birmania">Birmania</option>

                                                        <option value="Bután">Bután</option>
                                                        <option value="Brunéi">Brunéi</option>
                                                        <option value="Camboya">Camboya</option>
                                                        <option value="Catar">Catar</option>
                                                        <option value="China">China</option>

                                                        <option value="Corea del Norte">Corea del Norte</option>
                                                        <option value="Corea del Sur">Corea del Sur</option>
                                                        <option value="Emiratos Árabes Unidos">Emiratos Árabes Unidos</option>
                                                        <option value="Filipinas">Filipinas</option>
                                                        <option value="India">India</option>

                                                        <option value="Indonesia">Indonesia</option>
                                                        <option value="Irak">Irak</option>
                                                        <option value="Irán">Irán</option>
                                                        <option value="Israel">Israel</option>
                                                        <option value="Japón">Japón</option>

                                                        <option value="Jordania">Jordania</option>
                                                        <option value="Kazajistán">Kazajistán</option>
                                                        <option value="Kirguistán">Kirguistán</option>
                                                        <option value="Kuwait">Kuwait</option>
                                                        <option value="Laos">Laos</option>

                                                        <option value="Líbano">Líbano</option>
                                                        <option value="Malasia">Malasia</option>
                                                        <option value="Maldivas">Maldivas</option>
                                                        <option value="Mongolia">Mongolia</option>
                                                        <option value="Nepal">Nepal</option>

                                                        <option value="Omán">Omán</option>
                                                        <option value="Pakistán">Pakistán</option>
                                                        <option value="Estado de Palestina">Estado de Palestina</option>
                                                        <option value="República de China">República de China</option>
                                                        <option value="Singapur">Singapur</option>

                                                        <option value="Siria">Siria</option>
                                                        <option value="Sri Lanka">Sri Lanka</option>
                                                        <option value="Tailandia">Tailandia</option>
                                                        <option value="Tayikistán">Tayikistán</option>
                                                        <option value="Timor Oriental">Timor Oriental</option>

                                                        <option value="Turkmenistán">Turkmenistán</option>
                                                        <option value="Uzbekistán">Uzbekistán</option>
                                                        <option value="Vietnam">Vietnam</option>
                                                        <option value="Yemen">Yemen</option>
                                            </optgroup>

                                            <optgroup label="África">
                                                        <option value="Angola">Angola</option>
                                                        <option value="Argelia">Argelia</option>
                                                        <option value="Benín">Benín</option>
                                                        <option value="Botsuana">Botsuana</option>
                                                        <option value="Burkina Faso">Burkina Faso</option>

                                                        <option value="Burundi">Burundi</option>
                                                        <option value="Camerún">Camerún</option>
                                                        <option value="Cabo Verde">Cabo Verde</option>
                                                        <option value="Chad">Chad</option>
                                                        <option value="Comoras">Comoras</option>

                                                        <option value="Congo">Congo</option>
                                                        <option value="Costa de Marfil">Costa de Marfil</option>
                                                        <option value="Egipto">Egipto</option>
                                                        <option value="Eritrea">Eritrea</option>
                                                        <option value="Etiopía">Etiopía</option>

                                                        <option value="Gabón">Gabón</option>
                                                        <option value="Gambia">Gambia</option>
                                                        <option value="Ghana">Ghana</option>
                                                        <option value="Guinea">Guinea</option>
                                                        <option value="Guinea Bisáu">Guinea Bisáu</option>

                                                        <option value="Guinea Ecuatorial">Guinea Ecuatorial</option>
                                                        <option value="Kenia">Kenia</option>
                                                        <option value="Lesoto">Lesoto</option>
                                                        <option value="Liberia">Liberia</option>
                                                        <option value="Libia">Libia</option>

                                                        <option value="Madagascar">Madagascar</option>
                                                        <option value="Malaui">Malaui</option>
                                                        <option value="Malí">Malí</option>
                                                        <option value="Marruecos">Marruecos</option>
                                                        <option value="Mauricio">Mauricio</option>

                                                        <option value="Mauritania">Mauritania</option>
                                                        <option value="Mozambique">Mozambique</option>
                                                        <option value="Namibia">Namibia</option>
                                                        <option value="Níger">Níger</option>
                                                        <option value="Nigeria">Nigeria</option>


                                                        <option value="República Centroafricana">República Centroafricana</option>
                                                        <option value="República Democrática del Congo">República Democrática del Congo</option>
                                                        <option value="Ruanda">Ruanda</option>
                                                        <option value="Senegal">Senegal</option>
                                                        <option value="Seychelles">Seychelles</option>

                                                        <option value="Sierra Leona">Sierra Leona</option>
                                                        <option value="Somalia">Somalia</option>
                                                        <option value="Sudáfrica">Sudáfrica</option>
                                                        <option value="Sudán">Sudán</option>
                                                        <option value="Sudán del Sur">Sudán del Sur</option>

                                                        <option value="Suazilandia">Suazilandia</option>
                                                        <option value="Tanzania">Tanzania</option>
                                                        <option value="Togo">Togo</option>
                                                        <option value="Túnez">Túnez</option>
                                                        <option value="Uganda">Uganda</option>

                                                        <option value="Yibuti">Yibuti</option>
                                                        <option value="Zambia">Zambia</option>
                                                        <option value="Zimbabue">Zimbabue</option>
                                            </optgroup>

                                            <optgroup label="Oceanía">
                                                        <option value="Australia">Australia</option>
                                                        <option value="Estados Federados de Micronesia">Estados Federados de Micronesia</option>
                                                        <option value="Fiyi">Fiyi</option>
                                                        <option value="Kiribati">Kiribati</option>
                                                        <option value="Islas Marshall">Islas Marshall</option>

                                                        <option value="Nauru">Nauru</option>
                                                        <option value="Nueva Zelanda">Nueva Zelanda</option>
                                                        <option value="Palaos">Palaos</option>
                                                        <option value="Papúa Nueva Guinea">Papúa Nueva Guinea</option>
                                                        <option value="Samoa">Samoa</option>

                                                        <option value="Tonga">Tonga</option>
                                                        <option value="Tuvalu">Tuvalu</option>
                                                        <option value="Vanuatu">Vanuatu</option>
                                            </optgroup>
                                        </select>

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- APELLIDO PATERNO -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Apellido Paterno: <span class="text-danger">*</span></label>
                                        <input type="text" name="TxtPaterno" class="form-control required" tabindex="5" placeholder="Apellido Paterno" required>
                                    </div>
                                </div>

                                <!-- SEXO -->
                                <div class="col-md-6">
                                    <label>Sexo: <span class="text-danger">*</span></label>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <select name="CboSexo" data-placeholder="Género" tabindex="9" class="select" required>
                                                    <option></option>
                                                    <option value="Hombre">Hombre</option>
                                                    <option value="Mujer">Mujer</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>     
                            </div>

                            <div class="row">
                                <!-- APELLIDO MATERNO -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Apellido Materno: <span class="text-danger">*</span></label>
                                        <input type="text" name="TxtMaterno" tabindex="6" class="form-control required" placeholder="Apellido Materno" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                


                
                <!-- INICIO - TERMINOS Y POLITICAS -->
                <div class="row">
                    <div class="panel panel-white border-left-xlg border-left-warning">
                        <div class="panel-heading">   
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="icon-object border-warning text-warning" style="float: right;">
                                        <i class="icon-lock"></i>
                                    </div>
                                    <div style="float: left; padding-top: 20px;"> 
                                        <h3 class="panel-title">Términos y Políticas</h3>
                                        <small>Debe aceptar los términos y políticas del sitio</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel-body">
                            <!-- INICIO - FILA DE TERMINOS -->
                            <div class="row">
                                <!-- INICIO - ESTOY DE ACUERDO -->
                                <div class="col-md-3">
                                    <div class="form-group">
                                    <h5>Estoy de acuerdo y acepto</h5>
                                    </div>
                                </div>
                                <!-- TERMINA - ESTOY DE ACUERDO -->
                                
                                
                                <!-- INICIO - CHECK 01 -->
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <div>
                                                    <span class="checked">
                                                        <input type="checkbox" tabindex="13" required name="ChkBoletin" checked="checked">
                                                    </span>
                                                </div>
                                                Boletines
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- TERMINA - CHECK 01 -->

                                
                                <!-- INICIO - CHECK 02 -->
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <div>
                                                    <span>
                                                        <input type="checkbox" tabindex="14" required name="ChkTerminos">
                                                    </span>
                                                </div>
                                                <a data-toggle="modal" data-target="#modal_default">Términos y Políticas </a>
                                                
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- TERMINA - CHECK 02 -->
                                
                                
                                <!-- INICIO - BOTON SUBMIT -->
                                <div class="col-md-4">
                                    <button type="submit" tabindex="15" class="btn btn-warning btn-labeled btn-xlg">
                                        Crear Nueva Cuenta <i class="icon-arrow-right14 position-right"></i>
                                    </button>
                                    <br>
                                </div>
                                <!-- TERMINA - BOTON SUBMIT -->
                            </div>
                            <!-- TERMINA - FILA DE TERMINOS -->
                        </div>
                    </div>
                </div>
                <!-- TERMINA - TERMINOS Y POLITICAS -->
            </form>

    </div>
</div>
    <!-- Cierra Main Content -->


<!-- Basic modal -->
<div id="modal_default" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">Términos y Políticas</h5>
            </div>

            <div class="modal-body">
                <?php //echo $RegistroTerminos; ?>
                <p>Aquí se mostrarán los términos de uso.. que deben ser cargados desde la configuración</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Volver</button>
            </div>
        </div>
    </div>
</div>
<!-- /basic modal -->