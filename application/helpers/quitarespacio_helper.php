<?php

function Quitar_EspaciosNombre($nombre)
{

    $array = explode(' ',$nombre);  // convierte en array separa por espacios;
    $salida ='';
    // quita los campos vacios y pone un solo espacio
    for ($i=0; $i < count($array); $i++) { 
        if(strlen($array[$i])>0) {
            $salida.= ' ' . $array[$i];
        }
    }
  return  trim($salida);
}
function Quitar_EspaciosApellido($apellidos)
{

    $array = explode(' ',$apellidos);  // convierte en array separa por espacios;
    $salida ='';
    // quita los campos vacios y pone un solo espacio
    for ($i=0; $i < count($array); $i++) { 
        if(strlen($array[$i])>0) {
            $salida.= ' ' . $array[$i];
        }
    }
  return  trim($salida);
}
?>