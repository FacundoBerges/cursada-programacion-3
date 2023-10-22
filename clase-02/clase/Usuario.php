<?php

class Usuario
{
  // Atributos.
  public $nombre;
  public $apellido;

  // Constructor.
  public function __construct($nombre, $apellido = "")
  {
    $this->nombre = $nombre;
    $this->apellido = $apellido;
  }

  // Metodos.
  public function mostrar()
  {
    return $this->nombre . " " . $this->apellido;
  }

  public static function metodoEstatico()
  {
    return "Este es un metodo estatico";
  }
}
