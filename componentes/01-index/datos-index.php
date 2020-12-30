<?php
//VERIFICAMOS SI LA SESION ESTA INICIADA O NO
session_start();

//Base de Datos
//require_once('../../includes/bd/conectarbd.php');
require_once('../../includes/bd/conexion.php');

//Template
require_once('../../template/head.php'); 
require_once('../../template/logo.php'); 
require_once('../../template/user-actividades.php'); 
require_once('../../template/user-mensajes.php'); 
require_once('../../template/user-usuario.php'); 

require_once('../../template/rutas.php'); 
require_once('../../template/menu-principal-contenedor.php'); 
require_once('../../template/menu-flotante.php'); 

require_once('../../template/pie.php'); 



//Cargar Datos Precargados
//require_once($RutaServidor.'includes/precarga/Configuracion.php');  //Configuracion de Sitio
require_once('../../includes/precarga/Configuracion.php');  //Configuracion de Sitio
require_once('../../includes/precarga/DatosUsuario.php');  //Usuario Logeado


//echo '<br>datos index';
?>