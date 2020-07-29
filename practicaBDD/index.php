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
?> 
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title></title>
</head>
<body>
	<header><h1>BDD</h1></header>
	<ul>
		<li><a href="registrar.php">Ingresar 20 registros</a></li>
		<li><a href="consultar.php">Realizar consulta</a></li>
	</ul>
</body>
</html>