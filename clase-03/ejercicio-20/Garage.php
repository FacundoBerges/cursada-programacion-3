<?php

require_once("./Auto.php");

class Garage
{
  private $_razonSocial;
  private $_precioPorHora;
  private $_autos;
  private static $_nombreArchivo = "garages.csv";


  public function __construct($razonSocial, $precioPorHora = 0.0)
  {
    $this->_razonSocial = $razonSocial;

    if (is_numeric($precioPorHora) && $precioPorHora >= 0) {
      $this->_precioPorHora = $precioPorHora;
    }

    $this->_autos = [];
  }

  public function GetRazonSocial()
  {
    return $this->_razonSocial;
  }

  public function GetPrecioPorHora()
  {
    return $this->_precioPorHora;
  }

  public function GetCarValues()
  {
    $autos = "";

    if (sizeof($this->_autos) == 0) {
      $autos = "No hay autos disponibles";
    } else {
      foreach ($this->_autos as $auto) {
        $autos = $autos . "-" . Auto::MostrarAuto($auto);
      }
    }

    return $autos;
  }

  public function MostrarGarage()
  {
    $respuesta = "";

    $autos = $this->GetCarValues();


    $respuesta = $respuesta . "Razon Social: " . $this->_razonSocial . "<br/>";
    if ($this->_precioPorHora > 0) {
      $respuesta = $respuesta . "Precio por hora: $" . (number_format($this->_precioPorHora, 2, ',', ".")) . "<br/>";
    }
    $respuesta = $respuesta . "Autos: " . "<br/>" . $autos;

    return $respuesta;
  }

  public function Equals($auto)
  {
    return array_search($auto, $this->_autos) !== false;
  }

  public function Add($auto)
  {
    if (!$this->Equals($auto)) {
      array_push($this->_autos, $auto);
      return "Auto agregado correctamente.";
    } else {
      return "El auto ya se encuentra cargado en el garage.";
    }
  }

  public function Remove($auto)
  {
    if ($this->Equals($auto)) {
      unset($this->_autos[array_search($auto, $this->_autos)]);
      return "Auto removido correctamente";
    } else {
      return "El auto no se encuentra cargado en el garage.";
    }
  }

  public static function GuardarGarage($garage)
  {
    $escrituraOk = false;

    if (is_null($garage)) {
      return "Error: no se envio garage para guardar";
    }

    $archivo = fopen(Garage::$_nombreArchivo, "a+");

    if ($archivo !== false) {
      $razonSocial = $garage->GetRazonSocial();
      $precio = $garage->GetPrecioPorHora();
      $autos = $garage->GetCarValues();

      $garageAEscribir = array($razonSocial, $precio, $autos);

      var_dump($garageAEscribir);

      $escrituraOk = fputcsv($archivo, $garageAEscribir) !== false;

      fclose($archivo);
    }

    if ($escrituraOk) {
      return "Garage guardado correctamente!";
    } else {
      return "Error al guardar el garage enviado.";
    }
  }

  public static function LeerGarages()
  {
    $listaGarages = array();
    $archivo = fopen(Garage::$_nombreArchivo, "r");

    if ($archivo !== false) {
      while (!feof($archivo)) {
        $garageString = fgetcsv($archivo);

        if (!is_null($garageString) && $garageString !== false) {
          $garage = new Garage($garageString[0], $garageString[1]);

          array_push($listaGarages, $garage);
        }
      }

      fclose($archivo);
    }

    return $listaGarages;
  }
}
