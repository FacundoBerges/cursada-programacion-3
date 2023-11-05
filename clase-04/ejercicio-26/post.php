<?php

$response = array();

if ((isset($_POST["nombre"]) && isset($_POST["clave"]) && isset($_POST["mail"]))) {

  require_once("./registro.php");
} else if (isset($_POST["codigoBarras"]) && isset($_POST["nombre"]) && isset($_POST["tipo"]) && isset($_POST["stock"]) && isset($_POST["precio"])) {

  require_once("./altaProducto.php");
} else if (isset($_POST["codigoBarras"]) && isset($_POST["idUsuario"]) && isset($_POST["cantidadItems"])) {

  require_once("./RealizarVenta.php");
} else {
  $response["error"] = 'Faltan datos.';
}

echo json_encode($response);
