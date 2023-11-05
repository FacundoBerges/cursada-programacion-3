<?php

require_once("./modelo/Venta.php");
require_once("./modelo/Usuario.php");
require_once("./modelo/Producto.php");


$listaProductos = Producto::Leer();
$listaUsuarios = Usuario::Leer();

if (Producto::productoExistente($listaProductos, $_POST["codigoBarras"]) && Usuario::usuarioExistente($listaUsuarios, $_POST["idUsuario"]) && $_POST["cantidadItems"] > 0) {
  $venta = new Venta(rand(1, 10000), $_POST["codigoBarras"], $_POST["idUsuario"], $_POST["cantidadItems"]);

  $response["respuesta"] = Venta::Guardar($venta);
} else {
  $response["error"] = "No se pudo hacer";
}
