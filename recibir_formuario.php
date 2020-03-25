<?php
    include('clasedb.php');
    $Names = $_POST["Names"]
    $Surnames = $_POST["Surnames"]
    $CI = $_POST["CI"]

    extract($_REQUEST);

    $db=new clasedb();
    $con=$db->conectar();
    $sql="INSERT INTO personal_information(Names, Surnames, CI) VALUES (NULL'".$Names."', '".$Surnames."', '".$CI."')";
    $result=mysql_query($con, $sql, $insertar);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	if ($result) {
	?>	
	<b>Registro ingresado <a href="index.php">Volver</a></b>
	
	<?php
}   else{
?>      
        <b>Registro no Ingresado <a href="index.php">Volver</a></b>
     <?php
	}
?>

</body>
</html>