<?php

declare(strict_types=1);

$data = array();

//Ejercicio 1
if (isset($_POST['enviar'])) {
    $data['input'] = sanitizarInput($_POST);
    $data['errores'] = checkForm($_POST);
    if (count($data['errores']) == 0) {
        $resultado = "hola";
        $data['resultado'] = $resultado;
    }
}

function sanitizarInput(array $datos): array {
    return filter_var_array($datos, FILTER_SANITIZE_SPECIAL_CHARS);
}

function checkForm(array $datos): array {
    $errores = [];
    /* VERIFICAR NOMBRE */
    if ($_POST['nombre'] == '' || empty($_POST['nombre'])) {
        $errores['nombre'] = "Este campo es obligatorio";
    } else {
        if (!(preg_match("/^[a-zA-Z!\s+!]+$/", $_POST['nombre']))) {
            $errores['nombre'] = "El nombre debe estar compuesto por letras y espacios";
        } else {
            if (strlen(preg_replace("/[^a-zA-Z]/", '', $_POST['nombre'])) <= 5) {
                $errores['nombre'] = "El nombre debe de tener una longitud superior a 5 caracteres";
            }
        }
    }

    /* VERIFICAR IP */
    if ($_POST['ip'] == '' || empty($_POST['ip'] || preg_match("/[\s+]+/", $_POST['ip']))) {
        $errores['ip'] = "Este campo es obligatorio";
    } else {
        if (!(filter_var($_POST['ip'], FILTER_VALIDATE_IP))) {
            $errores['ip'] = "El formato de la IP es \"192.168.0.1\"";
        }
    }

    /* VERIFICAR CHECKBOX */
    if(isset($_POST['opcions'])){
        if (in_array('tarjeta', $_POST['opcions'])) {
            if (!(in_array('socio', $_POST['opcions']))) {
                $errores['checkbox']="El campo socio debe estar seleccionado si se selecciona \"Tarjeta crédito\"";
            }
        }
    }
    return $errores;
}

/*
 * Llamamos a las vistas
 */
include 'views/templates/header.php';
include 'views/repaso02.view.php';
include 'views/templates/footer.php';
