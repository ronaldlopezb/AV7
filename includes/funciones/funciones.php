<?php
function tiempo_transcurrido($fecha) {
	if(empty($fecha)) {
		return "No hay fecha";
	}
   
	$intervalos = array("segundo", "minuto", "hora", "dia", "semana", "mes", "año");
	$duraciones = array("60","60","24","7","4.35","12");
   
	$ahora = time();
	$Fecha_Unix = strtotime($fecha);
	
	if(empty($Fecha_Unix)) {   
		  return "Fecha incorrecta";
	}
	if($ahora > $Fecha_Unix) {   
		  $diferencia     =$ahora - $Fecha_Unix;
		  $tiempo         = "Hace";
	} else {
		  $diferencia     = $Fecha_Unix -$ahora;
		  $tiempo         = "Dentro de";
	}
	for($j = 0; $diferencia >= $duraciones[$j] && $j < count($duraciones)-1; $j++) {
	  $diferencia /= $duraciones[$j];
	}
   
	$diferencia = round($diferencia);
	
	if($diferencia != 1) {
		$intervalos[5].="e"; //MESES
		$intervalos[$j].= "s";
	}
   
    return "$tiempo $diferencia $intervalos[$j]";
}




//////////////////////////////////////////////////////


	define("SECOND", 1);
    define("MINUTE", 60 * SECOND);
    define("HOUR", 60 * MINUTE);
    define("DAY", 24 * HOUR);
    define("MONTH", 30 * DAY);
    
    /**
     * Humanize by delta.
     *
     * @time the unix timestamp 
     * @return the human time text since time 
     */
    function FechaHace($time) {
		$time=strtotime($time);
            $delta = time() - $time;
    
            if ($delta < 1 * MINUTE)
            {
                    return $delta == 1 ? "en este momento" : "hace " . $delta . " segundos ";
            }
            if ($delta < 2 * MINUTE)
            {
                    return "hace un minuto";
            }
            if ($delta < 45 * MINUTE)
            {
                    return "hace " . floor($delta / MINUTE) . " minutos";
            }
            if ($delta < 90 * MINUTE)
            {
                    return "hace una hora";
            }
            if ($delta < 24 * HOUR)
            {
                    return "hace " . floor($delta / HOUR) . " horas";
            }
            if ($delta < 48 * HOUR)
            {
                    return "ayer";
            }
            if ($delta < 30 * DAY)
            {
                    return "hace " . floor($delta / DAY) . " dias";
            }
            if ($delta < 12 * MONTH)
            {
                    $months = floor($delta / DAY / 30);
                    return $months <= 1 ? "el mes pasado" : "hace " . $months . " meses";
            }
            else
            {
                    $years = floor($delta / DAY / 365);
                    return $years <= 1 ? "el a&ntilde;o pasado" : "hace " . $years . " a&ntilde;os";
            }
    
    }














?>