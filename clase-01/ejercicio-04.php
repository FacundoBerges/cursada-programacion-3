<?php 

/*
Aplicación No 4 (Calculadora)

Escribir un programa que use la variable $operador que pueda almacenar los símbolos
matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
resultado por pantalla.


Berges Facundo 
*/

$operador = '*';
$op1 = 5;
$op2 = 3;
$resultado;

$divisionValida = ($operador == "/" && $op2 != 0);

echo "<h1>Calculadora</h1>";
echo "<br/>";


switch($operador) {
  case '+':
    $resultado = $op1 + $op2;
    break;
  case '-':
    $resultado = $op1 - $op2;
    break;
  case '/':
    if(! $divisionValida) {
      echo "<h1>No se puede dividir por 0.</h1>";
    } 
    else {
      $resultado = $op1 / $op2;
    }
    break;
  case '*':
    $resultado = $op1 * $op2;
    break;
  default:
    $resultado = 0;
    break;
}

if($operador == "+" || $operador == "-" || $operador == "*" || ($operador == "/" && $divisionValida)){
  echo "<h1>$op1 $operador $op2 = $resultado</h1>";
}
else {
  echo "<h1>Error: Operación no válida.</h1>";
}
