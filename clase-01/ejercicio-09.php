<?php

/*
Aplicación No 9 (Arrays asociativos)

Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
contenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
lapiceras.


Berges Facundo 
*/

$lapiceras = array(
  "lapicera bic" => array(
    'color' => 'azul',
    'marca' => "Bic",
    'trazo' => "Fino",
    'precio' => 200
  ),
  "lapicera faber castell" => array(
    'color' => 'negro',
    'marca' => "Faber Castell",
    'trazo' => "Grueso",
    'precio' => 150
  ),
  "lapicera simball" => array(
    'color' => 'rojo',
    'marca' => "Simball",
    'trazo' => "Fino",
    'precio' => 180
  ),
);

echo var_dump($lapiceras);
echo "<br/>";
echo "<br/>";

foreach ($lapiceras as $lapicera => $datos) {
  echo "$lapicera: <br/>";

  foreach ($datos as $key => $value) {
    echo "$key: $value<br/>";
  }

  echo "<br/>";
}
