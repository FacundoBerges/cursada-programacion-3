<?php

/*
Aplicación Nº 26 (RealizarVenta)


Archivo: RealizarVenta.php
método: POST

Recibe los datos del producto (código de barra), del usuario (id) y la cantidad de ítems por POST.
Verificar que el usuario y el producto exista y tenga stock.

Crea un ID autoincremental(emulado, puede ser un random de 1 a 10.000). 
Carga los datos necesarios para guardar la venta en un nuevo renglón.

Retorna un :
  “venta realizada” Si se hizo una venta.
  “no se pudo hacer“ si no se pudo hacer.

Hacer los métodos necesarios en las clases.


Berges Facundo
*/


switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    require_once('./listado.php');
    break;

  case 'POST':
    require_once('./post.php');
    break;

  default:
    echo json_encode(array('error' => "metodo no soportado."));
    break;
}
