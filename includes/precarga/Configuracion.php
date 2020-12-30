<?php
	//Buscar el Primer Registro de Configuración
	$SqlConfig = "select * from tabla_configuracion where IdConfig= 1";
	$DatosConfig=$Conexion->query($SqlConfig); 
	$RegistroConfiguracion = $DatosConfig->fetch_array();

	$ConfigWebTitulo = $RegistroConfiguracion["WebTitulo"]; 
	$ConfigWebEslogan = $RegistroConfiguracion['WebEslogan'];
	$ConfigWebMetaKeySitio = $RegistroConfiguracion['WebMetaKeySitio'];
	$ConfigWebMetaDescription = $RegistroConfiguracion['WebMetaDescription'];
	$ConfigWebFacebookTitulo = $RegistroConfiguracion['WebFacebookTitulo'];
	$ConfigWebFacebookDescripcion = $RegistroConfiguracion['WebFacebookDescripcion'];
	$ConfigWebFacebookFoto = $RegistroConfiguracion['WebFacebookFoto'];
?>