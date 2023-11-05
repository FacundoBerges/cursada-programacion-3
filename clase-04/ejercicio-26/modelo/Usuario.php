<?php

require_once("./manejadorArchivos.php");

class Usuario
{
  public $id;
  public $nombre;
  public $clave;
  public $mail;
  public $fechaAlta;
  private static $_NOMBRE_ARCHIVO = "./usuarios.json";
  public static $_DESTINO_FOTOS = "./Usuario/Fotos/";

  public function __construct($id, $nombre, $clave, $mail)
  {
    if (!is_null($id) && is_numeric($id) && $id > 0 && $id <= 10000) $this->id = $id;
    if (!is_null($nombre) && strlen($nombre) > 0) $this->nombre = $nombre;
    if (!is_null($clave) && strlen($clave) > 0) $this->clave = $clave;
    if (!is_null($mail)  && strlen($mail) > 0 && $this->_IsValidEmail($mail)) $this->mail = $mail;
    $this->fechaAlta = date('d-m-Y H:i:s');
  }

  private function _IsValidEmail($str)
  {
    return (false !== strpos($str, "@") && false !== strpos($str, "."));
  }

  public static function Guardar($usuario)
  {
    $manejador = new ManejadorArchivos(Usuario::$_NOMBRE_ARCHIVO);
    $listaUsuarios = Usuario::Leer();

    array_push($listaUsuarios, $usuario);

    return $manejador->guardar($listaUsuarios);
  }

  public static function Leer()
  {
    $manejador = new ManejadorArchivos(Usuario::$_NOMBRE_ARCHIVO);

    $lista = $manejador->leer();
    $usuarios = array();

    foreach ($lista as $campo => $valor) {
      $usuarios[$campo] = $valor;
    }

    return $usuarios;
  }

  public static function usuarioExistente($listaUsuarios, $id)
  {
    $valores = array_values($listaUsuarios);

    foreach ($valores as $key => $value) {

      if ($value["id"] == $id) {
        return $key;
      }
    }

    return false;
  }
}
