<?php

/*
Aplicación Nº 21 (Listado CSV y array de usuarios)


Archivo: listado.php
método: GET

Recibe qué listado va a retornar (ej: usuarios, productos, vehículos,...etc.; por ahora 
solo tenemos usuarios).

En el caso de usuarios carga los datos del archivo usuarios.csv.

Se deben cargar los datos en un array de usuarios.

Retorna los datos que contiene ese array en una lista:
  <ul>
    <li>Coffee</li>
    <li>Tea</li>
    <li>Milk</li>
  </ul>

Hacer los métodos necesarios en la clase usuario


Berges Facundo
*/

switch ($_SERVER['REQUEST_METHOD']) {
  case 'POST':
    require_once('./registro.php');
    break;

  case 'GET':
    require_once('./listado.php');
    break;

  default:
    echo "Error: Metodo no soportado.";
    break;
}
