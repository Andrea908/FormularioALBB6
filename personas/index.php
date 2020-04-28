<?php
extract($_REQUEST);
$data=unserialize($data);
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Lista de personas</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" type="text/css" href="lista.css">
	<script type="text/javascript">
		function eliminar(id) {
			if (confirm("Seguro desea eliminar el registro?")) {
				window.location="PersonasControlador.php?operacion=eliminar&id_persona="+id;
			}
		}
	</script>
</head>
<body>
	<header><h1>Lista de Personas</h1></header>

	<ul>
		<li><a href="../index.php">Inicio</a></li>
	</ul>

    <table id="Main-container" align="center">
    <center>
	<a class="reg" href="PersonasControlador.php?operacion=registrar&id_persona">Registrar</a></center>
    <thead><tr><th>Nro</th><th>Nombres</th><th>Apellidos</th><th>Cédula</th><th>Opciones</th></tr></thead>

		<?php $num=1;
		    for ($i=0; $i < $filas; $i++) {
			    echo "<tr>";
        ?>
    <td><?=$num?></td>
        <?php for ($j=1; $j < $campos; $j++) { ?>
        	<td><?=$data[$i][$j]?></td>
    <?php } ?>
    <td>
	    <a class="mo" href="PersonasControlador.php?operacion=modificar&id_persona=<?=$data[$i][0]?>">
	    <input class="mod" type="button" name="modificar" value="Modificar"></a>
        <a href="javascript:eliminar(<?=$data[$i][0]?>)">
        <input class="eli" type="button" name="eliminar" value="X"></a>
    </td>
    <?php
        $num++;
		} ?>
	</table>
</body>
</html>