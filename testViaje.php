<?php
include_once("Viaje.php");


/*Pre cargo un viaje de ejemplo*/
$codigo="pepito123";
$destino="Bahia Blanca";
$cantPasajeros=5;

$coleccionPasajeros[0]=["nombre"=>"Fernando","apellido"=>"Martinez","dni"=>36753991];
$coleccionPasajeros[1]=["nombre"=>"Carlitos","apellido"=>"Bala","dni"=>30881321];
$coleccionPasajeros[2]=["nombre"=>"Armin","apellido"=>"Van Buren","dni"=>33654321];
$coleccionPasajeros[3]=["nombre"=>"Jesus","apellido"=>"Reyes","dni"=>17358357];
$coleccionPasajeros[4]=["nombre"=>"Roxana","apellido"=>"Fernandez","dni"=>35159357];


$nuevoViaje= new Viaje($coleccionPasajeros,$codigo,$destino,$cantPasajeros);
echo $nuevoViaje;
print_r($coleccionPasajeros);

/**
 * Menu de opciones
 * 1 - Cargar informacion de viaje:
 * 2 - Modificar datos del viaje:
 * 3 - Ver datos del viaje
 */

 /*MENU DE OPCIONES*/
do{
    $opcion = seleccionarOpcion();

    switch ($opcion) {
        case '1':
            //Cargar información de un viaje
            $Viaje = cargarViaje($codigo,$destino,$cantPasajeros,$coleccionPasajeros);
            break;
        case '2':
            /*OPCION 2
            Modificar datos del viaje*/
            echo "Ingrese el numero de viaje que desea modificar:";
            $posicionElegida=trim(fgets(STDIN));
            $objetoViaje=$coleccionPasajeros[$posicionElegida-1];
            modificarDatosViaje($objetoViaje);
            break;
        case '3':
                 //Ver datos del viaje
                echo "Ingrese el numero de viaje que desea mostrar:";
                $posicionElegida=trim(fgets(STDIN));
                $objetoViaje=$coleccionPasajeros[$posicionElegida-1];
                echo $objetoViaje;
            break;
        case '4':
                //Salir
             $opcion = 4;
            break;
        }
}while( $opcion != 4);


function seleccionarOpcion(){
    //int $opcion
    $opcion = 0;
    echo" \n";
    echo"Elija una opcion valida: \n";
    echo" \n";
    while($opcion != 4){
        echo"Menú de opciones \n";
        echo"1)Cargar información de uno o varios viajes:\n";
        echo"2)Modificar datos del viaje (incluyendo los datos del pasajero) \n";
        echo"3)Ver datos del viaje \n";
        echo"4) Salir \n";

           $opcion = solicitarNumeroEntre(1,4);
        if($opcion!= 4){
            break;
        }
    }
    return $opcion;
}

/* Solicita al usuario un número en el rango [$min,$max]
 * @param int $min
 * @param int $max
 * @return int 
 */
function solicitarNumeroEntre($min, $max){

    //int $numero
    $numero = trim(fgets(STDIN));
    while (!is_int($numero) && !($numero >= $min && $numero <= $max)) {  //La primer negacion creemos que no es correcta
        echo "Debe ingresar un número entre " . $min . " y " . $max . ": ";
        $numero = trim(fgets(STDIN));
    }
    return $numero;
}


/*Opcion 1
  Cargar informacion del viaje*/
function cargarViaje($codigo,$coleccionPasajeros,$destino,$cantPasajeros){

   
$codigo=0;
$coleccionPasajeros;
$destino=" ";
$cantPasajeros=0;


/*Pido datos del viaje*/
echo "Ingrese el codigo del viaje: \n";
$codigo= trim(fgets(STDIN));
echo "Ingrese su destino: \n";
$destino= trim(fgets(STDIN));
echo "Ingrese la cantidad de pasajeros: \n";
$cantPasajeros=trim(fgets(STDIN));


/*Pido los datos del/los pasajeros*/
for($j=0;$j<$cantPasajeros;$j++){
    echo("por favor ingrese el nombre del pasajero: \n".$j+1);
    $nombre= trim(fgets(STDIN));
    echo("por favor ingrese el apellido del pasajero: \n".$j+1);
    $apellido= trim(fgets(STDIN));
    echo("por favor ingrese el numero de documento: \n".$j+1);
    $dni= trim(fgets(STDIN));
    $coleccionPasajeros[$j]=["nombre"=>$nombre,"apellido"=> $apellido, "dni"=>$dni];
}

}


/*Esta funcion recibe como parametro un objeto viaje
y modifica los datos de dicho viaje*/
function modificarDatosViaje($viaje){

   /*Le pido al usuario que indique el dato del viaje a modificar*/
   echo "Por favor,ingrese que tipo de dato desea modificar: \n";
   
   echo "1 - Ingrese el codigo del viaje que desea modificar: \n";
   echo "2 - Ingrese el destino a modificar: \n";
   echo "3 - Ingrese la cantidad de pasajeros que desea modificar: \n";
   
   $opcion=trim(fgets(STDIN));
    

    switch ($opcion) {
        case '1':
            echo "Ingrese el codigo nuevo:";
            $nuevoCodigo=trim(fgets(STDIN));
            $viaje->setCodigo($nuevoCodigo);
            echo $viaje->getCodigo();
            break;
        case'2':
            echo "Ingrese su nuevo destino:";
            $nuevoDestino=trim(fgets(STDIN));
            $viaje->setDestino($nuevoDestino);
            
        case'3':
            echo "Ingrese una nueva cantidad de pasajeros:";
            $viaje->setCantPasajeros(trim(fgets(STDIN)));        
        default:
            # code...
            break;
    }



}




   