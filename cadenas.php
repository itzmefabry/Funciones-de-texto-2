<?php

function clave($name, $fecha) {
    $xd=" ";
    $tres=substr($name,0,3);
    $may=strtoupper($tres);

    $año=substr($fecha,2,2);
    $mes=substr($fecha,5,2);
    $dia=substr($fecha,8,2);

    $xd=$may.$año.$mes.$dia;
    return $xd;
}



function Usuario($nombre, $institucion, $año) {
    $min = strtolower($nombre);
    $bordes = trim($min);
    $espacios = str_replace(" ", "", $bordes);
    $instclin = strtolower(trim($institucion));
    $inst2 = substr($instclin, 0, 2);
    $año2 = substr(trim($año), -2);
    $user = $espacios . $inst2 . $año2;
    return $user;
}




?>