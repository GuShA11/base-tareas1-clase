<?php
declare(strict_types=1);

if(isset($_POST['enviar'])){
    $data['errores'] = checkForm($_POST);
    $data['input'] = filter_var_array($_POST, FILTER_SANITIZE_SPECIAL_CHARS);
    if(count($data['errores']) === 0){
        $data['resultado'] = isOk($_POST['texto']);
    }
}

function isOk(string $texto) : bool{
    $numeroAnterior = 0; 
    //
    $numeroInterrogantes = 0;
    for($i = 0; $i < strlen($texto); $i++){
        $letra = $texto[$i];
        if(is_numeric($letra)){
            $numeroActual = (int)$letra;
            $suma = $numeroAnterior + $numeroActual;
            if($suma === 10 && $numeroInterrogantes !== 3){
                return false;
            }
            $numeroAnterior = $numeroActual;
            $numeroInterrogantes = 0;
        }
        else{
            if($letra === '?'){
                $numeroInterrogantes++;
            }
            else{
                if($numeroInterrogantes !== 3){
                    $numeroInterrogantes = 0;
                }
            }
        }
    }
    return true;
}

function checkForm(array $post) : array{
    $error = [];
    if(empty($post['texto'])){
        $error['texto'] = 'Este campo es obligatorio';
    }
    return $error;
}

include 'views/templates/header.php';
include 'views/repaso03.view.php';
include 'views/templates/footer.php';