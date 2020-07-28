<?php
include "clasedb.php";
extract($_REQUEST);
$db = new clasedb();
$conex = $db->conectar();

/*$sql="CREATE TABLE inmuebles(id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, 
	 	idem VARCHAR(50) NOT NULL, 
	 	estacionamiento ENUM('Si','No'), 
	 	status ENUM('Ocupado','Desocupado','Mantenimiento'), 
	 	tipo ENUM('Casa','Apartamento','Chalet','Quinta','Otro'),
	 	cod_postal VARCHAR(5));";

$result = mysqli_query($conex,$sql);	 	
if ($result) {
	echo "tabla creada con exito <br>";
} else {
	echo "la tabla no pudo ser creada <br>";
}

$sql="ALTER TABLE inmuebles ADD UNIQUE (idem)";

$result = mysqli_query($conex,$sql);
	if ($result) {
		echo "Y se logró que idem sea un atributo único <br>";
	} else {
		echo "No se pudo lograr asignar el atributo único a 'idem' <br>";
	}
*/
$generar = 0;

for ($i=0; $i < 20; $i++) { 
	$idm = rand(10, 2000);
    $cod = rand(1000, 5000);

    $sql = "INSERT INTO inmuebles (id, idem, estacionamiento, status, tipo, cod_postal) VALUES (NULL,'$idm','No','Ocupado','Casa','$cod')";

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

$sql = mysqli_query($conex, "SELECT * FROM inmuebles");  //CONSULTA
while($fila = mysqli_fetch_array($sql)){ //EXTRACCIÓN 
    //MATRIZ
    echo "<br>";
    echo "id: ".$fila['id']."<br>";  //MOSTRAR DATOS
	echo "idem: ".$fila['idem']."<br>";
	echo "Estacionamiento: ".$fila['estacionamiento']."<br>";
	echo "Estado: ".$fila['status']."<br>";
	echo "Tipo: ".$fila['tipo']."<br>";
	echo "Código postal: ".$fila['cod_postal']."<br>";
	echo "<br>";
}
mysqli_free_result($sql);
mysqli_close($conex);
?>