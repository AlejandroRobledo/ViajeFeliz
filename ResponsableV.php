<?php

class ResponsableV
{
    // atributos
    private $numEmpleado;
    private $numLicenciaEmp;
    private $nombreEmpleado;
    private $apellidoEmpleado;

    // constructores

    public function __construct($nEmp, $aEmp, $numEmpleado, $nLicEmp)
    {
        $this->numEmpleado = $numEmpleado;
        $this->numLicenciaEmp = $nLicEmp;
        $this->nombreEmpleado = $nEmp;
        $this->apellidoEmpleado = $aEmp;
    }

    // getters

    public function getNumEmpleado() : int
    {
    return $this->numEmpleado;
    }

    public function getNumLicenciaEmp() : int
    {
    return $this->numLicenciaEmp;
    }

    public function getNombreEmpleado() : string
    {
    return $this->nombreEmpleado;
    }

    public function getApellidoEmpleado() : string
    {
    return $this->apellidoEmpleado;
    }

    // setters

    public function setNumEmpleado($numEmpleado) : void
    {
        $this->numEmpleado = $numEmpleado;
    }

    public function setNumLicemciaEmp($numLicenciaEmp) : void
    {
        $this->numLicenciaEmp = $numLicenciaEmp;
    }

    public function setNombreEmpleado($nombreEmpleado) : void
    {
        $this->nombreEmpleado = $nombreEmpleado;
    }

    public function setApellidoEmpleado($apellidoEmpleado) : void
    {
        $this->apellidoEmpleado = $apellidoEmpleado;
    }

    // propias del tipo

    public function __toString() : string
    {
        return "numero de empleado:" . $this->getNumEmpleado() . "Numero de Licencia:" . $this->getNumLicenciaEmp() .
            "nombre empleado:" . $this->getNombreEmpleado() . "apellido Empleado" . $this->getApellidoEmpleado();
    }
}
