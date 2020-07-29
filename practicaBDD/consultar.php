<?php
include "clasedb.php";
extract($_REQUEST);
$db = new clasedb();
$conex = $db->conectar();
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Consultar registros</title>
	<?php include "scripts.php"; ?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-body">
						<div><!--id="tablaDatatable"-->
							<table class="table table-striped table-condensed" id="iddatatable">
								<h3>Mostrar todos los datos</h3>
		                        <thead>
			                        <tr style="background-color: #007979; color: white; font-weight: bold;">
				                        <td>Idem</td>
			                            <td>Estacionamiento</td>
			                            <td>Status</td>
			                            <td>Tipo</td>
			                            <td>Codigo postal</td>
			                        </tr>
		                        </thead>
		                        <tfoot style="background-color: #ccc; color: white; font-weight: bold;">
			                        <tr>
				                        <td>Idem</td>
			                            <td>Estacionamiento</td>
			                            <td>Status</td>
			                            <td>Tipo</td>
			                            <td>Codigo postal</td>
			                        </tr>
		                        </tfoot>
		                        <tbody>
                                    <?php
                                    $sql = "SELECT * FROM inmuebles"; 
                                        $result = mysqli_query($conex,$sql);
                                        while($fila = mysqli_fetch_array($result)){  
                                    ?>
                                    <tr>
				                        <td><?php echo $fila[1] ?></td>
				                        <td><?php echo $fila[2] ?></td>
				                        <td><?php echo $fila[3] ?></td>
				                        <td><?php echo $fila[4] ?></td>
				                        <td><?php echo $fila[5] ?></td>
			                        </tr>
			                        <?php
		                            }
			                        ?>
		                        </tbody>
	                        </table>
                        

                       
                        	<hr>
	                        <table class="table table-striped table-condensed" id="iddatatable">
		                    <h3>Mostrar estacionamientos disponibles y están desocupado</h3>
		                        <thead>
			                        <tr style="background-color: #007979; color: white; font-weight: bold;">
			                            <td>Idem</td>
			                            <td>Estacionamiento</td>
			                            <td>Status</td>
			                            <td>Tipo</td>
			                            <td>Codigo postal</td>
			                        </tr>
		                        </thead>
		                        <tfoot style="background-color: #ccc; color: white; font-weight: bold;">
			                        <tr>
			                            <td>Idem</td>
			                            <td>Estacionamiento</td>
			                            <td>Status</td>
			                            <td>Tipo</td>
			                            <td>Codigo postal</td>
			                        </tr>
		                        </tfoot>
		                        <tbody>
                                    <?php
                                    $sql = "SELECT * FROM inmuebles WHERE estacionamiento='Si' AND status='Desocupado'"; 
                                        $result = mysqli_query($conex,$sql);
                                        while($fila = mysqli_fetch_array($result)){  
                                    ?>
                                    <tr>
				                        <td><?php echo $fila[1] ?></td>
				                        <td><?php echo $fila[2] ?></td>
				                        <td><?php echo $fila[3] ?></td>
				                        <td><?php echo $fila[4] ?></td>
				                        <td><?php echo $fila[5] ?></td>
			                        </tr>
			                        <?php
		                            }
			                        ?>
		                        </tbody>
	                        </table>
                        

                       
                        	<hr>
	                        <table class="table table-striped table-condensed" id="iddatatable">
		                    <h3>Mostrar las casas que no tienen estacionamientos y están desocupadas</h3>
		                        <thead>
			                        <tr style="background-color: #007979; color: white; font-weight: bold;">
				                        <td>Idem</td>
			                            <td>Estacionamiento</td>
			                            <td>Status</td>
			                            <td>Tipo</td>
			                            <td>Codigo postal</td>
			                        </tr>
		                        </thead>
		                        <tfoot style="background-color: #ccc; color: white; font-weight: bold;">
			                        <tr>
	                                    <td>Idem</td>
			                            <td>Estacionamiento</td>
			                            <td>Status</td>
			                            <td>Tipo</td>
			                            <td>Codigo postal</td>
			                        </tr>
		                        </tfoot>
		                        <tbody>
                                    <?php
                                    $sql = "SELECT * FROM inmuebles WHERE estacionamiento='No' AND status='Desocupado' AND tipo='Casa'";  
                                        $result = mysqli_query($conex,$sql);
                                        while($fila = mysqli_fetch_array($result)){ 
                                    ?>
                                    <tr>
				                        <td><?php echo $fila[1] ?></td>
				                        <td><?php echo $fila[2] ?></td>
				                        <td><?php echo $fila[3] ?></td>
				                        <td><?php echo $fila[4] ?></td>
				                        <td><?php echo $fila[5] ?></td>
			                        </tr>
			                        <?php
		                            }
			                        ?>
		                        </tbody>
	                        </table>
                        

                        
                        	<hr>
	                        <table class="table table-striped table-condensed" id="iddatatable">
		                        <h3>Mostrar estacionamientos si y no disponibles, y si están ocupados o desocupados</h3>
		                        <thead>
			                        <tr style="background-color: #007979; color: white; font-weight: bold;">
			                            <td>Con Estacionamiento</td>
			                            <td>Sin Estacionamiento</td>
			                            <td>Ocupados</td>
			                            <td>Desocupados</td>
			                        </tr>
		                        </thead>
		                        <tfoot style="background-color: #ccc; color: white; font-weight: bold;">
			                        <tr>
			                            <td>Con Estacionamiento</td>
			                            <td>Sin Estacionamiento</td>
			                            <td>Ocupados</td>
			                            <td>Desocupados</td>
			                        </tr>
		                        </tfoot>
		                        <tbody>
                                    <?php
                                    $sql = "SELECT estacionamiento, COUNT(estacionamiento) FROM inmuebles WHERE estacionamiento='Si' GROUP BY estacionamiento";
                                   
                                        $result = mysqli_query($conex,$sql);
                                        /*if(!$result) {
                                            var_dump(mysqli_error($conex));
                                            exit;
                                        }*/
                                        while($fila = mysqli_fetch_array($result)) {
                                    ?>
                                    <tr>
				                        <td><?php echo $fila[1] ?></td>
			                        <?php
		                            } 
			                        ?>
			                        <?php 
			                         $sql1 = "SELECT estacionamiento, COUNT(estacionamiento) FROM inmuebles WHERE estacionamiento='No' GROUP BY estacionamiento"; 
			                        $result = mysqli_query($conex,$sql1);
			                        while($fila = mysqli_fetch_array($result)) {
			                        ?>
				                        <td><?php echo $fila[1] ?></td>
			                        
			                        <?php
		                            } 
			                        ?>
			                        <?php 
			                         $sql1 = "SELECT status, COUNT(status) FROM inmuebles WHERE status='Ocupado' GROUP BY status"; 
			                        $result = mysqli_query($conex,$sql1);
			                        while($fila = mysqli_fetch_array($result)) {
			                        ?>
				                        <td><?php echo $fila[1] ?></td>
			                        
			                        <?php
		                            } 
			                        ?>
			                        <?php 
			                         $sql1 = "SELECT status, COUNT(status) FROM inmuebles WHERE status='Desocupado' GROUP BY status"; 
			                        $result = mysqli_query($conex,$sql1);
			                        while($fila = mysqli_fetch_array($result)) {
			                        ?>
				                        <td><?php echo $fila[1] ?></td>
			                        </tr>
			                        <?php
		                            } 
			                        ?>
		                        </tbody>
	                        </table>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
	$('#iddatatable').DataTable({
		dom: 'Bfrtip',
	buttons: [
		'copyHtml5',
		'excelHtml5',
		'csvHtml5',
		'pdfHtml5'
	], language:{
		"sProcessing":"Procesando...",
		"sLengthMenu":"Mostrar _MENU_ registros",
		"sZeroRecords":"No se encontraron resultados",
		"sEmptyTable":"Ningún dato disponible en esta tabla",
		"sInfo":"Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
		"sInfoEmpty":"Mostrando registros del 0 al 0 de un total de 0 registros",
		"sInfoFiltered":"(filtrando de un total de _MAX_ registros)",
		"sInfoPostFix":"",
		"sSearch":"Buscar",
		"sUrl":"",
		"sInfoThousands":",",
		"sLoadingRecords":"Cargando...",
		"oPaginate": {
			"sFirst":"Primero",
			"sLast":"Último",
			"sNext":"Siguiente",
			"sPrevious":"Anterior"
		},
	}
	});
	});
</script>
<!--script type="text/javascript">
	$(document).ready(function(){
		$('#tablaDatatable').load('tabla.php');
	});
</script-->