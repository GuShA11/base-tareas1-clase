<?php

declare(strict_types=1);

if (isset($_POST['enviar'])) {
    $data['errores'] = checkForm($_POST);
    $data['input'] = filter_var_array($_POST);
    if (count($data['errores']) === 0) {
        //hago la lógica
        $jsonArray = json_decode($_POST['json_notas'], true);
        //var_dump($jsonArray);die;
        $resultado = datosAsignaturas($jsonArray);
        $data['resultado'] = $resultado;
    }
}

function checkForm(array $post): array {
    $errores = [];
    if (empty($post['json_notas'])) {
        $errores['json_notas'] = 'Este campo es obligatorio';
    } else { 
        json_decode($post['json_notas'], true);
        $json = json_decode($post['json_notas'], true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            $errores['json_notas'] = 'El formato no es correcto';
        } else {
            foreach ($json as $asignatura => $datosAlumnos) {
                if (empty($asignatura)) {
                    $errores['json_notas'] = "Este campo es obligatorio";
                } else if (!(is_array($datosAlumnos))) {
                    $errores['json_notas'] = "Este campo debe ser un array";
                } else {
                    foreach ($datosAlumnos as $nombre => $nota) {
                        if (!(is_string($nombre))) {
                            $errores['json_notas'] = "Este campo es debe estar compuesto por una string";
                        } else if(empty($nombre)) {
                            $errores['json_notas'] = "Este campo es obligatorio";
                        } else if (!(is_numeric($nota)) || ($nota > 10 || $nota < 0)) {
                            $errores['json_notas'] = "La nota debe ser un valor númerico entre 0 y 10";
                        }
                    }
                }
            }
        }
    }
    return $errores;
}

function datosAsignaturas(array $materias): array {
    $resultado = [];
    $alumnos = [];
    foreach ($materias as $nombreMateria => $notas) {
        $resultado[$nombreMateria] = [];
        $suspensos = 0;
        $aprobados = 0;
        $max = [
            'alumno' => '',
            'nota' => -1
        ];
        $min = [
            'alumno' => '',
            'nota' => 11
        ];
        $notaAcumulada = 0;
        $contarAlumnos = 0;

        foreach ($notas as $alumno => $nota) {
            if (!isset($alumnos[$alumno])) {
                $alumnos[$alumno] = ['aprobados' => 0, 'suspensos' => 0];
            }
            $contarAlumnos++;
            $notaAcumulada += $nota;
            if ($nota < 5) {
                $suspensos++;
                $alumnos[$alumno]['suspensos']++;
            } else {
                $aprobados++;
                $alumnos[$alumno]['aprobados']++;
            }
            if ($nota > $max['nota']) {
                $max['alumno'] = $alumno;
                $max['nota'] = $nota;
            }
            if ($nota < $min['nota']) {
                $min['alumno'] = $alumno;
                $min['nota'] = $nota;
            }
        }
        if ($contarAlumnos > 0) {
            $resultado[$nombreMateria]['media'] = $notaAcumulada / $contarAlumnos;
            $resultado[$nombreMateria]['max'] = $max;
            $resultado[$nombreMateria]['min'] = $min;
        } else {
            $resultado[$nombreMateria]['media'] = 0;
        }
        $resultado[$nombreMateria]['suspensos'] = $suspensos;
        $resultado[$nombreMateria]['aprobados'] = $aprobados;
//        $resultado[$nombreMateria]['max']['alumno'] = $max['alumno'];
//        $resultado[$nombreMateria]['max']['nota'] = $max['nota'];
    }
    return array('modulos' => $resultado, 'alumnos' => $alumnos);
}

include 'views/templates/header.php';
include 'views/iterativas08.view.php';
include 'views/templates/footer.php';
