<?php

class Viaje {

private $coleccionPasajeros;
private $codigo;
private $cantMaxPasajeros;
private $destino;

function __construct($coleccionPasajeros,$codigo,$cantMaxPasajeros,$destino){
    
    $this->coleccionPasajeros=$coleccionPasajeros;
    $this->codigo=$codigo;
    $this->cantMaxPasajeros=$cantMaxPasajeros;
    $this->destino=$destino;    
}

function getColeccionPasajeros(){

    return $this->coleccionPasajeros;
}

function getCodigo(){

    return $this->codigo;
}

function getCantMaxPasajeros(){

    return $this->getCantMaxPasajeros;
}

function getDestino(){

    return $this->destino;
}

function setColeccionPasajeros($coleccionPasajeros){

    $this->coleccionPasajeros=$coleccionPasajeros;
}

function setCodigo($codigo){

    $this->codigo=$codigo;
}

function setCantMaxPasajeros($cantMaxPasajeros){

    $this->cantMaxPasajeros=$cantMaxPasajeros;
}

function setDestino($destino){

    $this->destino=$destino;
}

function __toString(){

    return " \n id: ".$this->getCodigo()."\n destino: ".$this->getDestino()."\n cantMaxPasajeros: ".$this->getCantMaxPasajeros()." \n coleccion_pasajeros: ".$this->getColeccion_pasajeros();
}

/*Esta funcion recibe como parametro datos de un pasajero y retorna un arreglo de dichos pasajeros*/
function arrayPasajeros (string $nombre,$apellido,int $dni){

$pasajeros=["nombre"=>$nombre,"apellido"=>$apellido,"dni"=>$dni];

return $pasajeros;
}



}

