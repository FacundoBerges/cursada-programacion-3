<?php

/*
Aplicación No 17 (Auto)


Realizar una clase llamada “Auto” que posea los siguientes atributos privados: 
  _color (String)
  _precio (Double)
  _marca (String).
  _fecha (DateTime)

Realizar un constructor capaz de poder instanciar objetos pasándole como parámetros: 
  i. La marca y el color.
  ii. La marca, color y el precio.
  iii. La marca, color, precio y fecha.

Realizar un método de instancia llamado “AgregarImpuestos”, que recibirá un doble por 
parámetro y que se sumará al precio del objeto.

Realizar un método de clase llamado “MostrarAuto”, que recibirá un objeto de tipo “Auto”
por parámetro y que mostrará todos los atributos de dicho objeto.

Crear el método de instancia “Equals” que permita comparar dos objetos de tipo “Auto”. Sólo
devolverá TRUE si ambos “Autos” son de la misma marca.

Crear un método de clase, llamado “Add” que permita sumar dos objetos “Auto” (sólo si son
de la misma marca, y del mismo color, de lo contrario informarlo) y que retorne un Double con
la suma de los precios o cero si no se pudo realizar la operación.
Ejemplo: $importeDouble = Auto::Add($autoUno, $autoDos);

En testAuto.php:
● Crear dos objetos “Auto” de la misma marca y distinto color.
● Crear dos objetos “Auto” de la misma marca, mismo color y distinto precio.
● Crear un objeto “Auto” utilizando la sobrecarga restante.
● Utilizar el método “AgregarImpuesto” en los últimos tres objetos, agregando $ 1500
    al atributo precio.
● Obtener el importe sumado del primer objeto “Auto” más el segundo y mostrar el
    resultado obtenido.
● Comparar el primer “Auto” con el segundo y quinto objeto e informar si son iguales o no.
● Utilizar el método de clase “MostrarAuto” para mostrar cada los objetos impares (1, 3, 5).


Berges Facundo
*/

require_once("./Auto.php");


$auto1 = new Auto("Ford", "Rojo");
$auto2 = new Auto("Ford", "Azul");
$auto3 = new Auto("Volkswagen", "Gris", 8000);
$auto4 = new Auto("Volkswagen", "Gris", 10000);
$auto5 = new Auto("Peugeot", "Blanco", 12000, date("d-m-Y"));

echo "<h2>Auto 1 estandar: " . Auto::MostrarAuto($auto1) . "</h2>";
echo "<h2>Auto 2 estandar: " . Auto::MostrarAuto($auto2) . "</h2>";
echo "<h2>Auto 3 estandar: " . Auto::MostrarAuto($auto3) . "</h2>";
echo "<h2>Auto 4 estandar: " . Auto::MostrarAuto($auto4) . "</h2>";
echo "<h2>Auto 5 estandar: " . Auto::MostrarAuto($auto5) . "</h2>";
echo "<br/>";

$auto3->AgregarImpuestos(1500);
$auto4->AgregarImpuestos(1500);
$auto5->AgregarImpuestos(1500);

echo "<h2>Auto 3 con impuestos: " . Auto::MostrarAuto($auto3) . "</h2>";
echo "<h2>Auto 4 con impuestos: " . Auto::MostrarAuto($auto4) . "</h2>";
echo "<h2>Auto 5 con impuestos: " . Auto::MostrarAuto($auto5) . "</h2>";
echo "<br/>";

echo "<h2>Auto 1 + Auto 2 = " . Auto::Add($auto1, $auto2) . "</h2>";
echo "<br/>";

echo "<h2>Auto 1 es igual a Auto 2: " . ($auto1->Equals($auto2) ? "Si" : "No") . "</h2>";
echo "<h2>Auto 1 es igual a Auto 5: " . ($auto1->Equals($auto5) ? "Si" : "No") . "</h2>";
echo "<br/>";

echo "<h1>Autos impares:</h1>";
echo "<ul>" .
  "<li>Auto 1: " . Auto::MostrarAuto($auto1) . "</li>" .
  "<li>Auto 3: " . Auto::MostrarAuto($auto3) . "</li>" .
  "<li>Auto 5: " . Auto::MostrarAuto($auto5) . "</li>" .
  "</ul>";
