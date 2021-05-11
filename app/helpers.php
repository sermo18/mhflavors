<?php
function fechaActual($fecha)
{
    $fechaActual = date($fecha);
    return $fechaActual;



}
function fechaFormateada($fecha){
    $fecha = strtotime($fecha);
    return date("d/m/Y",$fecha);
}


?>