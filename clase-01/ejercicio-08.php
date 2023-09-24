<?php

/*
Aplicación No 8 (Carga aleatoria)

Imprima los valores del vector asociativo siguiente usando la estructura de control foreach:
$v[1]=90; $v[30]=7; $v['e']=99; $v['hola']= 'mundo';


Berges Facundo 
*/

$v = array(
  1 => 90,
  30 => 7,
  'e' => 99,
  'hola' => 'mundo'
);


echo "Array: <br/>";
echo var_dump($v);
echo "<br/>";
echo "<br/>";

echo "<br/>";
echo "Con foreach: <br/>";
echo "<br/>";

foreach ($v as $key => $value) {
  echo "\$v[$key]=$value" . "<br/>";
}
