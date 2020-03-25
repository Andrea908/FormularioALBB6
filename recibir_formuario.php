<?php
    include('clasedb.php');

    extract($_REQUEST);

    $db=new clasedb();
    $con=$db->conectar();
    $sql="INSERT INTO Personal_Information VALUES(NULL, '".$first_name."','".$Surnames."', '".$CI."')";
    $resultado=mysql_query($con, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	if ($resultado) {
	?>	
	<b>Registro ingresado ---> <a href="index.php">Volver</a></b>
	<?php
	}else{
?>
     <b>Registro no Ingresado --> <a href="index.php">Volver</a></b>
     <?php
	}
?>

</body>
</html>