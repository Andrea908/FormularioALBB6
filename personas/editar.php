<?php
extract($_REQUEST);
$data=unserialize($data);
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Editando personas</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="editar.css">
</head>
<body>
	<header><h1>Editando Personas</h1></header>
	
	<ul>
		<li><a href="../index.php">Inicio</a></li>
	    <li><a href="Formulario.html">Formulario</a></li>
	    <li><a href="./personas/PersonasControlador.php?operacion=index">Personas</a></li>
    </ul>

	 <form action="PersonasControlador.php" method="post" name="formulario">
	 	
	 	<table id="Main-container" align="center">

            <thead>
                <tr>
                    <th>Nombres</th><th>Apellidos</th><th>Cédula</th>
                </tr></thead>

                <td><input class="nombres" type="text" id="nombres" name="nombres" placeholder="Ej: Martin José" title="Ingrese sus nombres" value="<?=$data[1]?>"></td>
         
                <td><input class="apellidos" type="text" id="apellidos" name="apellidos" placeholder="Ej: Perez Salcedo" title="Ingrese sus apellidos" value="<?=$data[2]?>"></td>
	 		
	 		 	<td><input class="cedula" type="number" id="cedula" name="cedula" placeholder="Ej: 12345678" title="Ingrese su cédula" value="<?=$data[3]?>"></td>
	 			<td>
	 				<input type="hidden" name="id_persona" value="<?=$data[0]?>">
	 				<input type="hidden" name="operacion" value="actualizar">
	 				<input class="mod" type="submit" name="enviar" value="Modificar">
	 			</td>
	 		</tr>
	 	</table>
	 </form>
</body>
</html>