<?php
// Copnectar a Base de Datos
$servidor = "localhost";
$usuariobd = "root";
$clavebd = "123456";
$bd = "av7";

$DirectorioGlobal = "Ronald/AprendeViendo/av7";

//$conexion = mysql_connect($servidor, $usuariobd, $clavebd) or trigger_error(mysql_error()); //conecto con el Servidor
$conexion = mysqli_connect("localhost", "root", "123456", "av7");


//mysql_select_db($bd, $conexion); //conecto con la BD
//mysqli_query("SET NAMES 'utf8'"); //Esta linea es importante por que hace que todas mis consultas salga con UTF8.. para las Tildes y Ñ

//Varaibles Importantes

$RutaServidor ='http://'.$_SERVER['HTTP_HOST'].'/'.$DirectorioGlobal.'/'; // ESTA RUTA SIRVE PARA LAS URL DE ARCHIVO O ENLACES... /carpeta/
$RutaDirectorioServidor = $_SERVER['DOCUMENT_ROOT'].$DirectorioGlobal;


$IdiomaWeb="es"; // Luego hacer esta variable editable desde la BD en el apartado de configuracion de sistema en el ADMIN

//echo 'Conectado a la BD';
?>