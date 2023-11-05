<?php


require_once("./modelo/Usuario.php");


$usuario = new Usuario(rand(1, 10000), $_POST["nombre"], $_POST["clave"], $_POST["mail"]);

$nombre_archivo = $_FILES['imagen']['name'];
$tipo_archivo = $_FILES['imagen']['type'];
$tamano_archivo = $_FILES['imagen']['size'];

if (!((strpos($tipo_archivo, "png") || strpos($tipo_archivo, "jpeg")) && ($tamano_archivo < 100000))) {
  $response["errorArchivo"] = "La extensión o el tamaño de los archivos no es correcta. Se permiten archivos .png o .jpg de tamaño máximo 100kb.";
} else {

  if (move_uploaded_file($_FILES['imagen']['tmp_name'],  Usuario::$_DESTINO_FOTOS . $nombre_archivo)) {
    $response["archivo"] = "El archivo ha sido cargado correctamente.";

    if (Usuario::Guardar($usuario) !== false) {
      $response["respuesta"] = "Usuario guardado con exito.";
    } else {
      $response["respuesta"] = "Error al guardar usuario.";
    }
  } else {
    $response["errorArchivo"] = "Ocurrió algún error al subir el fichero. No pudo guardarse.";
  }
}
