<?php


switch ($_SERVER['REQUEST_METHOD']) {
  case 'GET':
    // if (isset($_GET['consulta'])) {
    // }
    // $action = $_GET['action'];

    // require_once("./ConsultarReservas.php");


    break;

  case 'POST':
    if (
      isset($_POST['nombreCompleto']) &&
      isset($_POST['tipoDocumento']) &&
      isset($_POST['numeroDocumento']) &&
      isset($_POST['email']) &&
      isset($_POST['tipoCliente']) &&
      isset($_POST['pais']) &&
      isset($_POST['ciudad']) &&
      isset($_POST['telefono'])
    ) {
      if (strtolower($_POST['tipoCliente']) == 'individual' || strtolower($_POST['tipoCliente']) == 'corporativo') {
        require_once("./ClienteAlta.php");

        $clienteController->AltaCliente($_POST['nombreCompleto'], $_POST['tipoDocumento'], $_POST['numeroDocumento'], $_POST['email'], $_POST['tipoCliente'], $_POST['pais'], $_POST['ciudad'], $_POST['telefono']);
      } else {
        echo json_encode(['error' => 'tipo de cliente invalido.']);
      }

      // require_once("./ConsultarCliente.php");
      // require_once("./ReservaHabitacion.php");
      // require_once("./ModificarCliente.php");
      // require_once("./AjusteReserva.php");
    } else {
      echo json_encode(['error' => 'Faltan parametros.']);
    }
    break;

  case "PUT":
    // require_once("./ModificarCliente.php");
    break;

  case "DELETE":
  default:
    echo json_encode(['error' => 'Metodo no soportado.']);
    break;
}
