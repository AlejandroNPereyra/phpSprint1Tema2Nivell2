<?php

/*- Exercici 2

Imagina que som a una botiga on es ven:

Xocolata: 1 euro
Xiclets: 0,50 euros
Caramels: 1,50 euros

Implementa un programa que permeti afegir càlculs a un total de compres d'aquest tipus. 
Per exemple, que si comprem:

2 xocolates, 1 de xiclets i 1 de caramels, tinguem un programa que permeti anar afegint
 els subtotals a un total, tal que així:

funció(2 xocolates) + funció(1 de xiclets) + funció(1 de carmels) = 2 + 0.5 + 1.5
Sent, per tant, el total, 4.*/

$chocoNum = $_POST['chocoNum'];
$gumNum = $_POST['gumNum'];
$caramelNum = $_POST['caramelNum'];

$chocoPrice = 1;
$gumPrice = 0.5;
$caramelPrice = 1.5;

$chocoTotal = $chocoPrice*$chocoNum;
$gumTotal = $gumPrice*$gumNum;
$caramelTotal = $caramelPrice*$caramelNum;

$totalPrice = ($chocoTotal+$gumTotal+$caramelTotal);

echo "Total price per your buy is ".$totalPrice." €";

?>