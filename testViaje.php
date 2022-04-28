<?php
include_once("Viaje.php");
include_once("Pasajero.php");
include_once("ResponsableV.php");

/*Pre cargo un viaje de ejemplo*/
/*
$codigo="pepito123";
$destino="Bahia Blanca";
$cantPasajeros=5;

$coleccionPasajeros[0]=["nombre"=>"Fernando","apellido"=>"Martinez","dni"=>36753991];
$coleccionPasajeros[1]=["nombre"=>"Carlitos","apellido"=>"Bala","dni"=>30881321];
$coleccionPasajeros[2]=["nombre"=>"Armin","apellido"=>"Van Buren","dni"=>33654321];
$coleccionPasajeros[3]=["nombre"=>"Jesus","apellido"=>"Reyes","dni"=>17358357];
$coleccionPasajeros[4]=["nombre"=>"Roxana","apellido"=>"Fernandez","dni"=>35159357];
*/

/**
 * Menu de opciones
 * 1 - Cargar informacion de viaje:
 * 2 - Modificar datos del viaje:
 * 3 - Ver datos del viaje
 */

/*MENU DE OPCIONES*/
do {
    $opcion = seleccionarOpcion();

    switch ($opcion) {/*  */
        case '1':

            //Cargar información de un viaje
            $nuevoViaje = cargarViaje();
            //echo $nuevoViaje; // para testear
            break;
        case '2':
            /*OPCION 2
            Modificar datos del viaje*/
            echo "Ingrese el numero de viaje que desea modificar:";
            $posicionElegida = trim(fgets(STDIN));
            $objetoViaje = $coleccionPasajeros[$posicionElegida - 1];
            modificarDatosViaje($objetoViaje);
            break;
        case '3':
            //Ver datos del viaje
            echo $nuevoViaje;
            break;
        case '4':
            //Salir
            $opcion = 4;
            break;
    }
} while ($opcion != 4);

/**
 * Muestra cartel de opciones y devuelve la opcion selecciona.
 */
function seleccionarOpcion()
{
    //int $opcion
    $opcion = 0;
    echo " \n";
    echo "Elija una opcion valida: \n";
    echo " \n";
    while ($opcion != 4) {
        echo "Menú de opciones \n";
        echo "1)Cargar información de uno o varios viajes:\n";
        echo "2)Modificar datos del viaje (incluyendo los datos del pasajero) \n";
        echo "3)Ver datos del viaje \n";
        echo "4) Salir \n";

        $opcion = solicitarNumeroEntre(1, 4);
        if ($opcion != 4) {
            break;
        }
    }
    return $opcion;
}

/**
 * Solicita al usuario un número en el rango [$min,$max]
 * @param int $min
 * @param int $max
 * @return int
 */
function solicitarNumeroEntre($min, $max)
{
    //int $numero
    $numero = trim(fgets(STDIN));
    while (!is_int($numero) && !($numero >= $min && $numero <= $max)) {  //La primer negacion creemos que no es correcta
        echo "Debe ingresar un número entre " . $min . " y " . $max . ": ";
        $numero = trim(fgets(STDIN));
    }
    return $numero;
}

/**
 * Cargar informacion del viaje (Opcion 1).
 * 
 * @return void
 */
function cargarViaje()
{
    //Creo el objeto Responsable
    $objRespo = new ResponsableV("Ricardo", "Mollo", "15835096", "2336");
    //$nombreP,$apellidoP,$numTelP,$dniP
    $objPasajero1 = new Pasajero("Alejandro", "Robledo", 4776543, 35987384);
    $objPasajero2 = new Pasajero("Sandra", "Hernandez", 4760231, 11341019);
    $objPasajero3 = new Pasajero("Daniel", "Chubasco", 4461928, 35987384);
    $objPasajero4 = new Pasajero("Rita", "Aldana", 4467358, 14173188);
    //Coloco los objetos Pasajero en un arreglo de objetos pasajeros
    $coleccionPasajeros = [$objPasajero1, $objPasajero2, $objPasajero3, $objPasajero4];
    //creo un objeto Viaje
    $unViaje = new Viaje($coleccionPasajeros, 2336, "El Bolson", "33", $objRespo);

    // muestra la coleccion de pasajeros
    //$unViaje->mostrarDatosPasajeros(); // para testear

    //Seteamos al atributo que hace referencia a la coleccion de objetos pasajero

    /*  for ($i = 0; $i < count($coleccionPasajeros); $i++) {

        echo "objeto:" . $coleccionPasajeros[$i];
    } */
    return $unViaje;
}

/**
 * Esta funcion recibe como parametro un objeto viaje
 * y modifica los datos de dicho viaje.
 */
function modificarDatosViaje($viaje)
{
    /*Le pido al usuario que indique el dato del viaje a modificar*/
    echo "Por favor,ingrese que tipo de dato desea modificar: \n";

    echo "1 - Ingrese el codigo del viaje que desea modificar: \n";
    echo "2 - Ingrese el destino a modificar: \n";
    echo "3 - Ingrese la cantidad de pasajeros que desea modificar: \n";

    $opcion = trim(fgets(STDIN));

    switch ($opcion) {
        case '1':
            echo "Ingrese el codigo nuevo:";
            $nuevoCodigo = trim(fgets(STDIN));
            $viaje->setCodigo($nuevoCodigo);
            echo $viaje->getCodigo();
            break;
        case '2':
            echo "Ingrese su nuevo destino:";
            $nuevoDestino = trim(fgets(STDIN));
            $viaje->setDestino($nuevoDestino);

        case '3':
            echo "Ingrese una nueva cantidad de pasajeros:";
            $viaje->setCantPasajeros(trim(fgets(STDIN)));
        default:
            # code...
            break;
    }
}
