<?php

declare(strict_types=1);

//Ejercicio 1
$ej1Dividendo = isset($_GET['dividendo']) && filter_var($_GET['dividendo'], FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE) !== false ? (int) $_GET['dividendo'] : 20;
$ej1Divisor = isset($_GET['divisor']) && filter_var($_GET['divisor'], FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE) !== false ? (int) $_GET['divisor'] : 5;

$data['ej1_resultado'] = esDivisible($ej1Dividendo, $ej1Divisor);
$data['ej1_dividendo'] = $ej1Dividendo;
$data['ej1_divisor'] = $ej1Divisor;

function esDivisible(int $dividendo, int $divisor): bool {
    if ($divisor === 0) {
        return false;
    } else {
        return $dividendo % $divisor == 0;
    }
}

//Ejercicio 2
$ej2num1 = isset($_GET['ej2_num1']) && filter_var($_GET['ej2_num1'], FILTER_VALIDATE_FLOAT, FILTER_NULL_ON_FAILURE) !== false ? (float) $_GET['ej2_num1'] : 8.0;
$ej2num2 = isset($_GET['ej2_num2']) && filter_var($_GET['ej2_num2'], FILTER_VALIDATE_FLOAT, FILTER_NULL_ON_FAILURE) !== false ? (float) $_GET['ej2_num2'] : 6.7;
$ej2num3 = isset($_GET['ej2_num3']) && filter_var($_GET['ej2_num3'], FILTER_VALIDATE_FLOAT, FILTER_NULL_ON_FAILURE) !== false ? (float) $_GET['ej2_num3'] : 9.0;

$data['ej2_resultado'] = numeroMayorQ($ej2num3, $ej2num2, $ej2num1);
$data['ej2_num1'] = $ej2num1;
$data['ej2_num2'] = $ej2num2;
$data['ej2_num3'] = $ej2num3;

function numeroMayorQ(float $n1, float $n2, float $n3): float {
    if ($n1 >= $n2 && $n1 >= $n3) {
        return $n1;
    } elseif ($n2 >= $n1 && $n2 >= $n3) {
        return $n2;
    } else {
        return $n3;
    }
}

//Ejercicio 3
$ej3todosSegundos = isset($_GET['ej3todosSegundos']) && filter_var($_GET['ej3todosSegundos'], FILTER_VALIDATE_FLOAT, FILTER_NULL_ON_FAILURE) !== false ? (float) $_GET['ej3todosSegundos'] : 128372;
$ej3todosMinutos = intval($ej3todosSegundos / 60);
$ej3todasHoras = intval($ej3todosMinutos / 60);

$data['eje3_numSegundosTotales'] = $ej3todosSegundos;
$data['eje3_numSec'] = $ej3todosSegundos % 60;
$data['eje3_numMin'] = $ej3todosMinutos % 60;
$data['eje3_numHora'] = $ej3todasHoras % 24;
$data['eje3_numDias'] = intval($ej3todasHoras / 24);

//Ejercicio 4
$ej4anyo = isset($_GET['ej4anyo']) && filter_var($_GET['ej4anyo'], FILTER_VALIDATE_FLOAT, FILTER_NULL_ON_FAILURE) !== false ? (float) $_GET['ej4anyo'] : 2024;

$data['eje4anyo'] = $ej4anyo;
$data['eje4resultado'] = (($ej4anyo % 4 === 0) && $ej4anyo % 100 !== 0) || ($ej4anyo % 400 === 0);

//Ejercicio 5
$eje5numero = isset($_GET['eje5numero']) && filter_var($_GET['eje5numero'], FILTER_VALIDATE_FLOAT, FILTER_NULL_ON_FAILURE) !== false ? (float) $_GET['eje5numero'] : 365;

$data['eje5num'] = $eje5numero;
$data['eje5cen'] = intval($eje5numero / 100);
$data['eje5dec'] = intval(($eje5numero - $data['eje5cen'] * 100) / 10);
$data['eje5uni'] = $eje5numero - (($data['eje5cen'] * 100) + ($data['eje5dec'] * 10));

//Ejercicio 6
$sueldo = isset($_GET['sueldo']) && filter_var($_GET['sueldo'], FILTER_VALIDATE_FLOAT, FILTER_NULL_ON_FAILURE) !== false ? (float) $_GET['sueldo'] : 2000;
$sueldoNeto = 0;

if ($sueldo <= 1000) {
    $sueldoNeto = $sueldo * 0.9;
} elseif ($sueldo <= 2000) {
    $sueldoNeto = 900 + (($sueldo - 1000) * 0.85);
} else {
    $sueldoNeto = 900 + 850 + (($sueldo - 2000) * 0.82);
}
$data['ej6descuento'] = $sueldo - $sueldoNeto;
$data['ej6sueldoNeto'] = $sueldoNeto;

//Ejercicio 7
$ej7nota = isset($_GET['ej7nota']) && filter_var($_GET['ej7nota'], FILTER_VALIDATE_FLOAT, FILTER_NULL_ON_FAILURE) !== false ? (float) $_GET['ej7nota'] : 6;
$data['ej7string'] = "";
$data['ej7nota'] = $ej7nota;
$data['ej7color'] = "";

//FORMA PROFE CON ARRAYS:
//function notaToHtml(float $nota):array{
//    if(nota<0 || nota >10){
//        $resultado['txt']="La nota $nota no es válida";
//        $resultado['class']="danger";
//    }
//    else{
//      if($nota<5){
//        $resultado['txt']="Suspenso";
//        $resultado['class']="danger";
//      }
//      elseif($nota <6){
//        $resultado['txt']="Aprobado";
//        $resultado['class']="warning";
//      }
//      elseif($nota <7){
//        $resultado['txt']="Bien";
//        $resultado['class']="info";
//      }
//      elseif($nota <8.75){
//        $resultado['txt']="Notable";
//        $resultado['class']="info";
//      }
//      elseif($nota <10){
//        $resultado['txt']="Sobresaliente";
//        $resultado['class']="success";
//      }else{
//        $resultado['txt']="Matricula";
//        $resultado['class']="success";  
//      }
//    }
//}

if ($ej7nota > 0 && $ej7nota < 10) {
    if ($ej7nota < 5) {
        $data['ej7string'] = "¡Suspenso!";
        $data['ej7color'] = "text-danger";
    } elseif ($ej7nota >= 5 && $ej7nota < 6) {
        $data['ej7string'] = "¡Aprobado!";
        $data['ej7color'] = "text-warning";
    } elseif ($ej7nota >= 6 && $ej7nota < 7) {
        $data['ej7string'] = "¡Bien!";
        $data['ej7color'] = "text-info";
    } elseif ($ej7nota >= 7 && $ej7nota < 8.75) {
        $data['ej7string'] = "¡Notable!";
        $data['ej7color'] = "text-info";
    } elseif ($ej7nota >= 8.75 && $ej7nota < 10) {
        $data['ej7string'] = "¡Sobresaliente!";
        $data['ej7color'] = "text-success";
    } elseif ($ej7nota === 10) {
        $data['ej7string'] = "¡Matrícula!";
        $data['ej7color'] = "text-success";
    }
} else {
    $data['ej7string'] = "¡Nota inválida!";
    $data['ej7nota'] = "¡Error!";
}

//Ejercicio 8
$ej8cadena = strtolower(isset($_GET['ej8cadena']) && filter_var($_GET['ej8cadena'], FILTER_VALIDATE_FLOAT, FILTER_NULL_ON_FAILURE) !== false ? $_GET['ej8cadena'] : "Mondariz");
$data['ej8cadena'] = $ej8cadena;
str_replace("á", "a", $ej8cadena);
str_replace("é", "e", $ej8cadena);
str_replace("í", "i", $ej8cadena);
str_replace("ó", "o", $ej8cadena);
str_replace("ú", "u", $ej8cadena);

switch ($ej8cadena) {
    case "marcilla":
    case "bonka":
        $data['ej8resultado'] = "café";
        break;
    case "coca-cola":
    case "cocacola":
    case "kas":
    case "pepsi":
        $data['ej8resultado'] = "refresco";
        break;
    case "mondariz":
    case "cabreiroa":
    case "sousas":
        $data['ej8resultado'] = "agua";
        break;
    default:
        $data['ej8resultado'] = "";
        break;
}

//if(strcasecmp($data, $string2)==0){
//    
//}

/*
 * Llamamos a las vistas
 */
include 'views/templates/header.php';
include 'views/decision.view.php';
include 'views/templates/footer.php';
