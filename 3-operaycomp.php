<?php include 'includes/header.php';

$numero1 = 20;
$numero2 = 10;

// Sumar
echo $numero1 + $numero2;

// Resta
echo $numero1 - $numero2;

echo "<br>";

// Multiplicar
echo $numero1 * $numero2;

// Dividir
echo $numero1 / $numero2;

// Multiplicar cierta cantidad de veces
echo 2 ** 3;

$numero1 = 20;
$numero2 = 30;
$numero3 = 30;
$numero4 = "30";

var_dump($numero1 > $numero2);
echo "<br/>";

var_dump($numero1 < $numero2);
echo "<br/>";

var_dump($numero1 >= $numero2);
echo "<br/>";

var_dump($numero1 <= $numero2);
echo "<br/>";

var_dump($numero2 == $numero3);
echo "<br/>";

var_dump($numero2 == $numero4);
echo "<br/>";

var_dump($numero2 === $numero4);
echo "<br/>";

// -1 Si Izquierda es menor, 0 Si es igual, 1 Si izquierda es mayor
var_dump($numero1 <=> $numero2);
echo "<br/>";

var_dump($numero2 <=> $numero3);
echo "<br/>";

//var_dump($numero2 <=> $numero1);
//echo "<br/>";