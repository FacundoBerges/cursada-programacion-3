<?php


require_once("./modelo/Usuario.php");

if (isset($_POST["nombre"]) && isset($_POST["clave"]) && isset($_POST["mail"])) {
  $usuario = new Usuario($_POST["nombre"], $_POST["clave"], $_POST["mail"]);

  echo Usuario::Guardar($usuario);
} else {
  echo 'Error: faltan datos';
}
