<?php


require_once("./modelo/Usuario.php");


$usuario = new Usuario($_POST["nombre"], $_POST["clave"], $_POST["mail"]);

echo Usuario::Guardar($usuario);
