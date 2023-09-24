<?php

/*
Aplicación No 12 (Invertir palabra)


Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
de las letras del Array.

Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.


Berges Facundo
*/


function invertirPalabra($palabra) 
{
  $invertido = "";

  for ($i = sizeof($palabra) - 1; $i >= 0; $i--) { 
    $invertido = $invertido . $palabra[$i];
  }

  return $invertido;
}


$p = "HOLA";

$pArray = str_split($p);
$pReverse = invertirPalabra($pArray);

echo "<h1>Palabra: " . $p . "</h1>";
echo "<h1>Palabra invertida: " . $pReverse . "</h1>";


?>