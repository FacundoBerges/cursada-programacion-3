<?php


$response = array();


if (isset($_GET["listado"])) {
  if ($_GET["listado"] == "usuarios") {
    require_once("./modelo/Usuario.php");

    $response = Usuario::Leer();
  } else if ($_GET["listado"] == "productos") {
    require_once("./modelo/Producto.php");

    $response = Producto::Leer();
  } else if ($_GET["listado"] == "ventas") {
    require_once("./modelo/Venta.php");

    $response = Venta::Leer();
  } else {
    $response["error"] = 'Listado invalido.';
  }
} else {
  $response["error"] = 'Faltan parametros.';
}

echo json_encode($response);
