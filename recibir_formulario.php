<?php
    include('clasedb.php');
    
    extract($_REQUEST);

    $db=new clasedb();
    $con=$db->conectar();
    $sql="INSERT INTO datos_personales VALUES(NULL,'".$nombres."','".$apellidos."','".$cedula."')";
    $resultado=mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="recibir_formulario.css">
</head>
<body>
    <header><h1>Formulario</h1></header>
    
	<?php if ($resultado) {
	?>	
	<b>Registro ingresado ---> <a reg href="index.php">Volver</a></b>
	<?php
    }else{
    ?>      
    <b>Registro no ingresado ---> <a href="index.php">Volver</a></b>
    <?php
	}
    ?>
</body>
</html>