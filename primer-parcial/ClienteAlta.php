<?php

require_once("./handler/ArchivosHandler.php");
require_once("./model/Cliente.php");

function altaCliente($nombreCompleto, $tipoDocumento, $numeroDocumento, $email, $tipoCliente, $pais, $ciudad, $telefono)
{
  $archivo = new ArchivosHandler("hoteles.json");
  $clientes = $archivo->leer();

  foreach ($clientes as $cliente)
  {
    if($cliente['nombreCompleto'] == $nombreCompleto || $cliente['$tipoDocumento'] == $tipoDocumento)
    {
      return ["error" => ]
    }
  }

  $cliente = new Cliente($nombreCompleto, $tipoDocumento, $numeroDocumento, $email, $tipoCliente, $pais, $ciudad, $telefono);
  $idCliente = rand(100000, 999999);

}
