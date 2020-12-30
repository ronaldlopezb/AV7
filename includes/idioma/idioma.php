<?php
//Crear una funciona que me traiga todas las lineas de idioma del apartado login.. y les asigne una variable del tipo ES-COMPONENTE-VARIABLE = TEXTO
//require_once('../../includes/bd/conectarbd.php'); // Debe Abrir desde la Pagina de dodne se llama en este caso no se llama en IDIOMA.PHP sino en INDEX.PHP de LOGIN

$NombreComponente=$ComponentePagina;

//Esta vartiable $TablaNombre siempre será "tablaidioma_" unido con la variable de idioma (es, en, mx... etc) esta tabla debe existir en la BD
$TablaNombre = "tablaidiomas_".$IdiomaWeb;

$SqlIdioma = "select * from ".$TablaNombre." where IdiomaCode='".$IdiomaWeb."' and Componente='".$NombreComponente."'";
$DatosIdioma = mysql_query($SqlIdioma);

while ($lang = mysql_fetch_array($DatosIdioma, MYSQL_ASSOC)) {
	//Aqui se cargara las opciones dependiendo la Categoria
	$IdiomaCodeBD = $lang["IdiomaCode"];
	$ComponenteBD = $lang["Componente"];
	$VariableBD = $lang["Variable"];
	$TextoBD = $lang["Texto"];
		
	//$NombreVariable = $IdiomaCodeBD.'-'.$ComponenteBD.'-'.$VariableBD;
	${$IdiomaCodeBD.'-'.$ComponenteBD.'-'.$VariableBD} = $TextoBD;
	//echo $NombreVariable." - ".${$IdiomaCodeBD.'-'.$ComponenteBD.'-'.$VariableBD};
}

function VariableIdioma($IdiomaCode,$Componente,$Variable){
	global ${$IdiomaCode.'-'.$Componente.'-'.$Variable};
	return ${$IdiomaCode.'-'.$Componente.'-'.$Variable};;
}


function MostrarIdioma($IdiomaCode,$Componente,$Variable){
	global ${$IdiomaCode.'-'.$Componente.'-'.$Variable};
	echo ${$IdiomaCode.'-'.$Componente.'-'.$Variable};;
}?>