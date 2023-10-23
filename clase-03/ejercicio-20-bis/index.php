<?php

/*
Aplicación Nº 20 BIS (Registro CSV)


Archivo: registro.php
método: POST

Recibe los datos del usuario(nombre, clave, mail) por POST,
crear un objeto y utilizar sus métodos para poder hacer el alta,
guardando los datos en usuarios.csv.

Retorna si se pudo agregar o no.

Cada usuario se agrega en un renglón diferente al anterior.

Hacer los métodos necesarios en la clase usuario


Berges Facundo
*/


switch ($_SERVER['REQUEST_METHOD']) {
  case 'POST':
    require_once('./registro.php');
    break;

  default:
    echo "Error: Metodo no soportado.";
    break;
}
