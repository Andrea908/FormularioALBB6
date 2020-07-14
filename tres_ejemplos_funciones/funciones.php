<?php
/*round(). Es la funcion para redondear numeros decimales. La sintaxis es: round(numero: el valor a redondear, presicion: es opcional, es el numero de digitos a redondear, por ejemplo: redondear 2 veces, y el modo (de redondeo), que pueden ser el half_up, half_down, y las demás que se pueden apreciar en los ejemplos)*/
echo "<b>Ejemplos con round</b> <br><br>";
//primer ejemplo
echo "<b>Primer ejemplo</b> <br>";
echo "Ejemplo sencillo del manejo del round. Si se desea redondear la cifra 6.8, esto daría como resultado: ".round(6.8)."<br>";//7
//segundo ejemplo
echo "<b>Segundo ejemplo</b> <br>";
echo "Probando el modo de redondeo hacia arriba: El total de mis notas en física fue un 18.5. Si se redondea, eso sería un: ".round(18.5, 0, PHP_ROUND_HALF_UP)."<br>";//19
//tercer ejemplo
echo "<b>Tercer ejemplo</b> <br>";
echo "Probando el modo de redondeo hacia abajo: Si bien, yo le puedo quitar el decimal a esta cifra: 6.30, y dejarlo como número entero, entonces quedaría de esta forma: ".round(6.30, 0, PHP_ROUND_HALF_DOWN)."<br><br>";//6

/*floor() La función floor permite eliminar la parte decimal de un número redondeándolo hacia abajo. Por ejemplo, 11.22 se redondearía a 11, 11.9999 se redondearía a 11*/
echo "<b>Ejemplos con floor</b> <br><br>";
//primer ejemplo
echo "<b>Primer ejemplo</b> <br>";
echo "Con la función floor podemos quitarle los decimales al numero 40.247, quedando como un número entero, así: ".floor(40.247)."<br>";//40
//segundo ejemplo
echo "<b>Segundo ejemplo</b> <br>";
$valor1 = 20.344;
$valor2 = 130.345;
echo "Redondeando la cantidad $valor1 daría ".floor(20.344).", y de $valor2 sería ".floor(130.345)."<br>";//20 y 130
//tercer ejemplo aplicando una funcion
echo "<b>Tercer ejemplo</b> <br>";
function redondeoAbajo($numbers){
	$redondeos=floor($numbers / 10) + 7;
	return $redondeos;
}
echo "Primero: ".redondeoAbajo(67.990)."<br>";
echo "Segundo: ".redondeoAbajo(10.950)."<br>";
echo "Tercero: ".redondeoAbajo(90.910)."<br><br>";

/*ceil() tiene como funcionalidad redondear los decimales hacia arriba, o mejor dicho hasta el siguiente número entero*/
echo "<b>Ejemplos con ceil</b> <br><br>";
//primer ejemplo sencillo
echo "<b>Primer ejemplo</b> <br>";
echo "Mica obtuvo un puntaje de 64.5 en las preliminares. Eso es considerado un ".ceil(64.5)."<br>"; //resultado 65

//segundo ejemplo aplicando una funcion
echo "<b>Segundo ejemplo</b> <br>";
function redondear($numeros){
	$redondeos=ceil($numeros / 30) + 4;
	return $redondeos;
}
echo "Primero: ".redondear(67.990)."<br>";
echo "Segundo: ".redondear(10.950)."<br>";
echo "Tercero: ".redondear(90.910)."<br>";

//tercer ejemplo
echo "<b>Tercer ejemplo</b> <br>";
echo "Redondeando -7.51. Eso deja un: ".ceil(-7.51)."<br><br>"; //resultado -7

/*rand(). Genera un número entero aleatorio. Si se invoca sin los argumentos opcionales min y max, rand() devuelve un entero pseudoaleatorio entre 0 y getrandmax(). Para obtener un número aleatorio entre 5 y 15 (incluidos), por ejemplo, use rand(5, 15).*/
echo "<b>Ejemplos con rand</b> <br><br>";
//primer ejemplo
echo "<b>Primer ejemplo</b> <br>";
echo "Dependiendo del valor mínimo y máximo colocados como parámetros, arrojará un número aleatorio. En este ejemplo parte del 34 al 60, arroja números que vaya por ese rango --> ".rand(34, 60)."<br>";//arroja 58, 59, 57, 60 ...
//segundo ejemplo
echo "<b>Segundo ejemplo</b> <br>";
echo "Aquí los parámetros son 10 el mínimo, y 35 el máximo --> ".rand(10, 35)."<br>";
//tercer ejemplo
echo "<b>Tercer ejemplo</b> <br>";
echo "Aquí los parámetros son 9 el mínimo, y 40 el máximo --> ".rand(9, 40)."<br><br>";

/*strtoupper() Convierte una cadena a mayúsculas. Todos los caracteres*/
echo "<b>Ejemplos con strtoupper: </b> <br><br>";
//primer ejemplo
echo "<b>Primer ejemplo</b> <br>";
$virus = "alerta de un nuevo virus <br>";
echo "Original: $virus";
echo "Con strtoupper: ".strtoupper($virus);//Devuelve: ALERTA DE UN NUEVO VIRUS
//segundo ejemplo
echo "<b>Segundo ejemplo</b> <br>";
$venta = "prOHibida SU Venta <br>";
echo "Original: $venta";
echo "Con strtoupper: ".strtoupper($venta);
//tercer ejemplo
echo "<b>Tercer ejemplo</b> <br>";
$amenaza = "se ha Detectado una NUEVA amenaza <br>";
echo "Original: $amenaza";
echo "Con strtoupper: ".strtoupper($amenaza)."<br>";

//strolower() Convierte una cadena a minúsculas. Todos los caracteres
echo "<b>Ejemplos con strtolower: </b> <br><br>";
//primer ejemplo
echo "<b>Primer ejemplo</b> <br>";
$galletas = "HICE GALLETAS CON CHISPAS DE CHOCOLATE <br>";
echo "Original: $galletas";
echo "Con strolower: ".strtolower($galletas); // Devuelve: hola que tal como estas
//segundo ejemplo
echo "<b>Segundo ejemplo</b> <br>";
$parque = "HOY FUIMOS al PARQUE. Nos ENTRETUVIMOS un RATO <br>";
echo "Original: $parque";
echo "Con strolower: ".strtolower($parque);
//tercer ejemplo
echo "<b>Tercer ejemplo</b> <br>";
$perrito = "EL PERRRITO de MIA es ADORABLE y JUGUETON <br>";
echo "Original: $perrito";
echo "Con strolower: ".strtolower($perrito)."<br>";

//ucfirst() Devuelve un string con el primer carácter de $str en mayúscula
echo "<b>Ejemplos con ucfirst</b> <br><br>";
//primer ejemplo
echo "<b>Primer ejemplo</b> <br>";
$eclipse = "hoy habrá un eclipse lunar <br>";
echo "Original: $eclipse";
echo "Con ucfirst: ".ucfirst($eclipse); // Devuelve: Hoy habrá un eclipse lunar
//segundo ejemplo
echo "<b>Segundo ejemplo</b> <br>";
$canciones = "me gustan las canciones de Coldplay <br>";
echo "Original: $canciones";
echo "Con ucfirst: ".ucfirst($canciones);
//tercer ejemplo
echo "<b>Tercer ejemplo</b> <br>";
$loro = "el loro de mi vecina repite mucho las palabras <br>";
echo "Original: $loro";
echo "Con ucfirst: ".ucfirst($loro)."<br>";

/*ucwords() Convierte a mayúsculas el primer carácter de cada palabra de una cadena $str (caracteres alfanuméricos)*/
echo "<b>Ejemplos con ucwords</b> <br><br>";
//primer ejemplo
echo "<b>Primer ejemplo</b>: <br>";
$string = "la osa mayor <br>";
echo "Original: $string";
echo "Con ucwords: ".ucwords($string);// Devuelve: 
//segundo ejemplo
echo "<b>Segundo ejemplo</b>: como aquí se escribió con todas mayúsculas, no se nota la diferencia<br>";
$rosas = "UN JARDÍN DE ROSALES <br>";
echo "Original: $rosas";
echo "Con ucwords: ".ucwords($rosas);
//tercer ejemplo
echo "<b>Tercer ejemplo</b>: <br>";
$sol = "el sol brilla con mucha intensidad <br>";
echo "Original: $sol";
echo "Con ucwords: ".ucwords($sol)."<br>";

//strlen(). Define la longitud de una cadena
echo "<b>Ejemplos con strlen</b> <br><br>";
//primer ejemplo
echo "<b>primer ejemplo</b>: <br>";
$gato = "Precioso gato negro"; //Prueba a cambiar el texto cadena por otro
echo "$gato <br>";
$longitud = strlen($gato)."<br>";
echo "La longitud de la cadena es: $longitud";
//segundo ejemplo
echo "<b>segundo ejemplo</b>: framento de la canción 'The Scientist'<br>";
$primerFragmento = "Nobod say it was easy"; 
$segundoFragmento = "Is such a shame for us to apart";
echo "$primerFragmento <br>";
echo "$segundoFragmento <br>";
$contar1 = strlen($primerFragmento);
$contar2 = strlen($segundoFragmento);
echo "En el primer framento se cuentan: $contar1 caracteres, mientras que en el segundo se cuentan: $contar2 <br>";
//tercer ejemplo
echo "<b>Tercer ejemplo</b>: <br>";
$robot = " ROBOT ";//aquí se cuentan los espacios en blanco
echo "$robot <br>";
echo "La longitud de la cadena es: ".strlen($robot).". Se toman en cuentan los espacios en blanco<br><br>";//devuelve: 7

//var_dump() Mostrar el contenido de una variable
echo "<b>Ejemplos con var_dump</b> <br><br>";
//primer ejemplo
echo "<b>Primer ejemplo</b>: <br>";
echo "<b>Imprime:</b> ";
$arreglo = array(8, 14, 'Dorado', 'Purpura');
var_dump( $arreglo )."<br>";
//Devuelve: array(4) { [0]=> int(1) [1]=> int(2) [2]=> string(6) "Dorado" [3]=> string(7) "Purpura" }

//segundo ejemplo
echo "<br>";
echo "<b>Segundo ejemplo</b>: numérico <br>";
$numero = 1643;
var_dump($numero)."<br>";
//tercer ejemplo
echo "<br><b>Tercer ejemplo</b>: con caracteres <br>";
$espacio = "Galaxia";
echo "Longitud: ";
var_dump($espacio)."<br>";

//count() Contar el número de elementos en un array u objeto
echo "<br><br><b>Ejemplos con count</b> <br><br>";
//primer ejemplo
echo "<b>Primer ejemplo</b>: <br>";
$palabras=array("Rutas", "Bosques", "Pinos", "Montañas");
echo "Rutas, Bosques, Pinos, Montañas <br>";
echo "Se cuentan en el array: ".count($palabras)."<br>";
//segundo ejemplo
echo "<b>Segundo ejemplo</b>: <br>";
$piedras = array("cuarzo", "lapis lásuli", "esmeralda", 2, 4, 9);
echo "Array: cuarzo, lapis lásuli, esmeralda, 2, 4, 9 <br>";
echo "Se cuentan en el array: ".count($piedras)."<br>";
//tercer ejemplo
echo "<b>Tercer ejemplo</b>: aquí Asia y Europa son dos arrays juntos en uno solo<br>";
$paises=array("Asia"=>array("Indonesia","Japón","Arabia"),
              "Europa"=>array("Italia","Inglaterra","Francia"));
echo "Array-1: Asia => Indonesia, Japón, Arabia <br>";
echo "Array-2: Europa => Italia, Inglaterra, Francia <br>";
//contando
echo "Número de países por continente, contando solo la cantidad de arrays: ".count($paises)."<br>";
echo "Número de países por continente, contando todos los elementos del array: ".count($paises,1)."<br><br>";

/*explode() Sintaxis: explode(delimiter, string)
Divide una cadena $string y lo convierte en un array. Cada uno de los strings formados por la división $delimeter son elementos del array que se crea. El límite $limit indica el número máximo de elementos que devolverá, y el último elemento contendrá el resto del string. Si limit es negativo, se devolverán todos los elementos a excepción de los últimos. Si $limit es 0 se tratará como 1. Devuelve el array de strings creados por la división $delimeter. Si $delimeter está vacío, explode() devuelve false. Si no se encuentra el delimitador en el string, se devuelte un array con un único elemento, el cual será el mismo string.*/
echo "<b>Ejemplos con explode</b> <br><br>";
//primer ejemplo
echo "<b>Primer ejemplo</b>: <br>";
$postres = "pan de guayaba, moose de chocolate, torta tres leches, pudín de vainilla";
echo "Hay $postres. ¿Qué postre elige? <br>";
$porciones = explode(", ", $postres);
echo "<b>Se escoge</b>: <b>".$porciones[0]."</b> y <b>".$porciones[2]."</b> <br>";//Como el contador comienza desde cero, se toma el '0' como el primer parámetro del texto

//segundo ejemplo 
echo "<b>Segundo ejemplo</b>: <br>";
$string = "Samurái, Cerezo, Katana, Ninja, Kimono, Monte Fuji";
$array = explode(", ", $string, 4);//aquí se está pidiendo que se muestren cuatro, pero como solo imprime 3 no se muestran los demás
//$array sólo estará compuesto de 3 elementos:
echo $array[0].PHP_EOL; //esto le da espacios entre elementos
echo $array[1].PHP_EOL; 
echo $array[2].PHP_EOL."<br>";
//develve solo los primeros elementos de la cadena

//tercer ejemplo con el parámetro $limit
echo "<b>Tercer ejemplo</b>: los cuatro nombres después de Carlos no se muestran, ya que se especificó el límite con -4 <br>";
$string = "Alfonso, Bárbara, Carlos, Daniela, Emiliano, Fernando, Giovanna";
echo "<b>Original:</b> $string <br>";
echo "<b>Con explode:</b> <br>";
$array = explode(", ", $string, -4);
foreach ($array as $arr){//el foreach sirve para imprimir los array
    echo $arr."<br><br>";//los cuatro nombres después de Carlos no se muestran, ya que se especificó el límite
}

/*implode() Sintaxis: implode(glue, pieces). Devuelve un string con todos los elementos del array en el mismo orden, separados por el pegamento. Si se usa un array vacío devuelve un string vacío*/
echo "<b>Ejemplos con implode</b> <br><br>";
//primer ejemplo
echo "<b>Primer ejemplo</b>: Une los elementos con otro elemento <br>";
$horoscopoChino = array("rata", "buey", "tigre", "conejo", "dragón", "serpiente", "caballo", "cabra", "mono", "cerdo", "perro", "gallo", "búfalo");
echo $conjunto_horoscopoChino = implode("***", $horoscopoChino)."<br>";
//segundo ejemplo
echo "<b>Segundo ejemplo</b>: <br>";
$elementos = array("Madera", "Metal", "Fuego", "Agua", "Tierra");
echo $conjunto_elementos = implode("-°-", $elementos)."<br>";
//tercer ejemplo
echo "<b>Tercer ejemplo</b>: <br>";
$frutas=array('FRESA', 'PIÑA', 'MANGO', 'MORA');
echo "Divididos por un guión: ";
$array=implode("-", $frutas);
echo $array;

echo "<br>";
echo "Divididos con una coma: ";
$array=implode(", ", $frutas);
echo $array;