<?php
//ejercicio numero 1. Una cadena mayor a 20 caracteres, donde se le restan los primeros 3, y los ultimos 5
echo "<b>Ejercicio 1</b>: Una cadena mayor a 20 caracteres, donde se le restan los primeros 3 caracteres, y los ultimos 5 <br>";

$juego = "The Legend of Zelda of Nintendo";
$juego1 = substr("$juego", 3, -5);
echo "<b>Título del juego original</b>: $juego <br>";
echo "<b>Título del juego cortado</b>: $juego1 <hr>";

//ejercicio numero 2. Mostrando solo 10 caracteres de la cadena
echo "<b>Ejercicio 2</b>: Mostrando solo los restantes 10<br>";

$juego = "The Legend of Zelda of Nintendo";
$juego1 = substr("$juego", -10);
echo "<b>Título del juego original</b>: $juego <br>";
echo "<b>Título del juego cortado</b>: $juego1 <hr>";

//ejercicio numero 3. Se necesita que se muestren los 10 caracteres retantes después de haberle quitado los primeros 5
echo "<b>Ejercicio 3</b>: Se muestran los 10 restantes una vez se haya quitado los primeros 5<br>";

$juego = "The Legend of Zelda of Nintendo";
$juego1 = substr("$juego", 5);
echo "<b>Título del juego original</b>: $juego <br>";
echo "<b>Título del juego cortado</b>: $juego1";
 ?>