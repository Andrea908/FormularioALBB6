<?php

include 'Animales.php';

echo "Probando Herencia<br>";
$objEuropa = new Europa(600);
echo "<h2>En total, ¿cuántas especies están en peligro en Europa?</h2>";
echo "Hay: ".$objEuropa->NumeroEuropa(600)." especies en peligro de extinción en el continente europeo";
?>