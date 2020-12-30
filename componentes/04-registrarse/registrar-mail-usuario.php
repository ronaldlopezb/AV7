<?php
//Abro la Conexion
	require_once('../../includes/bd/conexion.php');

	//Capturo los Datos Recibidios - POO
	$CorreoUserSQL = "select * from tabla_configuracion";
	$ResultadoCorreoUserSQL=$Conexion->query($CorreoUserSQL);
	$RowUser = $ResultadoCorreoUserSQL->fetch_array();

    $RemitenteAdmin = $RowUser['CorreoSistema'];
	$Asunto = $RowUser['NuevoUsuarioCorreoAsunto'];


// NUEVO MODELO DE CORREO ELECTRONICO --- ACTIVAR NUEVA CUENTA
$CuerpoMensaje = '
    <html style="background: #fbfbfb">
        <head>
            <title>Crear Cuenta - AprendeViendo</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
            <meta http-equiv="Content-Type" content="text/html; ">


            <style type="text/css">
                * {
                    -ms-text-size-adjust:100%;
                    -webkit-text-size-adjust:none;
                    -webkit-text-resize:100%;
                    text-resize:100%;
                }

                body { background: #fbfbfb }


                @media only screen and (min-width: 501px) and (max-width: 768px) {
                    table {width: 475px !important; margin:auto!important;}
                    td[class=header-top-td-link]{display: block; text-align: center !important; width: 475px !important; margin:auto !important;line-height: 55px;}
                    td[class=icon-td]{display: none !important}
                    img[class=logo] {display: block; margin: auto;}
                    img[class=guide-img] {width: 475px; display: block;}
                }

                @media only screen and (min-width: 321px) and (max-width: 500px) {
                    table {width: 300px !important; }
                    td[class=header-top-td],
                    td[class=header-top-td-link]{display: block; width: 300px !important; margin:auto !important;line-height: 30px;}
                    td[class=icon-td]{display: none !important}
                    td[class=td-login] {display: block; width: 100% !important;}
                    td[class=td-mdp] {display: block; width: 100% !important;}
                    img[class=logo] {display: block; margin: auto;}
                    p[class=link-top]{text-align: center !important; line-height: 20px}
                    p[class=link-top]{width: auto !important}
                    p[class=td-login-txt-left]{text-align: center !important}
                    p[class=td-login-txt-right]{text-align: center !important}
                    img[class=guide-img] {width: 300px; display: block; margin: auto;}
                    td[class="icon-order-conf"] {padding-right: 15px; width: 15% !important;}
                }

                @media only screen and (max-width: 320px){
                    table {width: 270px !important; }
                    td[class=header-top-td],
                    td[class=header-top-td-link]{display: block; width: 270px !important; margin:auto !important;line-height: 30px;}
                    td[class=icon-td]{display: none !important}
                    td[class=td-login] {display: block; width: 100% !important;}
                    td[class=td-mdp] {display: block; width: 100% !important;}
                    img[class=logo] {max-width: 100%; margin:auto !important; display: block}
                    p[class=link-top]{text-align: center !important; width: auto !important; line-height: 20px}
                    p[class=td-login-txt-left]{text-align: center !important}
                    p[class=td-login-txt-right]{text-align: center !important}
                    img[class=guide-img] {width: 270px; display: block;}
                    td[class="icon-order-conf"] {padding-right: 15px; width: 15% !important;}
                }
            </style>
        </head>

        <body marginwidth="0" marginheight="0" leftmargin="0" topmargin="0" bgcolor="#fbfbfb" style="-webkit-text-size-adjust:none;background: #fbfbfb">
            <!--[if gte mso 12]>
                <style>
                    .btn{padding:10px !important;}
                    .btn a{padding:0 !important;}
                </style>
            <![endif]-->
            <table id="Table_01" align="center" width="600" cellpadding="0" cellspacing="0" border="0" bgcolor="#fbfbfb" style="background: #fbfbfb">
                <!-- Cabecera Margenes -->
                <tr>
                    <td height="36" width="100%" align="left">
                    </td>
                </tr>

                <!-- Cabecera-->
                <tr>
                    <td width="100%" valign="bottom" align="left" bgcolor="#fbfbfb">

                        <table width="30%" cellpadding="0" cellspacing="0" align="left">
                            <tr>
                                <!-- Logo -->
                                <td class="header-top-td" width="230" align="left">
                                    <a href="#" target="_blank">
                                        <img class="logo" src="http://addons.prestashop.com/mails/img/addons-logo-email.png" width="230" alt="PrestaShop Addons Logo" border="0" style="border: none; display:block">
                                    </a>
                                </td>
                            </tr>
                        </table>

                        <table width="60%" cellpadding="0" cellspacing="0" align="right">
                            <tr>
                                <!-- Header quicklinks -->
                                <td class="header-top-td-link" valign="bottom" align="right" style="padding: 20px 3px 0;">
                                    <font size="2" face="Tahoma" color="#dce1e5">
                                        <p class="link-top" style="margin: 0 0 5px; font-size: 14px;">
                                            <a href="'.$RutaServidor.'componentes/02-login/index.php" title="Módulos" target="_blank" style="color: #aaaaaa; text-decoration: none; ">
                                                Ingresar
                                            </a> &nbsp; |  &nbsp;

                                            <a href="'.$RutaServidor.'componentes/04-registrarse/index.php" title="Plantillas" target="_blank" style="color: #aaaaaa; text-decoration: none; ">
                                                Registrarse
                                            </a>  &nbsp;| &nbsp;

                                            <a href="'.$RutaServidor.'componentes/03-recuperar-clave/index.php" title="Formaciones" target="_blank" style="color: #aaaaaa; text-decoration: none; ">
                                                Recuperar
                                            </a>
                                        </p>
                                    </font>
                                </td>
                            </tr>
                        </table>

                        <table width="100%" cellpadding="0" cellspacing="0" align="left">
                            <tr>
                                <td width="100%">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- Contenido -->
                <tr>
                    <td>
                        <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff" style="border: 1px solid #dce1e5;padding: 10px">
                            <!-- Título -->
                            <tr>
                                <td width="2%">&nbsp;</td>
                                <td height="75" width="96%" align="left">
                                    <p style="color:#000000;font-family: Tahoma; font-style:normal; font-size:28px; margin: 5px 0;">Creación de tu cuenta</p>
                                </td>
                                <td width="2%">&nbsp;</td>
                            </tr>

                            <!--  Contenido del Correo -->
                            <tr>
                                <td width="2%">&nbsp;</td>
                                <td width="96%" align="left">
                                    <font size="2" face="Arial" color="#000000">
                                        <p style="font-size:14px; margin-top: 5px">
                                            &iexcl;Hola <b>'.$Nombre.' '.$Paterno.'</b>!<br/><br/>
                                        </p>
                                        <p style="font-size:14px; margin-bottom: 20px">
                                            Te damos las gracias por registrarte en Aprendeviendo, enseñanza virtual gratuita.<br/>
                                            Aquí tienes la información de registro que te permitirá acceder a tu cuenta.
                                        </p>
                                    </font>
                                </td>
                                <td width="2%">&nbsp;</td>
                            </tr>

                            <tr>
                                <td width="2%">&nbsp;</td>
                                <td width="96%" align="left">
                                    <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff" style="border-bottom: 1px solid #dce1e5; border-top: 1px solid #dce1e5">
                                        <tr>
                                            <td align="left" width="200" class="td-login">
                                                <font size="2" face="Arial" color="#000000">
                                                    <p style="font-size:14px; text-align: right; margin-bottom: 0; margin-top: 20px" class="td-login-txt-right">
                                                        <b>Tu dirección de correo electrónico</b>:&nbsp;
                                                    </p>
                                                </font>
                                            </td>
                                            <td align="right" width="200" class="td-mdp">
                                                <font size="2" face="Arial" color="#000000">
                                                    <p style="font-size:14px; text-align: left; margin-bottom: 0; margin-top: 20px" class="td-login-txt-right">
                                                        '.$Email.'
                                                    </p>
                                                </font>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left" width="200" class="td-login">
                                                <font size="2" face="Arial" color="#000000">
                                                    <p style="font-size:14px; text-align: right; margin-bottom: 20px" class="td-login-txt-right">
                                                        <b>Tu contraseña</b>:&nbsp;
                                                    </p>
                                                </font>
                                            </td>
                                            <td align="right" width="200" class="td-mdp">
                                                <font size="2" face="Arial" color="#000000">
                                                    <p style="font-size:14px; text-align: left; margin-bottom: 20px" class="td-login-txt-left">
                                                        '.$Clave01.'
                                                    </p>
                                                </font>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="2%">&nbsp;</td>
                            </tr>

                            <tr>
                                <td width="2%">&nbsp;</td>
                                <td width="96%" align="left">
                                    <font size="2" face="Arial" color="#000000">
                                        <p style="font-size:14px; margin-top: 5px">
                                            <br/>
                                        </p>
                                        <p style="font-size:14px; margin-bottom: 20px">
                                            Para poder ingresar y disfrutar de todo el contenido de Apreneviendo, activa tu cuenta, haz clic en el botón más abajo.<br/><br/>
                                            Después de esta activación, ya podrás ingresar en <b>AprendeViendo</b>.
                                        </p>
                                    </font>
                                </td>
                                <td width="2%">&nbsp;</td>
                            </tr>

                            <tr>
                                <td width="2%">&nbsp;</td>
                                <td width="96%" align="center">
                                    <table align="center" style="margin:0 auto;" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td class="btn" align="center" bgcolor="#DF0067" style="font:17px/16px Arial, Helvetica, sans-serif; color:#fff; border-radius:3px;">
                                                <a style="color:#fff; text-decoration:none; display:block; padding:10px;" target="_blank" href="'.$RutaServidor.'componentes/05-activar-cuenta/activar-cuenta.php?code='.$CodigoActivacion.'" title="Activar mi cuenta">
                                                    Activar mi cuenta
                                                </a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td width="2%">&nbsp;</td>
                            </tr>

                            <tr>
                                <td width="2%">&nbsp;</td>
                                <td width="96%" align="left">
                                    <font size="2" face="Arial" color="#000000">
                                        <p style="font-size:14px; margin-top: 20px">
                                            ¡Nos vemos muy pronto en <b>AprendeViendo, enseñanza virtual gratuita</b>!<br/><br/>
                                        </p>
                                        <p style="font-size:14px; margin-bottom: 30px">
                                            El equipo de AprendeViendo.
                                        </p>
                                    </font>
                                </td>
                                <td width="2%">&nbsp;</td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!--  Pie de Email -->
                <tr>
                    <td height="68" width="100%" align="left" bgcolor="#fbfbfb" style="border-bottom: 1px solid #dce1e5;">
                        <font size="2" face="Tahoma">
                            <p style="font-size: 14px; color: #aaaaaa; text-align: center;">
                                <a href="#" title="Twitter" target="_blank" style="color: #aaaaaa; text-decoration: none; ">
                                    Twitter
                                </a>  &nbsp;&#149; &nbsp;

                                <a href="#" title="Facebook" target="_blank" style="color: #aaaaaa; text-decoration: none; ">
                                    Facebook
                                </a> &nbsp; &#149;  &nbsp;

                                <a href="#" title="Google +" target="_blank" style="color: #aaaaaa; text-decoration: none; ">
                                    Google +
                                </a>  &nbsp;&#149; &nbsp;

                                <a href="#" title="Instagram" target="_blank" style="color: #aaaaaa; text-decoration: none; ">
                                    Instagram
                                </a>  &nbsp;&#149; &nbsp;

                                <a  href="#" title="Pinterest" target="_blank" style="color: #aaaaaa; text-decoration: none; ">
                                    Pinterest
                                </a>
                            </p>
                        </font>
                    </td>
                </tr>

                <!--  Contenido Legal -->
                <tr>
                    <td height="114" width="100%" align="center" valign="top" bgcolor="#fbfbfb">
                        <font size="2" face="Arial" color="#aaaaaa">
                            <p style="font-size:10px; text-align: center;">
                                <br/>
                                Has recibido este email porque solicitaste crear una cuenta en AprendeViendo. Por favor, no respondas a este mensaje.<br/><br/>

                                <a href="http://aprende-viendo.com" style="color: #aaaaaa; text-decoration: underline; border: none" target="_blank">
                                    <span style="color:#aaaaaa">AprendeViendo</span>
                                </a>&nbsp; | &nbsp;

                                <a href="#" style="color: #aaaaaa; text-decoration: underline; border: none" target="_blank">
                                    <span style="color:#aaaaaa">Aviso legal</span>
                                </a> &nbsp; | &nbsp;

                                <a href="#" style="color: #aaaaaa; text-decoration: underline; border: none" target="_blank">
                                    <span style="color:#aaaaaa">Contacto</span>
                                </a>

                                <br/><br/>
                                &copy; 200-2017 AprendeViendo, Enseñanza Virtual Gratuita. Desarrollado por
                                <a href="http://MasterHostPeru.com" style="color: #aaaaaa; text-decoration: underline; border: none" target="_blank">
                                    <span style="color:#aaaaaa">MasterHostPeru</span>
                                </a>
                            </p>
                        </font>
                    </td>
                </tr>
            </table>
        </body>
    </html>
';


///////////////////////////////////////////////////////////////////////////////////
//Enviar Email de Validacion de Cuenta

	//para el envío en formato HTML
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n";

	//dirección del remitente
    $headers .= "From: Nueva Cuenta - AprendeViendo <".$RemitenteAdmin.">\r\n";

	//dirección de respuesta, si queremos que sea distinta que la del remitente
    $headers .= "Reply-To: ".$RemitenteAdmin."\r\n";

	//ruta del mensaje desde origen a destino
    $headers .= "Return-path: ".$RemitenteAdmin."\r\n";

	mail($Email,$Asunto,$CuerpoMensaje,$headers) ;


    //Mostrar
    //echo 'Email: '.$Email.'<br>';
    //echo 'Asunto: '.$Asunto.'<br>';
    //echo 'Correo Admin: '.$RemitenteAdmin.'<br>';
    //echo 'Mensaje parte 02: '.$MensajeParte02.'<br><br><br>';
    //echo 'Correo: '.$CuerpoMensaje;

    //echo'<br><br><br>Enviado correctamente';
?>
