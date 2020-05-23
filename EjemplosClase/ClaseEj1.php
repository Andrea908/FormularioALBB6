<?php 
//se define el nombre que va a llevar la clase
class Operacion{
    // atributos
    public $numeroUno = 0; //será publico en todos lados
    private $numeroDos = 0;//no será facil de ingresar a la propiedad, porque le pertenece solo a la clase
    protected $resultado = 0;//va a estar protegida, por lo tanto no será visible

    //método constructor, siempre tiene que ser publico
    function __construct($intNUM1, $intNUM2){

        $this->numeroUno = $intNUM1;//se llama a la propiedad con this
        $this->numeroDos = $intNUM2;
    }
    //métodos y su visibilidad
    	public function getSuma() {
    		$this->resultado = $this->numeroUno + $this->numeroDos;
    		return $this->resultado;
    	}
    	private function getResta() {
    		$this->resultado = $this->numeroUno - $this->numeroDos;
    		return $this->resultado;
    	}
    	protected function getMultiplicacion() {
    		$this->resultado = $this->numeroUno * $this->numeroDos;
    		return $this->resultado;
    	}
}//fin clase Operacion
$operacion = new Operacion(30,8);
    //como está publica, solo la suma es visible en el servidor local
    $totalSuma = $operacion->getSuma();
    echo "Total suma: ".$totalSuma;
    echo "<br>";
    //Fatal error: Uncaught Error: Call to private method Operacion::getResta(). Esto por que está privado
    $totalResta = $operacion->getResta();
    echo "Total resta: ".$totalResta;
    echo "<br>";

    $totalMultiplicacion = $operacion->getMultiplicacion();
    echo "Total multiplicacion: ".$totalMultiplicacion;
    echo "<br>";
?>