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

  private function _getCarValues()
  {
    $autos = "";
  
    if (sizeof($this->_autos) == 0) {
      $autos = "No hay autos disponibles";
    } else {
      $autos = $autos . "<br/>";
  
      foreach ($this->_autos as $key => Auto $auto) {
        $autos = $autos . $auto . ", ";
      }
    }
  }

  public function MostrarGarage()
  {
    $autos = $this->_getCarValues();

    echo "Razon Social: $this->_razonSocial<br/>
          Precio por hora: $" . (number_format($this->_precioPorHora, 2, ',', ".")) . "<br/>
          Autos: " . "<br/>" . $autos;
  }
}
