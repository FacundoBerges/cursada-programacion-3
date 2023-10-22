<?php

/*
Aplicación No 18 (Auto - Garage)


Crear la clase Garage que posea como atributos privados:
  _razonSocial (String)
  _precioPorHora (Double)
  _autos (Autos[], reutilizar la clase Auto del ejercicio anterior)

Realizar un constructor capaz de poder instanciar objetos pasándole como parámetros: 
  i. La razón social.
  ii. La razón social y el precio por hora.

Realizar un método de instancia llamado “MostrarGarage”, que no recibirá parámetros y
que mostrará todos los atributos del objeto.

Crear el método de instancia “Equals” que permita comparar al objeto de tipo Garaje con un
objeto de tipo Auto. Sólo devolverá TRUE si el auto está en el garaje.

Crear el método de instancia “Add” para que permita sumar un objeto “Auto” al “Garage”
(sólo si el auto no está en el garaje, de lo contrario informarlo).

  Ejemplo: $miGarage->Add($autoUno);

Crear el método de instancia “Remove” para que permita quitar un objeto “Auto” del
“Garage” (sólo si el auto está en el garaje, de lo contrario informarlo). 

  Ejemplo: $miGarage->Remove($autoUno);


En testGarage.php, crear autos y un garage. Probar el buen funcionamiento de todos
los métodos.


Berges Facundo
*/

require_once("./Auto.php");
require_once("./Garage.php");


// Creacion de autos y garage
$auto1 = new Auto("Ford", "Rojo");
$auto2 = new Auto("Ford", "Azul");
$auto3 = new Auto("Volkswagen", "Gris", 8000);
$auto4 = new Auto("Volkswagen", "Gris", 10000);
$auto5 = new Auto("Peugeot", "Blanco", 12000, date("d-m-Y"));

$garage = new Garage("Garage SA", 500);


// Muestra de vehiculos creados
echo "<h2>Auto 1 estandar: " . Auto::MostrarAuto($auto1) . "</h2>";
echo "<h2>Auto 2 estandar: " . Auto::MostrarAuto($auto2) . "</h2>";
echo "<h2>Auto 3 estandar: " . Auto::MostrarAuto($auto3) . "</h2>";
echo "<h2>Auto 4 estandar: " . Auto::MostrarAuto($auto4) . "</h2>";
echo "<h2>Auto 5 estandar: " . Auto::MostrarAuto($auto5) . "</h2>";
echo "<br/>";
echo "<br/>";


// Agregado de autos
echo $garage->Add($auto1);
echo "<br/>";
echo $garage->Add($auto3);
echo "<br/>";
echo $garage->Add($auto4);
echo "<br/>";
echo "<br/>";

// Informacion del garage
echo "<h2>Lista de autos en el garage " . $garage->MostrarGarage() . "</h2>";
echo "<br/>";
echo "<br/>";

// Testeo de Equals
$resp = $garage->Equals($auto2);
echo "<h2>Auto " . Auto::MostrarAuto($auto2) . " se encuentra en el garage?: " . $resp . "</h2>";
echo var_dump($resp);
echo "<br/>";

$resp = $garage->Equals($auto4);
echo "<h2>Auto " . Auto::MostrarAuto($auto4) . " se encuentra en el garage?: " . $resp . "</h2>";
echo var_dump($resp);
echo "<br/>";
echo "<br/>";

// Testeo de Remove
$resp = $garage->Remove($auto2);
echo "<h2>Auto " . Auto::MostrarAuto($auto2) . " se pudo borrar?: " . $resp . "</h2>";
echo "<br/>";

$resp = $garage->Remove($auto4);
echo "<h2>Auto " . Auto::MostrarAuto($auto4) . " se pudo borrar?: " . $resp . "</h2>";
echo "<br/>";
echo "<br/>";

// Testeo de mostrar post remove
echo "<h2>Lista de autos en el garage " . $garage->MostrarGarage() . "</h2>";
echo "<br/>";
echo "<br/>";
