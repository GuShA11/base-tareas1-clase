<?php

declare(strict_types=1);

//Ejercicio 1
$ej1cadena = isset($_GET['ej1cadena']) && filter_var($_GET['ej1cadena'], FILTER_VALIDATE_INT,FILTER_NULL_ON_FAILURE) !== false ? $_GET['ej1cadena'] : "1,2,3,4,5,6";

$ej1array=explode(";",$ej1cadena);
foreach ($array as $value) {
    if($value==""){
        $value==null;
    }
}
$data['ej1resultado']=$ej1array;
/*
 * Llamamos a las vistas
 */
include 'views/templates/header.php';
include 'views/iterativas.view.php';
include 'views/templates/footer.php';
