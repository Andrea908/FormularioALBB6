<?php
include("../clasedb.php");
extract($_REQUEST);

class AnimalesControlador
{
	public function index() {
		$db=new clasedb();
		$conex=$db->conectar();

		$sql="SELECT * FROM registro_de_animales";

		$res=mysqli_query($conex,$sql);
		$campos=mysqli_num_fields($res);
		$filas=mysqli_num_rows($res);
		$i=0;
		$datos[]=array();

		while($data=mysqli_fetch_array($res)) {
			for ($j=0; $j < $campos; $j++) {
				$datos[$i][$j]=$data[$j];
			}
			$i++;
		}
		mysqli_close($conex);
		    header("Location: index.php?filas=".$filas."&campos=".$campos."&data=".serialize($datos));
    }//cierre index
	public function modificar(){
	    extract($_REQUEST);
	    $db=new clasedb();
	    $conex=$db->conectar();

	    $sql="SELECT * FROM registro_de_animales WHERE id=".$id_animal."";
	    $res=mysqli_query($conex,$sql);
	    $data=mysqli_fetch_array($res);

		header("Location: editar.php?data=".serialize($data));
	} // cierre de modificar
	
	public function actualizar(){
	    extract($_REQUEST);
	    $db=new clasedb();
	    $conex=$db->conectar();

        $sql="UPDATE registro_de_animales SET especie='".$especie."',nombre='".$nombre."',cant_ojos='".$cant_ojos."',cant_patas='".$cant_patas."' WHERE id=".$id_animal;
		$res=mysqli_query($conex,$sql);
		    if ($res) {
                ?>
		        <script type="text/javascript">
			        alert("REGISTRO MODIFICADO");
			        window.location="AnimalesControlador.php?operacion=index";
		        </script>
		        <?php
	        }else{
		        ?>
		        <script type="text/javascript">
			        alert("ERROR AL MODIFICAR REGISTRO");
			        window.location="AnimalesControlador.php?operacion=index";
		        </script>
		        <?php
	        }   
	    $this->index();
    } // cierre funcion actualizar 

    public function eliminar() {
	extract($_REQUEST);
	$db=new clasedb();
	$conex=$db->conectar();

	$sql="DELETE FROM registro_de_animales WHERE id=".$id_animal;

	$res=mysqli_query($conex,$sql);
		    if ($res) {
            ?>
		        <script>
			        alert("REGISTRO ELIMINADO");
			        window.location="AnimalesControlador.php?operacion=index";
		        </script>
		    <?php
	    } else {
		    ?>
		    <script type="text/javascript">
			    alert("REGISTRO NO ELIMINADO");
			    window.location="AnimalesControlador.php?operacion=index";
		    </script>
		    <?php
	    }
    }//fin fucnion eliminar



    static function controlador($operacion) {
		$animal=new AnimalesControlador();
	switch ($operacion) {
		case 'index':
		    $animal->index();
			break;
		case 'registrar':
		    $animal->registrar();
			break;
		case 'guardar':
		    $animal->guardar();
			break;
		case 'modificar':
		    $animal->modificar();
			break;
		case 'actualizar':
		    $animal->actualizar();
			break;
		case 'eliminar':
		    $animal->eliminar();
			break;
		default:
			?>
			<!--script type="text/javascript">
				alert("No existe la ruta");
				window.location="AnimalesControlador.php?operacion=index_2";
			</script-->
			<?php
		    break;
	    }//cierre switch
    }//cierre funcion controlador
} // cierre clase
AnimalesControlador::controlador($operacion);
?>
