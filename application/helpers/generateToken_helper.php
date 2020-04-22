<?php
function generateToken(){
    $mayus = "ABCDEFGHIJKMNPQRSTUVWXYZ";
    $mayusculas = str_split($mayus); //convertir a array
    $numeros = range(0,28); //convertir a array
    $arraymerge = array_merge($mayusculas,$numeros);//Une el array mayusculas con array numero
    shuffle($arraymerge); // revuelve alealtoriamente el arreglo
    $tokenArray = array_slice($arraymerge, 0, 50); // Establece un limite de caracteres para el token
    return implode($tokenArray); //
}
?>