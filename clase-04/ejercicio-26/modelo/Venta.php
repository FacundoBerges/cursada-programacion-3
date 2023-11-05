<?php

require_once("./manejadorArchivos.php");
require_once("./modelo/Producto.php");
require_once("./modelo/Usuario.php");

class Venta
{
  public $id;
  public $codigoBarras;
  public $idUsuario;
  public $cantidadItems;
  private static $_NOMBRE_ARCHIVO = "./ventas.json";

  public function __construct($id, $codigoBarras, $idUsuario, $cantidadItems)
  {
    if (!is_null($id) && is_numeric($id) && $id > 0 && $id <= 10000) $this->id = $id;
    if (!is_null($codigoBarras) && strlen($codigoBarras) == 6) $this->codigoBarras = $codigoBarras;
    if (!is_null($idUsuario) && is_numeric($idUsuario) && $idUsuario > 0 && $idUsuario <= 10000) $this->idUsuario = $idUsuario;
    if (!is_null($cantidadItems) && is_numeric($cantidadItems) && $cantidadItems >= 0) $this->cantidadItems = $cantidadItems;
  }


  public static function Guardar($venta)
  {
    $manejador = new ManejadorArchivos(Venta::$_NOMBRE_ARCHIVO);
    $listaVentas = Venta::Leer();
    $respuesta = "";

    array_push($listaVentas, $venta);
    $respuesta = "Venta realizada.";

    if ($manejador->guardar($listaVentas) === false) {
      $respuesta = "No se pudo hacer.";
    }

    return $respuesta;
  }

  public static function Leer()
  {
    $manejador = new ManejadorArchivos(Venta::$_NOMBRE_ARCHIVO);

    $lista = $manejador->leer();
    $ventas = array();

    foreach ($lista as $campo => $valor) {
      $ventas[$campo] = $valor;
    }

    return $ventas;
  }
}
