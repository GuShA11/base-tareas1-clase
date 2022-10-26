<?php

declare(strict_types=1);

var_dump($_POST);
var_dump($_GET);
$data = array();

//Ejercicio 6
if (isset($_POST['enviar'])) {
    $data['input'] = sanitizarInput($_POST);
    $data['errores'] = checkForm($_POST);
    if (count($data['errores']) == 0) {
        $resultado = ejercicio6(floatval(preg_replace('/[^\d]/', '', strtolower($_POST['datos'])))); //$resultado = ejercicio6(50);
        $data['resultado'] = $resultado;
    }
}

function ejercicio6(float $n): array {
    $resultado = array();
    if ($n > 1) {
        for ($i = 2; $i <= $n; $i++) {
            $resultado[$i] = $i;
        }
        for ($i = 2; $i <= sqrt($n); $i++) {
            for ($j = 2; $j <= $n; $j++) {
                unset($resultado[$j * $i]);
            }
        }
        return $resultado;
    } else {
        return $resultado;
    }
}

function sanitizarInput(array $datos): array {
    return filter_var_array($datos, FILTER_SANITIZE_SPECIAL_CHARS);
}

function checkForm(array $datos): array {
    $errores = [];
    $comprobarVacia = (preg_replace('/[^\d]/', '', strtolower($_POST['datos'])));
    if ($comprobarVacia == '' || empty($comprobarVacia)) {
        $errores['datos'] = "ERROR Debe insertar un numero";
    }
    return $errores;
}

/*
 * Llamamos a las vistas
 */
include 'views/templates/header.php';
include 'views/iterativas06.view.php';
include 'views/templates/footer.php';
