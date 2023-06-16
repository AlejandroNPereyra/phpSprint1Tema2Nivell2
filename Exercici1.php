<?php

/* Exercici 1
Escriu una funció que determini la quantitat total a pagar per una trucada telefònica segons les següents premisses:

Tota trucada que duri menys de 3 minuts té un cost de 10 cèntims.
Cada minut addicional a partir dels 3 primers és un pas de comptador i costa 5 cèntims.*/


// Funcion que devuelve una variable, con una cantidad random de minutos (Hasta 60 minutos limite!)

function getRandomCallMinutes() {
    return rand(0, 60);
}

$randomCallMinutes = getRandomCallMinutes();

echo "Call duration was ".$randomCallMinutes. " minutes.";
echo '<br>';

// Ahora hago el calculo del ejercicio utilizando esta variable random

$minCallCost = 10;
$callCost = ($randomCallMinutes-3)*5 + 10;

if ($randomCallMinutes < 3) {

    echo "Your call costs ".$minCallCost." cents.";

} else {

    echo "Your call costs ".$callCost." cents.";

}

?>