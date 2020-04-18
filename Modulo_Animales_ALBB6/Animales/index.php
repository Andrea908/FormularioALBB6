<?php
extract($_REQUEST);
$data=unserialize($data);
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Lista de animales</title>
	<link rel="stylesheet" type="text/css" href="Animales_HojaEstilo.css">
	<link rel="stylesheet" type="text/css" href="index.css">
	<script type="text/javascript">
		function eliminar(id) {
			if (confirm("Seguro desea eliminar el registro?")) {
				window.location="AnimalesControlador.php?operacion=eliminar&id_animal="+id;
			}
		}
	</script>
</head>
<body>
	<header><h1>Animales</h1></header>

	<ul>
		<li><a href="../index.php">Inicio</a></li>
	    <li><a href="../Formulario_Animales.html">Formulario</a></li>
	    <li><a href="./Animales/AnimalesControlador.php?operacion=index">Animales</a></li>
    </ul>

<table id="Main-container">
<center>
    <a class="reg" href="AnimalesControlador.php?operacion=registrar">Registrar</a></center>
    <thead><tr><th>id</th><th>especie</th><th>nombre</th><th>cant_ojos</th><th>cant_patas</th><th>Opciones</th></tr></thead>
    
	    <?php $num=1;
		    for ($i=0; $i < $filas; $i++) {
			    echo "<tr>"; 
        ?>
    <td><?=$num?></td>
        <?php for ($j=1; $j < $campos; $j++) { ?>
        	<td><?=$data[$i][$j]?></td>
    <?php } ?>
    <td>
    	<a class="mo" href="AnimalesControlador.php?operacion=modificar&id_animal=<?=$data[$i][0]?>">
	    <input class="mod" type="button" name="modificar" value="Modificar"></a>
        <a class="el" href="javascript:eliminar(<?=$data[$i][0]?>)">
    	<input class="eli" type="button" name="eliminar" value="X"></a>
    </td>
    <?php
        $num++;
		}  ?>
	</table>
</body>
</html>