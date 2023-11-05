<?php

require_once("./modelo/Usuario.php");

$response = array();


if (isset($_GET["listado"])) {
  if ($_GET["listado"] == "usuarios") {
    $response = Usuario::Leer();
  } else {
    $response["error"] = 'Listado invalido.';
  }
} else {
  $response["error"] = 'Faltan parametros.';
}

echo json_encode($response);
