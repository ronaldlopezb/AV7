<?php
//Abro la Conexion
	require_once('../../includes/bd/conexion.php');

	//Capturo los Datos Recibidios - POO
	$CorreoAdminSQL = "select * from tabla_configuracion";
	$ResultadoCorreoAdminSQL=$Conexion->query($CorreoAdminSQL);
	$RowAdmin = $ResultadoCorreoAdminSQL->fetch_array();


    $RemitenteAdmin = $RowAdmin['CorreoSistema'];
    $Asunto = 'Nuevo Usuario Registrado';
    $MensajeParte02  = $RowAdmin['NuevoUsuarioCorreoActivacionMensajeParte2'];



    $CuerpoMensaje = '
        <html>
        <head><title>Nuevo Usuario Registrado - Tutores-Fx</title></head>
        <body>
        <h2>Se registro un nuevo Usuario</h2>
        <ul>
            <li>Nombre Completo: '.$Nombre.' '.$Paterno.' '.$Materno.'</li>
            <li>Correo: '.$Email.'</li>
            <li>País: '.$Pais.'</li>
            <li>Fecha: '.$FechaRegistro.'</li>
        </ul>


        '.$MensajeParte02.'
        </body>
        </html>
        ';


///////////////////////////////////////////////////////////////////////////////////
//Enviar Email de Validacion de Cuenta
	//para el envío en formato HTML
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";

	//dirección del remitente
    $headers .= "From: AprendeViendo - Nuevo Usuario <".$RemitenteAdmin.">\r\n";

	//dirección de respuesta, si queremos que sea distinta que la del remitente
    $headers .= "Reply-To: ".$RemitenteAdmin."\r\n";

	//ruta del mensaje desde origen a destino
    $headers .= "Return-path: ".$RemitenteAdmin."\r\n";

	mail($RemitenteAdmin,$Asunto,$CuerpoMensaje,$headers) ;



    //Mostrar
    //echo 'Asunto: '.$Asunto.'<br>';
    //echo 'Correo Admin: '.$RemitenteAdmin.'<br>';
    //echo 'Mensaje parte 02: '.$MensajeParte02.'<br><br><br>';
    //echo 'Correo: '.$CuerpoMensaje;

    //echo'<br><br><br>Enviado correctamente';
?>
