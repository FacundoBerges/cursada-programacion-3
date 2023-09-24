<?php

require_once("./usuario/usuario.php");

if (isset($_POST['nombre']) && isset($_POST['clave']) && isset($_POST['mail'])) {
  $id = rand(1, 10000);
  $fecha = date("Y-m-d H");
  $nombre = $_POST['nombre'];
  $clave = $_POST['clave'];
  $email = $_POST['mail'];

  $usuario = new Usuario($id, $fecha, $nombre, $clave, $email);
  Usuario::guardar("./usuario", $usuario);
}
