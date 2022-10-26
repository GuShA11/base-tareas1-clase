<?php

declare(strict_types=1);

$data = array();

//Ejercicio 1
if (isset($_POST['enviar'])) {
    $data['input'] = sanitizarInput($_POST);
    $data['errores'] = checkForm($_POST);
    if (count($data['errores']) == 0) {
        $resultado = ejercicio5(preg_replace("/ +/", ' ', preg_replace('/[^a-z ]/', '', strtolower($_POST['datos']))));
        $data['resultado'] = $resultado;
    }
}

function ejercicio5(string $s): array {
    $palabras = explode(" ", $s);
    $resultado = array();
    var_dump($resultado);
    for ($i = 0; $i < count($palabras); $i++) {
        $letra = substr($palabras[$i], 0, 1);
        if (!isset($resultado[$letra])) {
            $resultado[$letra] = [$palabras[$i]];
        } else {
            array_push($resultado[$letra], $palabras[$i]);
        }
    }
    ksort($resultado);
    foreach ($resultado as $key=>$subarray) {
        sort($subarray);
        $resultado[$key]=$subarray;
    }
    return $resultado;
}


function sanitizarInput(array $datos): array {
    return filter_var_array($datos, FILTER_SANITIZE_SPECIAL_CHARS);
}

function checkForm(array $datos): array {
    $errores = [];
    $comprobarVacia = preg_replace("/ +/", ' ', preg_replace('/[^a-z ]/', '', strtolower($_POST['datos'])));
    if ($comprobarVacia == '' || empty($comprobarVacia)) {
        $errores['datos'] = "La cadena debe de estar compuesta apenas por letras";
    }
    return $errores;
}

/*
 * Llamamos a las vistas
 */
include 'views/templates/header.php';
include 'views/repaso01.view.php';
include 'views/templates/footer.php';
