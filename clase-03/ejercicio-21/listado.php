<?php


require_once("./modelo/Usuario.php");

if (isset($_GET["listado"])) {
  switch ($_GET["listado"]) {
    case 'usuarios':
      $listaDeUsuarios = Usuario::Leer();

      echo '<ul>';
      foreach ($listaDeUsuarios as $usuario) {
        echo "<li>" . "Nombre: " . $usuario->getNombre() . " - Clave: " . $usuario->getClave() . " - Mail: " . $usuario->getMail() . "</li>";
      }
      echo '</ul>';
      break;

    default:
      echo 'Error: listado invalido';
      break;
  }
} else {
  echo 'Error: faltan parametros';
}
