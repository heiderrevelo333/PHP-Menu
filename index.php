<?php
$saludo = "hola mundo";
$edad = 21;
$statura = 1.85;
$html = "<h1>Hola Mundo</h1>";
//$saludo =  strlen($saludo);  // longitud de la cadena
//$saludo = str_replace("Mundo", "PHP", $saludo); // reemplazar
//$saludo = strtoupper($saludo); // convertir a mayusculas
//$saludo = substr($saludo, 0, 4); // extraer
//$saludo = strrev($saludo); // invertir
//$saludo = str_word_count($saludo); // contar palabras
//$saludo = str_repeat($saludo, 3); // repetir
//$saludo = strpos($saludo, "Mundo"); // buscar la primera posicion
//$saludo = trim($saludo); // eliminar espacios
//$saludo = ltrim($saludo); // eliminar espacios
//$saludo = rtrim($saludo); // eliminar espacios
//$saludo = strrpos($saludo, "d"); // buscar la ultima posicion
//$saludo = isset($edad); // verificar si existe
//$saludo = is_string($edad); // verificar si es string
//$saludo = explode(" ", $saludo); // convertir string a array
//$saludo = implode(" ", $saludo); // convertir array a string
//$saludo = ucfirst($saludo); // primer letra mayuscula
//$saludo = ucwords($saludo); // primera letra de cada palabra mayuscula


//$edad = intval($edad);  // convertir a entero
//$edad = number_format($statura, 2);  // formatear a 2 decimales
//$edad = round($edad, 2);  // redondear
//$edad = ceil($edad);  // redondear hacia arriba
//$edad = floor($edad);  // redondear hacia abajo
//$edad = abs($edad); // valor absoluto
//$edad = min($edad);  // minimo
//$edad = max($edad); // maximo
//$edad = rand(1, 100); // numero aleatorio
//$edad = is_numeric($edad); // verificar si es numerico
//$edad = is_int($edad); // verificar si es entero
//$edad = is_float($edad);  // verificar si es float
//$edad = is_string($edad); // verificar si es string
//$edad = is_bool($edad);  // verificar si es booleano 
//$edad = is_array($edad);  // verificar si es array
//$edad = is_object($edad);  // verificar si es objeto
//$edad = is_null($edad);  // verificar si es nulo
//$edad = is_resource($edad);  // verificar si es recurso
//$edad = fmod($edad, 2);   // modulo
//$edad = isset($edad);    // verificar si existe
//$edad = is_string($edad);     // verificar si es string


//$statura = floatval($statura); // convertir a float
//$statura = doubleval($statura); // convertir a double

//$html = htmlspecialchars($saludo); // convertir a html

printf("Hola %s, tienes %d años y mides %.2f metros", $saludo, $edad, $statura); // formatear string

//echo $html; // convertir a html
//print_r($saludo); // imprimir array|
//echo $edad; //echo $statura; // imprimir float
//echo $saludo; // imprimir string

?>