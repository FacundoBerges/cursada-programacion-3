<?php

/*
Aplicación Nº 24 (Listado JSON y array de usuarios)


Archivo: listado.php
método: GET

Recibe qué listado va a retornar (ej: usuarios, productos, vehículos, etc.),
por ahora solo tenemos usuarios.

En el caso de usuarios carga los datos del archivo usuarios.json.
Se deben cargar los datos en un array de usuarios.

Retorna los datos que contiene ese array en una lista.

Hacer los métodos necesarios en la clase usuario.


Berges Facundo
*/


switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    require_once('./listado.php');
    break;

  case 'POST':
    require_once('./registro.php');
    break;

  default:
    echo json_encode(array('error' => "metodo no soportado."));
    break;
}
