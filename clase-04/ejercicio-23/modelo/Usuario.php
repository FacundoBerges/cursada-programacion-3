<?php

class Usuario
{
  public $id;
  public $nombre;
  public $clave;
  public $mail;
  private static $_NOMBRE_ARCHIVO = "./usuarios.json";
  public static $_DESTINO_FOTOS = "./Usuario/Fotos/";

  public function __construct($id, $nombre, $clave, $mail)
  {
    if (!is_null($id) && is_numeric($id) && $id > 0 && $id <= 10000) $this->id = $id;
    if (!is_null($nombre) && strlen($nombre) > 0) $this->nombre = $nombre;
    if (!is_null($clave) && strlen($clave) > 0) $this->clave = $clave;
    if (!is_null($mail)  && strlen($mail) > 0 && $this->_IsValidEmail($mail)) $this->mail = $mail;
  }

  private function _IsValidEmail($str)
  {
    return (false !== strpos($str, "@") && false !== strpos($str, "."));
  }

  public static function Guardar($usuario)
  {
    $user = new stdClass();
    $user->id = $usuario->id;
    $user->nombre = $usuario->nombre;
    $user->clave = $usuario->clave;
    $user->mail = $usuario->mail;
    $user->fechaAlta = date("d/m/Y");

    $usuarioJson = json_encode($user) . "\n";

    $bytes = file_put_contents(Usuario::$_NOMBRE_ARCHIVO, $usuarioJson, FILE_APPEND);

    if ($bytes !== false) {
      return "Usuario guardado con exito.";
    } else {
      return "Error al guardar usuario.";
    }
  }
}
