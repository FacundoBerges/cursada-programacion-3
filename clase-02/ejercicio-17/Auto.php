<?php

class Auto
{
  private $_color;
  private $_precio;
  private $_marca;
  private $_fecha;

  public function __construct($marca, $color, $precio = null, $fecha = null)
  {
    $this->_marca = $marca;
    $this->_color = $color;

    if (is_numeric($precio) && $precio >= 0) {
      $this->_precio = $precio;
    }

    if (Auto::_FechaValida($fecha)) {
      $this->_fecha = date("d-m-Y", strtotime($fecha));
    }
  }


  public function getMarca()
  {
    return $this->_marca;
  }

  public function getColor()
  {
    return $this->_color;
  }

  public function getPrecio()
  {
    return $this->_precio;
  }

  public function getFecha()
  {
    return $this->_fecha;
  }


  public function setMarca($marca)
  {
    $this->_marca = $marca;
  }

  public function setColor($color)
  {
    $this->_color = $color;
  }

  public function setPrecio($precio)
  {
    $this->_precio = $precio;
  }

  public function setFecha($fecha)
  {
    if (Auto::_FechaValida($fecha)) {
      $this->_fecha = $fecha;
    }
  }


  private static function _FechaValida($fecha)
  {
    return strtotime($fecha) >= 1;
  }


  public function AgregarImpuestos($impuesto)
  {
    if (is_numeric($this->_precio) && is_numeric($impuesto)) {
      $this->_precio += $impuesto;
    }
  }

  public static function MostrarAuto($auto)
  {
    $infoAuto = "";

    $infoAuto = $infoAuto . "Marca: " . $auto->getMarca();
    $infoAuto = $infoAuto . ", color: " . $auto->getColor();

    if (!is_null($auto->getPrecio())) {
      $infoAuto = $infoAuto . ", precio: " . $auto->getPrecio();
    }

    if (!is_null($auto->getFecha())) {
      $infoAuto = $infoAuto . ", fecha: " . $auto->getFecha();
    }

    return $infoAuto;
  }

  public function Equals($otroAuto)
  {
    return ($otroAuto != null &&
      $otroAuto->getMarca() == $this->getMarca()
    );
  }

  public static function Add($unAuto, $otroAuto)
  {
    return ($unAuto->Equals($otroAuto) && $unAuto->getColor() == $otroAuto->getColor())
      ? $unAuto->getPrecio() + $otroAuto->getPrecio()
      : 0;
  }
}
