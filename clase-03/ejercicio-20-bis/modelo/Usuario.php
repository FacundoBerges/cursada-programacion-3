<?php

class Usuario
{
  private $_nombre;
  private $_clave;
  private $_mail;
  private static $_NOMBRE_ARCHIVO = "usuarios.csv";

  public function __construct($nombre, $clave, $mail)
  {
    if (!is_null($nombre) && strlen($nombre) > 0) $this->_nombre = $nombre;
    if (!is_null($clave) && strlen($clave) > 0) $this->_clave = $clave;
    if (!is_null($mail)  && strlen($mail) > 0 && $this->_IsValidEmail($mail)) $this->_mail = $mail;
  }

  private function _IsValidEmail($str)
  {
    return (false !== strpos($str, "@") && false !== strpos($str, "."));
  }

  public static function Guardar($usuario)
  {
    $archivo = fopen(Usuario::$_NOMBRE_ARCHIVO, 'a+');

    if ($archivo === false) return false;

    $exito = fputcsv($archivo, (array) $usuario);

    fclose($archivo);

    if ($exito !== false) {
      return "Usuario guardado con exito";
    } else {
      return "Error al guardar usuario";
    }
  }
}
