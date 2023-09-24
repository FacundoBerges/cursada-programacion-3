<?php

/*
Aplicación No 5 (Números en letras)

Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
entre el 20 y el 60.
Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.


Berges Facundo 
*/

function get_unit_as_string($num)
{
  switch ($num) {
    case 0:
      return "";
    case 1:
      return "uno";
    case 2:
      return "dos";
    case 3:
      return "tres";
    case 4:
      return "cuatro";
    case 5:
      return "cinco";
    case 6:
      return "seis";
    case 7:
      return "siete";
    case 8:
      return "ocho";
    case 9:
      return "nueve";
    default:
      return null;
  }
}

const MIN_VALUE = 20;
const MAX_VALUE = 40;
$num = 43;


if ($num >= MIN_VALUE || $num <= MAX_VALUE) {
  $tens = $num - $num % 10;
  $units = $num % 10;
  $unitString = get_unit_as_string($units);
  $result;

  switch ($tens) {
    case 20:
      switch ($unitString) {
        case '':
          $result = "veinte";
          break;
        default:
          $result = "veinti" . $unitString;
          break;
      }
      break;
    case 30:
      $result = "treinta";
      switch ($unitString) {
        case '':
          break;
        default:
          $result = $result . " y " . $unitString;
          break;
      }
      break;
    case 40:
      $result = "cuarenta";
      switch ($unitString) {
        case '':
          break;
        default:
          $result = $result . " y " . $unitString;
          break;
      }
      break;
    case 50:
      $result = "cincuenta";
      switch ($unitString) {
        case '':
          break;
        default:
          $result = $result . " y " . $unitString;
          break;
      }
      break;
    case 60:
      $result = "sesenta";
      break;
    default:
      $result = "Numero no valido.";
      break;
  }

  echo "<h2>Numero: $num = $result</h2>";
} else {
  echo "<h1>Error: Numero fuera de los valores permitidos (minimo " . MIN_VALUE . " - maximo " . MAX_VALUE . ").</h1>";
}
