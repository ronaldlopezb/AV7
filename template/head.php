<?php
	function MostrarHead(){
		global $RutaServidor;

		global $ConfigWebTitulo;
		global $ConfigWebEslogan;
		global $ConfigWebMetaKeySitio;
		global $ConfigWebMetaDescription;

		global $ConfigWebFacebookTitulo;
		global $ConfigWebFacebookDescripcion;
		global $ConfigWebFacebookFoto;




		echo '<meta charset="utf-8">';
		echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
		echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
		echo '<title>'.$ConfigWebTitulo.' - '.$ConfigWebEslogan.'</title>';


		echo '<meta name="keywords" content="'.$ConfigWebMetaKeySitio.'" />';
  		echo '<meta name="description" content="'.$ConfigWebMetaDescription.'" />';



  		//<!-- METAS FACEBOOK -->
        echo "<meta content='".$ConfigWebFacebookTitulo."' property='og:title'/>";
        echo "<meta content='".$ConfigWebFacebookDescripcion."' property='og:image'/>";
        echo "<meta content='".$ConfigWebFacebookFoto."' property='og:description'/>";



		//<!-- Global stylesheets -->
		echo '<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">';
		echo '<link href="'.$RutaServidor.'assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">';
		echo '<link href="'.$RutaServidor.'assets/css/bootstrap.css" rel="stylesheet" type="text/css">';
		echo '<link href="'.$RutaServidor.'assets/css/core.css" rel="stylesheet" type="text/css">';
		echo '<link href="'.$RutaServidor.'assets/css/components.css" rel="stylesheet" type="text/css">';
		echo '<link href="'.$RutaServidor.'assets/css/colors.css" rel="stylesheet" type="text/css">';
		//<!-- /global stylesheets -->

		//<!-- Core JS files -->
		echo '<script type="text/javascript" src="'.$RutaServidor.'assets/js/plugins/loaders/pace.min.js"></script>';
		echo '<script type="text/javascript" src="'.$RutaServidor.'assets/js/core/libraries/jquery.min.js"></script>';
		echo '<script type="text/javascript" src="'.$RutaServidor.'assets/js/core/libraries/bootstrap.min.js"></script>';
		echo '<script type="text/javascript" src="'.$RutaServidor.'assets/js/plugins/loaders/blockui.min.js"></script>';
		echo '<script type="text/javascript" src="'.$RutaServidor.'assets/js/plugins/ui/nicescroll.min.js"></script>';
		echo '<script type="text/javascript" src="'.$RutaServidor.'assets/js/plugins/ui/drilldown.js"></script>';
		echo '<script type="text/javascript" src="'.$RutaServidor.'assets/js/plugins/ui/fab.min.js"></script>';
		//<!-- /core JS files -->

		//<!-- Theme JS files -->
		echo '<script type="text/javascript" src="'.$RutaServidor.'assets/js/plugins/visualization/d3/d3.min.js"></script>';
		echo '<script type="text/javascript" src="'.$RutaServidor.'assets/js/plugins/visualization/d3/d3_tooltip.js"></script>';
		echo '<script type="text/javascript" src="'.$RutaServidor.'assets/js/plugins/forms/styling/switchery.min.js"></script>';
		echo '<script type="text/javascript" src="'.$RutaServidor.'assets/js/plugins/forms/styling/uniform.min.js"></script>';
		echo '<script type="text/javascript" src="'.$RutaServidor.'assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>';
		echo '<script type="text/javascript" src="'.$RutaServidor.'assets/js/plugins/ui/moment/moment.min.js"></script>';
		echo '<script type="text/javascript" src="'.$RutaServidor.'assets/js/plugins/pickers/daterangepicker.js"></script>';

		echo '<script type="text/javascript" src="'.$RutaServidor.'assets/js/core/libraries/jquery_ui/interactions.min.js"></script>';
		echo '<script type="text/javascript" src="'.$RutaServidor.'assets/js/plugins/forms/selects/select2.min.js"></script>';





		echo '<script type="text/javascript" src="'.$RutaServidor.'assets/js/core/app.js"></script>';
		echo '<script type="text/javascript" src="'.$RutaServidor.'assets/js/pages/form_select2.js"></script>';
		echo '<script type="text/javascript" src="'.$RutaServidor.'assets/js/pages/dashboard.js"></script>';

		//<!-- /theme JS files -->

		echo '<link rel="shortcut icon" href="'.$RutaServidor.'imagenes/favicon.ico"/>';
	}


?>
