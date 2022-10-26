<?php

declare(strict_types=1);

//var_dump($_POST);
//var_dump($_GET);
$data = array();

//Ejercicio 3
if (isset($_POST['enviar'])) {
    $data['input'] = sanitizarInput($_POST);
    $data['error'] = checkForm($_POST);
    if (count($data['error']) === 0) {
        $data['resultado'] = ordenar(stringToMatriz($_POST['datos']));
        $data['longitud'] = strlen($data['resultado'][count($data['resultado'])-1][count($data['resultado'][0])-1]);
    }
}

function ordenar(array $matriz): array {
    $aplanado = [];
    foreach ($matriz as $subarray) {
        $aplanado = array_merge($aplanado, $subarray);
    }
    $numColumnas = count($matriz[0]);
    $ordenado = ordenarArrayPlano($aplanado);
    $resultado = [];
    $contador = 0;
    foreach ($ordenado as $num) {
        if ($contador % $numColumnas == 0) {
            if (isset($subordenado)) {
                $resultado[] = $subordenado;
            }
            $subordenado = [];
        }
        $subordenado[] = $num;
        $contador++;
    }
    $resultado[] = $subordenado;
    return $resultado;
}

function stringToMatriz(string $text): array {
    $matriz = explode("|", $text);
    for ($i = 0; $i < count($matriz); $i++) {
        $aux = $matriz[$i];
        $matriz[$i] = explode(",", $aux);
    }
    return $matriz;
}

function ordenarArrayPlano(array $numeros): array {
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

//function ejercicio3(string $s):array{
//    $array1= (explode("|", $s));
//    $arrayParaOrdenar=(implode(",",$array1));
//    $arrayOrdenado = (ordenarArrayPlano(explode(",",$arrayParaOrdenar)));
//    for ($s = 0; $s < count($array1); $s++) {
//        $array2[$s]=(explode(",",$array1[$s]));
//        }
//    $contador=0;
//    for ($h = 0; $h < count($array1); $h++) {
//        for ($s = 0; $s < count($array1); $s++) {
//            $array2[$h][$s]=(($arrayOrdenado[$contador]));
//            $contador++;
//            }
//        }
//        return $array2;
//}

function sanitizarInput(array $datos): array {
    return filter_var_array($datos, FILTER_SANITIZE_SPECIAL_CHARS);
}

function arrayToString(array $array): string {
    return implode(",", $array);
}

function checkForm(array $datos): array {
    $errores = array();
    if (empty($datos['datos'])) {
        $errores['datos'] = "Este campo es obligatorio";
    } else {
        $matriz = stringToMatriz($datos['datos']);
        //aqui ja tens a matriz
        //comprovamos os tamanhos subarrays
        $numColumnas = count($matriz[0]);
        for ($i = 1; $i < count($matriz); $i++) {
            if ($numColumnas !== (count($matriz[$i]))) {
                $errores['datos'] = 'Todas las filas deben tener el mismo número de elementos.';
                return $errores;
            }
        }
        //comprobamos que todas las posiciones esten formadas por numeros
        $numErroneos = [];
        foreach ($matriz as $fila) {
            foreach ($fila as $num) {
                if (!is_numeric(($num))) {
                    $numErroneos[] = filter_var($num . FILTER_SANITIZE_SPECIAL_CHARS);
                }
            }
        }
        if (count($numErroneos) > 0) {
            $errores['datos'] = 'Los siguientes valores no son válidos' . implode(", ", $numErroneos);
        }
    }
    return $errores;
}

/*
 * Llamamos a las vistas
 */
include 'views/templates/header.php';
include 'views/iterativas03.view.php';
include 'views/templates/footer.php';
