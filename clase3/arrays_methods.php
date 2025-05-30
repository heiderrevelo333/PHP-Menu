<?php
$lista_frutas = ["manzana", "naranja", "plátano", "kiwi", "fresa"];

$result = rsort($lista_frutas); // ordena el array en orden ascendente
$result = array_reverse($lista_frutas); // invierte el orden de los elementos del array
foreach($result as $data) {
    echo "$data\n";
}


// count($lista_frutas); // cuenta los elementos del array

// array_push($lista_frutas, "naranja"); // agrega un elemento al final del array

// array_unshift($lista_frutas, "fresa"); // agrega un elemento al inicio del array

// $new_frutas = array_pop ($lista_frutas); // elimina el último elemento del array y lo devuelve

// array_pop($lista_frutas , "platano") ; // elimina el último elemento del array

// array_shift($lista_frutas); // elimina el primer elemento del array y lo devuelve

// $valido = in_array("manzana", $lista_frutas); // verifica si un elemento está en el array

// $result = array_reverse ($lista_frutas); // invierte el orden de los elementos del array

// $result = sort ($lista_frutas); // ordena los elementos del array en orden ascendente

// array_slice($lista_frutas, 1, 3); // devuelve una porción del array desde el índice 1 hasta el índice 3

// $result = array_splice($lista_frutas, 1, 3); // elimina una porción del array desde el índice 1 hasta el índice 3 y la devuelve


$persona = [
    "nombre" => "Esteban",
    "edad" => 21,
    "ciudad" => "Medellin"
];
$result = array_keys($persona); // devuelve las claves del array
$result = array_values($persona); // devuelve los valores del array
$result = array_key_exists("nombre", $persona); // verifica si una clave existe en el array

$result = array_search("edad", $persona); // busca un valor en el array y devuelve la clave si existe
$result = isset($persona["edad"]); // verifica si una clave existe en el array y no es null
unset($persona["edad"]); // elimina una clave del array
$result = array_filter($persona, fn($x) => $x !== "Medellin"); // filtra el array eliminando los elementos que no cumplen la condición
array_replace($persona, "Medellin", "Bogota"); // reemplaza un valor en el array


?>

