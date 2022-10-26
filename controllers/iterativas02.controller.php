<?php

declare(strict_types=1);

var_dump($_POST);
var_dump($_GET);
$data = array();
//Ejercicio 2
if (isset($_POST['enviar'])) {
    $errores = checkForm($_POST);
    $data['errores'] = $errores;
    $data['input'] = sanitizarInput($_POST);
    if (count($errores) === 0) {
        $resultado = ordenarArray((explode(",", $_POST['datos'])));
        $data['resultado'] = arrayToString($resultado);
    }
}

function sanitizarInput(array $datos): array {
    return filter_var_array($datos, FILTER_SANITIZE_SPECIAL_CHARS);
}

function ordenarArray(array $numeros): array {
    for ($i = 0; $i < count($numeros); $i++) {
        for ($j = 0; $j < count($numeros) - 1; $j++) {
            if ($numeros[$j] > $numeros[$j + 1]) {
                $temp = $numeros[$j + 1];
                $numeros[$j + 1] = $numeros[$j];
                $numeros[$j] = $temp;
            }
        }
    }
    return $numeros;
}

function arrayToString(array $array): string {
    return implode(",", $array);
}

function checkForm(array $datos): array {
    $errores = array();
    if (empty($datos['datos'])) {
        $errores['datos'] = "Este campo es obligatorio";
    } else {
        $array = explode(",", $datos['datos']);
        $numErroneos = array();
        foreach ($array as $numero) {
            if (!is_numeric($numero)) {
                $numErroneos[] = filter_var($numero, FILTER_SANITIZE_SPECIAL_CHARS);
                //array_push($numErroneos, $numero);
            }
        }
        if (count($numErroneos) > 0) {
            $errores['datos'] = "Los siguientes valores no son válidos: " . implode(",", $numErroneos);
        }
    }
    return $errores;
}

/*
 * Llamamos a las vistas
 */
include 'views/templates/header.php';
include 'views/iterativas02.view.php';
include 'views/templates/footer.php';
