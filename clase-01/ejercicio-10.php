<?php

/*
Aplicación No 10 (Arrays de Arrays)

Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
Arrays de Arrays.


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
