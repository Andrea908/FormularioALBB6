<?php
    include('clasedb.php');
    extract($_REQUEST);

    $db=new clasedb();
    $con=$db->conectar(); //solventar el problema de variables en la base de datos o en el codigo
    $sql="INSERT INTO registro_de_animales VALUES(NULL,'".$especie."','".$nombre."','".$cant_ojos."', '".$cant_patas."')";
    $resultado=mysqli_query($con, $sql);
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="Animales_HojaEstilo.css">
    <link rel="stylesheet" type="text/css" href="recibir_formulario.css">
</head>
<body>
    <header><h1>Animales</h1></header>

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