<?php

/*
Aplicación Nº 22 (Login)


Archivo: Login.php
método: POST

Recibe los datos del usuario (clave, mail) por POST,
crear un objeto y utilizar sus métodos para poder verificar si es un usuario registrado, 

Retorna:
  “Verificado” si el usuario existe y coincide la clave también.
  “Error en los datos” si esta mal la clave.
  “Usuario no registrado si no coincide el mail”

Hacer los métodos necesarios en la clase usuario.


Berges Facundo
*/

switch ($_SERVER['REQUEST_METHOD']) {
  case 'POST':
    if (isset($_POST["clave"]) && isset($_POST["mail"])) {
      if (isset($_POST["nombre"])) {
        require_once('./registro.php');
      } else {
        require_once('./Login.php');
      }
    } else {
      echo 'Error: faltan datos';
    }
    break;

  case 'GET':
    if (isset($_GET["listado"])) {
      require_once('./listado.php');
    } else {
      echo 'Error: faltan parametros';
    }

    break;

  default:
    echo "Error: Metodo no soportado.";
    break;
}
