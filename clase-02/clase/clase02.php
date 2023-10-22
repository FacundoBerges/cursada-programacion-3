<?php

require_once "./Usuario.php";

$usuarioConApellido = new Usuario("Facundo", "Berges");
echo $usuarioConApellido->mostrar();

echo "<br/>";

$usuarioSinApellido = new Usuario("Facundo");
echo $usuarioSinApellido->mostrar();

echo "<br/>";

echo Usuario::metodoEstatico();
