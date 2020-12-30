<?php
// LA SESION DE USUARIO DEBE ESTAR INICIADA PARA PODER VER ESTA PAGINA ////////
session_start();
if(!isset($_SESSION['UsuarioLogeado'])) 
{
  require_once('../../includes/bd/conectarbd.php');
  header("Location: ".$RutaServidor."componentes/01-index/index.php");
  exit();
}
/////////////////////////////////////////////////////////////////////////////


//Base de Datos
require_once('../../includes/bd/conectarbd.php');
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



//Cargar Datos de Usuario Logeado
require_once('../../includes/usuario/DatosUusario.php'); 
?>