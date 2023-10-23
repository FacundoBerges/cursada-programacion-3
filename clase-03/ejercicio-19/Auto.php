<?php

class Auto
{
  private $_marca;
  private $_color;
  private $_precio;
  private $_fecha;
  private static $_nombreArchivo = "autos.csv";

  public function __construct($marca, $color, $precio = null, $fecha = null)
  {
    if (!is_null($marca) && !is_null($color)) {
      $this->_marca = $marca;
      $this->_color = $color;

      if (!is_null($precio) && is_numeric($precio) && $precio >= 0) {
        $this->_precio = $precio;
      }

      if (!is_null($fecha) && Auto::_FechaValida($fecha)) {
        $this->_fecha = date("d-m-Y", strtotime($fecha));
      }
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
    if (!is_null($impuesto) && is_numeric($this->_precio) && is_numeric($impuesto)) {
      $this->_precio += $impuesto;
    }
  }

  public static function MostrarAuto($auto)
  {
    if (!is_null($auto)) {
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
    } else {
      return "El auto enviado es un dato nulo.";
    }
  }

  public function Equals($otroAuto)
  {
    return (!is_null($otroAuto) &&
      $otroAuto->getMarca() == $this->getMarca()
    );
  }

  public static function Add($unAuto, $otroAuto)
  {
    return (!is_null($unAuto) && !is_null($otroAuto) && $unAuto->Equals($otroAuto) && $unAuto->getColor() == $otroAuto->getColor())
      ? $unAuto->getPrecio() + $otroAuto->getPrecio()
      : 0.0;
  }

  public static function GuardarAuto($auto)
  {
    $escrituraOk = false;

    if (is_null($auto)) {
      return "Error: no se envio auto para guardar";
    }

    $archivo = fopen(Auto::$_nombreArchivo, "a+");

    if ($archivo !== false) {
      $escrituraOk = fputcsv($archivo, (array) $auto) !== false;

      fclose($archivo);
    }

    if ($escrituraOk) {
      return "Auto guardado correctamente!";
    } else {
      return "Error al guardar el auto enviado.";
    }
  }

  public static function LeerAutos()
  {
    $listaAutos = array();
    $archivo = fopen(Auto::$_nombreArchivo, "r");

    if ($archivo !== false) {
      while (!feof($archivo)) {
        $autoString = fgetcsv($archivo);

        if (!is_null($autoString) && $autoString !== false) {
          $auto = new Auto($autoString[0], $autoString[1], $autoString[2], $autoString[3]);

          array_push($listaAutos, $auto);
        }
      }

      fclose($archivo);
    }

    return $listaAutos;
  }
}
