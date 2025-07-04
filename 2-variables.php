<?php include 'includes/header.php';


$nombre="Daniel";
echo $nombre;
var_dump($nombre);

define('constante', "Este es el valor de la constante");
echo constante;

const constante2 = "Hola 2";
echo constante2;

$nombre_cliente = "Pedro";
echo $nombre_cliente; 

// Boolean
$logueado = true;
var_dump($logueado);

// Enteros
$numero = 200;
var_dump($numero);

// Floats
$float = 200.5;
var_dump($float);

// Strings
$nombre = "Walter";
var_dump($nombre);

//Array
$array = [];
var_dump($array);
?>