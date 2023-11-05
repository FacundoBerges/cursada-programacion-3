<?php

require_once("./modelo/Producto.php");


$producto = new Producto(rand(1, 10000), $_POST["codigoBarras"], $_POST["nombre"], $_POST["tipo"], $_POST["stock"], $_POST["precio"]);

$response["respuesta"] = Producto::Guardar($producto);
