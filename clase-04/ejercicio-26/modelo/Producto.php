<?php

require_once("./manejadorArchivos.php");

class Producto
{
  public $id;
  public $codigoBarras;
  public $nombre;
  public $tipo;
  public $stock;
  public $precio;
  private static $_NOMBRE_ARCHIVO = "./productos.json";

  public function __construct($id, $codigoBarras, $nombre, $tipo, $stock, $precio)
  {
    if (!is_null($id) && is_numeric($id) && $id > 0 && $id <= 10000) $this->id = $id;
    if (!is_null($codigoBarras) && strlen($codigoBarras) == 6) $this->codigoBarras = $codigoBarras;
    if (!is_null($nombre) && strlen($nombre) > 0) $this->nombre = $nombre;
    if (!is_null($tipo) && strlen($tipo) > 0) $this->tipo = $tipo;
    if (!is_null($stock) && is_numeric($stock) && $stock >= 0) $this->stock = $stock;
    if (!is_null($precio) && is_numeric($precio) && $precio >= 0) $this->precio = $precio;
  }


  public static function Guardar($producto)
  {
    $manejador = new ManejadorArchivos(Producto::$_NOMBRE_ARCHIVO);
    $listaProductos = Producto::Leer();
    $respuesta = "No se pudo hacer.";

    $index = Producto::productoExistente($listaProductos, $producto->codigoBarras);

    if ($index === false) {
      array_push($listaProductos, $producto);
      $respuesta = "Ingresado";
    } else {
      $listaProductos[$index]["stock"] += $producto->stock;
      $respuesta = "Actualizado";
    }

    if ($manejador->guardar($listaProductos) === false) {
      $respuesta = "No se pudo hacer";
    }

    return $respuesta;
  }

  public static function Leer()
  {
    $manejador = new ManejadorArchivos(Producto::$_NOMBRE_ARCHIVO);

    $lista = $manejador->leer();
    $productos = array();

    foreach ($lista as $campo => $valor) {
      $productos[$campo] = $valor;
    }

    return $productos;
  }

  public static function productoExistente($listaProductos, $codigoBarras)
  {
    $valores = array_values($listaProductos);

    foreach ($valores as $key => $value) {

      if ($value["codigoBarras"] == $codigoBarras) {
        return $key;
      }
    }

    return false;
  }

  public function tieneStock()
  {
    return $this->stock > 0;
  }
}
