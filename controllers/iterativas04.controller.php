<?php

declare(strict_types=1);

var_dump($_POST);
var_dump($_GET);
$data = array();

//Ejercicio 4
if (isset($_POST['enviar'])) {
    $data['input'] = sanitizarInput($_POST);
    $data['errores'] = checkForm($_POST);
    if (count($data['errores']) == 0) {
        $resultado = ejercicio4(preg_replace('/[^a-zA-Z]/', '', strtolower($_POST['datos'])));
        $data['resultado'] = $resultado;
    }
}

function ejercicio4(string $s): array {
    $array = str_split($s);
    $resultado = array();
    $contador = 0;
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array); $j++) {
            if ($array[$i] == $array[$j]) {
                $contador++;
            }
        }
        $resultado[$array[$i]] = $contador;
        $contador = 0;
    }
    array_multisort($resultado, SORT_DESC);
    return $resultado;
}

function sanitizarInput(array $datos): array {
    return filter_var_array($datos, FILTER_SANITIZE_SPECIAL_CHARS);
}

function checkForm(array $datos): array {
    $errores = [];
    $comprobarVacia = (preg_replace('/[^a-zA-Z]/', '', strtolower($_POST['datos'])));
    if ($comprobarVacia == '' || empty($comprobarVacia)) {
        $errores['datos'] = "La cadena debe de estar compuesta apenas por letras";
    }
    return $errores;
}

/*
 * Llamamos a las vistas
 */
include 'views/templates/header.php';
include 'views/iterativas04.view.php';
include 'views/templates/footer.php';
