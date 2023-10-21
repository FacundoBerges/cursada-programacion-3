<?php

/*
Aplicación No 6 (Carga aleatoria)

Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado.


Berges Facundo 
*/

$array = array();

for ($i = 0; $i < 5; $i++) {
  $array[$i] = rand(0, 10);
}

echo "Array: <br/>";
var_dump($array);
echo "<br/>";
echo "<br/>";

$total = 0;

foreach ($array as $i => $value) {
  $total += $value;
}

$average = $total / sizeof($array);

echo "Total de los elementos del array: " . $total;
echo "<br/><br/>";

$result = "El promedio es ";

if ($average > 6) {
  $result = $result . "mayor a 6";
} else if ($average < 6) {
  $result = $result . "menor a 6";
} else {
  $result = $result . " 6";
}


echo $result . "<br/><br/>";
echo "Promedio de los elementos: " . $average;
