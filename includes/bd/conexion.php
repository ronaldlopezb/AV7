<?php
    $host="localhost";
    $usuario="root";
    $password="123456";
    $db="av7";
    $Conexion = new mysqli($host,$usuario,$password,$db);
    mysqli_set_charset($Conexion,"utf8");

    $DirectorioGlobal = "/Proyectos/Ronald/AV/av7";
    

    $RutaServidor ='http://'.$_SERVER['HTTP_HOST'].'/'.$DirectorioGlobal.'/'; // ESTA RUTA SIRVE PARA LAS URL DE ARCHIVO O ENLACES... /carpeta/
    $RutaDirectorioServidor = $_SERVER['DOCUMENT_ROOT'].$DirectorioGlobal;
?>
