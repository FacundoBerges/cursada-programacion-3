<?php

require_once("./Auto.php");

class Garage
{
  private $_razonSocial;
  private $_precioPorHora;
  private $_autos;

  public function __construct($razonSocial, $precioPorHora = 0.0)
  {
    $this->_razonSocial = $razonSocial;

    if (is_numeric($precioPorHora) && $precioPorHora >= 0) {
      $this->_precioPorHora = $precioPorHora;
    }

    $this->_autos = [];
  }

  private function _GetCarValues()
  {
    $autos = "";

    if (sizeof($this->_autos) == 0) {
      $autos = "No hay autos disponibles";
    } else {
      foreach ($this->_autos as $auto) {
        $autos = $autos . " - " . Auto::MostrarAuto($auto) . "<br/>";
      }
    }

    return $autos;
  }

  public function MostrarGarage()
  {
    $respuesta = "";

    $autos = $this->_GetCarValues();


    $respuesta = $respuesta . "Razon Social: " . $this->_razonSocial . "<br/>";
    if ($this->_precioPorHora > 0) {
      $respuesta = $respuesta . "Precio por hora: $" . (number_format($this->_precioPorHora, 2, ',', ".")) . "<br/>";
    }
    $respuesta = $respuesta . "Autos: " . "<br/>" . $autos;

    return $respuesta;
  }

  public function Equals($auto)
  {
    return array_search($auto, $this->_autos) >= 0;
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
}
