<?php

class Viaje {

private $coleccionPasajeros;
private $codigo;
private $cantMaxPasajeros;
private $destino;
private $cantPasajeros;

function __construct($coleccionPasajeros,$codigo,$destino,$cantPasajeros){
    
    $this->coleccionPasajeros=$coleccionPasajeros;
    $this->codigo=$codigo;
    $this->destino=$destino;
    $this->cantPasajeros=$cantPasajeros;    
}

function getColeccionPasajeros(){

    return $this->coleccionPasajeros;
}

function getCodigo(){

    return $this->codigo;
}

function getDestino(){

    return $this->destino;
}

function getCantPasajeros(){
    
    return $this->cantPasajeros;
}

function setColeccionPasajeros($coleccionPasajeros){

    $this->coleccionPasajeros=$coleccionPasajeros;
}

function setCodigo($codigo){

    $this->codigo=$codigo;
}


function setDestino($destino){

    $this->destino=$destino;
}

function setCantPasajeros($cantPasajeros){
    $this->cantPasajeros=$cantPasajeros;
}

function __toString(){

    return " \n codigo: ".$this->getCodigo()."\n destino: ".$this->getDestino(). "\n coleccion_pasajeros ".$this->getColeccionPasajeros();
}

/*Esta funcion recibe como parametro datos de un pasajero y retorna un arreglo de dichos pasajeros*/
function pasajeros (string $nombre,$apellido,int $dni){

$arrayPasajeros=["nombre"=>$nombre,"apellido"=>$apellido,"dni"=>$dni];

return $arrayPasajeros;
}



}

