<?php

class Cliente
{
    public $id;
    public $nombreCompleto;
    public $tipoDocumento;
    public $numeroDocumento;
    public $tipoCliente;
    public $pais;
    public $ciudad;
    public $telefono;


    public function __construct($nombreCompleto, $tipoDocumento, $numeroDocumento, $tipoCliente, $pais, $ciudad, $telefono)
    {
        $this->nombreCompleto = $nombreCompleto;
        $this->tipoDocumento = $tipoDocumento;
        $this->numeroDocumento = $numeroDocumento;
        $this->tipoCliente = $tipoCliente;
        $this->pais = $pais;
        $this->ciudad = $ciudad;
        $this->telefono = $telefono;
    }

    public function AgregarCliente
}
