<?php

namespace model;

class Cliente
{
    private $_nombre;
    private $_apellido;
    private $_tipoDocumento;
    private $_numeroDocumento;
    private $_tipoCliente;
    private $_pais;
    private $_ciudad;
    private $_telefono;

    /**
     * @param $_nombre
     * @param $_apellido
     * @param $_tipoDocumento
     * @param $_numeroDocumento
     * @param $_tipoCliente
     * @param $_pais
     * @param $_ciudad
     * @param $_telefono
     */
    public function __construct($nombre, $apellido, $tipoDocumento, $numeroDocumento, $tipoCliente, $pais, $ciudad, $telefono)
    {
        $this->_nombre = $nombre;
        $this->_apellido = $apellido;
        $this->_tipoDocumento = $tipoDocumento;
        $this->_numeroDocumento = $numeroDocumento;
        $this->_tipoCliente = $tipoCliente;
        $this->_pais = $pais;
        $this->_ciudad = $ciudad;
        $this->_telefono = $telefono;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->_nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->_nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->_apellido;
    }

    /**
     * @param mixed $apellido
     */
    public function setApellido($apellido): void
    {
        $this->_apellido = $apellido;
    }

    /**
     * @return mixed
     */
    public function getTipoDocumento()
    {
        return $this->_tipoDocumento;
    }

    /**
     * @param mixed $tipoDocumento
     */
    public function setTipoDocumento($tipoDocumento): void
    {
        $this->_tipoDocumento = $tipoDocumento;
    }

    /**
     * @return mixed
     */
    public function getNumeroDocumento()
    {
        return $this->_numeroDocumento;
    }

    /**
     * @param mixed $numeroDocumento
     */
    public function setNumeroDocumento($numeroDocumento): void
    {
        $this->_numeroDocumento = $numeroDocumento;
    }

    /**
     * @return mixed
     */
    public function getTipoCliente()
    {
        return $this->_tipoCliente;
    }

    /**
     * @param mixed $tipoCliente
     */
    public function setTipoCliente($tipoCliente): void
    {
        $this->_tipoCliente = $tipoCliente;
    }

    /**
     * @return mixed
     */
    public function getPais()
    {
        return $this->_pais;
    }

    /**
     * @param mixed $pais
     */
    public function setPais($pais): void
    {
        $this->_pais = $pais;
    }

    /**
     * @return mixed
     */
    public function getCiudad()
    {
        return $this->_ciudad;
    }

    /**
     * @param mixed $ciudad
     */
    public function setCiudad($ciudad): void
    {
        $this->_ciudad = $ciudad;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->_telefono;
    }

    /**
     * @param mixed $telefono
     */
    public function setTelefono($telefono): void
    {
        $this->_telefono = $telefono;
    }




}