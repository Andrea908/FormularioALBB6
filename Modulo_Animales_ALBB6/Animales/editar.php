<?php
extract($_REQUEST);
$data=unserialize($data);
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Editando Animales</title>
	<link rel="stylesheet" type="text/css" href="Animales_HojaEstilo.css">
	<link rel="stylesheet" type="text/css" href="editar.css">
</head>
<body>
	<header><h1>Animales</h1></header>
	<ul>
		<li><a href="../index.php">Inicio</a></li>
	    <li><a href="Formulario_Animales.html">Formulario</a></li>
	    <li><a href="./Animales/AnimalesControlador.php?operacion=index">Animales</a></li>
    </ul>

	<form action="AnimalesControlador.php" method="post" name="formulario">

	 	<table id="Main-container">
	 		<thead>
	 			<tr>
	 				<th>Especie</th><th>Nombre</th><th>Cant_Ojos</th><th>Cant_Patas</th>
	 			</tr></thead>
	 			
	 				<td>
                        <input class="especie" type="text" id="especie" name="especie" placeholder="Ej: Mamífero" title="Ingrese la especie" value="<?=$data[1]?>">
                    </td>
                    <td>
                        <input class="nombre" type="text" id="nombre" name="nombre" placeholder="Ej: Zorro" title="Ingrese el nombre" value="<?=$data[2]?>">
                    </td>
                    <td>
                        <input class="ojos" type="number" id="ojos" name="ojos" placeholder="Ej: 2" title="Ingrese la cantidad de ojos" value="<?=$data[3]?>">
                    </td>
                    <td>
                        <input class="patas" type="number" id="patas" name="patas" placeholder="Ej: 4" title="Ingrese la cantidad de patas" value="<?=$data[4]?>">
                    </td>
	 		
	 			<input type="hidden" name="id_animal" value="<?=$data[0]?>">
	 			<input type="hidden" name="operacion" value="actualizar">
	 			<input class="mod" type="submit" name="modificar" value="Modificar">
	 	</table>
	</form>	
</body>
</html>