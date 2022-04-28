<?php

class Viaje
{
    // atributos
    private $coleccionPasajeros;
    private $codigo;
    private $destino;
    private $cantPasajeros;
    private $objResp;

    // constructores
    function __construct($coleccionPasajeros, $codigo, $destino, $cantPasajeros, $objResp)
    {
        $this->coleccionPasajeros = $coleccionPasajeros;
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->cantPasajeros = $cantPasajeros;
        $this->objResp = $objResp;
    }

    // getters

    public function getObjResp() : ResponsableV
    {
        return $this->objResp;
    }

    public function getColeccionPasajeros() : array
    {
        return $this->coleccionPasajeros;
    }

    public function getCodigo() : int
    {
        return $this->codigo;
    }

    public function getDestino() : string
    {
        return $this->destino;
    }

    public function getCantPasajeros() : Pasajero
    {
    return $this->cantPasajeros;
    }

    // setters

    public function setColeccionPasajeros($coleccionPasajeros) : void
    {
        $this->coleccionPasajeros = $coleccionPasajeros;
    }

    public function setCodigo($codigo) : void
    {
        $this->codigo = $codigo;
    }

    public function setDestino($destino) : void
    {
        $this->destino = $destino;
    }

    public function setObjResp($objResp) : void
    {
        $this->cantPasajeros = $objResp;
    }

    public function setCantPasajeros($cantPasajeros) : void
    {
        $this->cantPasajeros = $cantPasajeros;
    }

    // propias del tipo

    public function __toString() : string
    {
        return " \n codigo: " . $this->getCodigo() . "\n destino: " . $this->getDestino() .
            "\n coleccion_pasajeros " . $this->mostrarDatosPasajeros() . "/n Responsable del viaje: " . $this->getObjResp();
    }

    /**
     * Esta funcion muestra por pantalla la coleccion objetos pasajero
     */
    public function mostrarDatosPasajeros() : void
    {
        for ($i = 0; $i < count($this->coleccionPasajeros); $i++) {
            echo "Pasajero " . ($i + 1) . " : " . $this->coleccionPasajeros[$i];
        }
    } 
}
