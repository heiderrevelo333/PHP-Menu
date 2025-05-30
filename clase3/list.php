list
set
tuplas
diccionarios | objeto 

<?php
// $lista_frutas = ["manzana", "naranja", "plátano"];


// for ($i=0; $i < count($lista_frutas) ; $i++) { 
//     echo "la fruta $lista_frutas [$i]\n";
// }
// echo "\n";
// foreach ($lista_frutas as $fruta) {
//     echo "la fruta $fruta\n";
// }

$persona = [
    "nombre" => "Esteban",
    "edad" => 21,
    "ciudad" => "Medellin"
];

foreach ($persona as $datos => $valor) {
    echo "key: " . $datos ." valor:" . $valor . "\n";
}
?>