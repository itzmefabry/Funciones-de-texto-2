<?php

function clave($name, $fecha) {
    $tres=substr($name,0,3);
    $may=strtoupper($tres);

    $año=substr($fecha,2,2);
    $mes=substr($fecha,5,2);
    $dia=substr($fecha,8,2);


    return $may, $año, $mes, $dia;
}


?>