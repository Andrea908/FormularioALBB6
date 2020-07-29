<?php
include "clasedb.php";
extract($_REQUEST);
$db = new clasedb();
$conex = $db->conectar();


$generar = 0;
$estacionamiento = array('Si','No');
$status = array('Desocupado','Ocupado','Mantenimiento');
$tipo = array('Casa','Apartamento','Chalet','Quinta','Otro');

for ($i=0; $i < 20; $i++) { 
	$numIdem = rand(10, 2000);
	$parking = rand(0, count($estacionamiento) -1);
    $estado = rand(0, count($status) -1);
    $type = rand(0, count($tipo) -1);
    $cod = rand(1000, 5000);

    $sql = "INSERT INTO inmuebles (id, idem, estacionamiento, status, tipo, cod_postal) VALUES(NULL,'".$numIdem."','".$estacionamiento[$parking]."','".$status[$estado]."','".$tipo[$type]."','".$cod."')";

$result = mysqli_query($conex,$sql);

    if ($result) {
    	$generar++;
    }
}//final del bucle

    if ($generar==20) {
    	echo "¡REGISTRO EXITOSO!";
    } else {
    	echo "REGISTRO NO EXITOSO";
    }
?>