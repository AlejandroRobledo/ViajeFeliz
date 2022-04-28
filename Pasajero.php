<?php

class Pasajero
{
    // atributos
    private $nombreP;
    private $apellidoP;
    private $numeroTelP;
    private $dniP;

    // constructores

    public function __construct(string $nombreP, string $apellidoP, int $numTelP, int $dniP)
    {
        $this->nombreP = $nombreP;
        $this->apellidoP = $apellidoP;
        $this->numeroTelP = $numTelP;
        $this->dniP = $dniP;
    }

    // getters

    public function getNombreP() : string
    {
        return $this->nombreP;
    }

    public function getApellidoP() : string
    {
        return $this->apellidoP;
    }

    public function getNumeroTelP() : int
    {
        return $this->numeroTelP;
    }

    public function getDniP() : int
    {
        return $this->dniP;
    }

    // setters
    
    public function setNombreP($nombreP) : void
    {
        $this->nombreP = $nombreP;
    }

    public function setApellidoP($apellidoP) : void
    {
        $this->apellidoP = $apellidoP;
    }

    public function setNumeroTelP($numeroTelP) : void
    {
        $this->numeroTelP = $numeroTelP;
    }

    public function setDniP($dniP) : void
    {
         $this->dniP = $dniP;
    }

    // propias del tipo

    public function __toString() : string
    {
        return "\n" . "nombre: " . $this->getNombreP() .  " apellido: " . $this->getApellidoP() .
            " telefono: " . $this->getNumeroTelP() . " dni: " . $this->getDniP() . "\n";
    }
}
