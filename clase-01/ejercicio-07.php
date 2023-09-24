<?php

/*
Aplicación No 7 (Mostrar impares)

Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números
utilizando las estructuras while y foreach.


Berges Facundo 
*/

$array = array();

for ($i = 0; sizeof($array) < 10; $i++) {
  if ($i % 2 != 0) {
    array_push($array, $i);
  }
}

echo "Array: <br/>";
echo var_dump($array);
echo "<br/>";
echo "<br/>";

echo "Con for: <br/>";
echo "<br/>";

for ($i = 0; $i < sizeof($array); $i++) {
  echo $array[$i] . "<br/>";
}

echo "<br/>";
echo "Con while: <br/>";
echo "<br/>";

while (current($array)) {
  echo current($array) . "<br/>";
  next($array);
}

echo "<br/>";
echo "Con foreach: <br/>";
echo "<br/>";

foreach ($array as $key => $value) {
  echo $array[$key] . "<br/>";
}
