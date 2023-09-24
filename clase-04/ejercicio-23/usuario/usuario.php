<?php

class Usuario
{
  private $_id;
  private $_fecha;
  private $_nombre;
  private $_clave;
  private $_email;

  public function __construct($id, $fecha, $nombre, $clave, $email)
  {
    $this->_id = $id;
    $this->_fecha = $fecha;
    $this->_nombre = $nombre;
    $this->_clave = $clave;
    $this->_email = $email;
  }

  public static function guardar($ruta, $usuario)
  {
    $resp = false;
    $archivo = fopen($ruta, 'a+');

    if ($archivo !== false) {
      $usuarioJson = json_encode($usuario);

      $resp = fputs($archivo, $usuarioJson);
    }

    fclose($archivo);

    return $resp;
  }
}
