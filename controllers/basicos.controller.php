<?php

/*
 * Aquí hacemos los ejercicios y rellenamos el array de datos.
 */
//Ejercicio1
$numero = 10;
$cuadrado = $numero ** 2;
$data['ejercicio1Resultado'] = "El cuadrado de $numero es $cuadrado";

//Ejercicio2
$precio_hora = 10;
$horas_trabajadas = 8;
$resultado02 = $precio_hora * $horas_trabajadas;
$data['ejercicio2Resultado'] = "El precio hora es $precio_hora €, se han trabajado $horas_trabajadas horas por lo que se pagarán $resultado02 €";

//Ejercicio3
$base = $_GET['base'] ?? 10;
$altura = $_GET['altura'] ?? 5;
$data['eje03_base'] = $base;
$data['eje03_altura'] = $altura;
$data['eje03_area'] = $altura * $base;
$data['eje03_perimetro'] = $altura * 2 + $base * 2;

//Ejercicio 4
$nombre = "Rodrigo";
$edad = 22;
$nota_media = 7.5;
$data['ejercicio4Resultado'] = "Nombre: $nombre<br>Edad: $edad<br>Nota media: $nota_media";

//Ejercicio 5
$precio_nocheAlta = 100;
$precio_nocheBaja = 75;
$noches_alojadoAlta = 3;
$noches_alojadoBaja = 2;
$data['precio_nocheTA'] = $precio_nocheAlta;
$data['precio_nocheTB'] = $precio_nocheBaja;
$data['noches_alojadoAlta'] = $noches_alojadoAlta;
$data['noches_alojadoBaja'] = $noches_alojadoBaja;
$data['eje05_total'] = ($precio_nocheAlta * $noches_alojadoAlta) + ($precio_nocheBaja * $noches_alojadoBaja);

//Ejercicio 6
$radio = 7;
$data['eje06_radio'] = $radio;
$data['eje06_area'] = $radio * $radio * pi();
$data['eje06_perimetro'] = 2 * $radio * pi();

//Ejercicio 7
$velocidadKmH = 50;
$data['ejercicio07_kmh'] = $velocidadKmH;
$data['ejercicio07_ms'] = $velocidadKmH / 3.6;

//Ejercicio 8
$eje08numero = 365;
$data['eje08num'] = $eje08numero;
$data['eje08cen'] = intval($eje08numero / 100);
$data['eje08dec'] = intval(($eje08numero - $data['eje08cen'] * 100) / 10);
$data['eje08uni'] = $eje08numero - ($data['eje08cen'] * 100 + $data['eje08dec'] * 10);

//Ejercicio 9
$cadena = "Hoy llovio muy poco";
$data['eje09cadena'] = $cadena;
//$data['eje09Letras']= strlen($cadena);
$data['eje09Letras'] = strlen(str_replace(" ", "", $cadena));
$data['eje09Palabras'] = str_word_count($cadena);
/*
 * Llamamos a las vistas
 */
include 'views/templates/header.php';
include 'views/basico.view.php';
include 'views/templates/footer.php';
