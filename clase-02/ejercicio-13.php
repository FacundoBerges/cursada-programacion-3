<?php

/*
Aplicación No 13 (Cantidad de caracteres)


Crear una función que reciba como parámetro un string ($palabra) y un entero ($max). 
La función validará que la cantidad de caracteres que tiene $palabra no supere a $max y además
deberá determinar si ese valor se encuentra dentro del siguiente listado de palabras válidas:
“Recuperatorio”, “Parcial” y “Programacion”. 

Los valores de retorno serán: 
  1 si la palabra pertenece a algún elemento del listado.
  0 en caso contrario.


Berges Facundo
*/


function cantidadCaracteres($palabra, $max) 
{
  $rtn = 0;

  if(strlen($palabra) <= $max)
  {
    switch(strtolower($palabra)) 
    {
      case "recuperatorio":
      case "parcial":
      case "programacion":
        $rtn = 1;
        break;
      default:
        $rtn = 0;
        break;
    }
  }

  return $rtn;
}


$p1 = "HOLA";
$p2 = "Programacion";
$p3 = "parCIal";
$p4 = "mundo";

echo "<h1>Palabra 1: " . $p1 . " - Pertenece al listado y su largo es menor a 6? " . cantidadCaracteres($p1, 6) . "</h1>";
echo "<h1>Palabra 2: " . $p2 . " - Pertenece al listado y su largo es menor a 6? " . cantidadCaracteres($p2, 6) . "</h1>";
echo "<h1>Palabra 3: " . $p3 . " - Pertenece al listado y su largo es menor a 6? " . cantidadCaracteres($p3, 6) . "</h1>";
echo "<h1>Palabra 2: " . $p2 . " - Pertenece al listado y su largo es menor a 15? " . cantidadCaracteres($p2, 15) . "</h1>";
echo "<h1>Palabra 3: " . $p3 . " - Pertenece al listado y su largo es menor a 15? " . cantidadCaracteres($p3, 15) . "</h1>";
echo "<h1>Palabra 4: " . $p4 . " - Pertenece al listado y su largo es menor a 6? " . cantidadCaracteres($p4, 6) . "</h1>";
