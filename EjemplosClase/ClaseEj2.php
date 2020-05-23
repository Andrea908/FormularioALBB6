<?php

class PlantasOrnamentales {
    //Un Método static tiene acceso solo a los atributos estáticos de la clase. La variable es única para todas las instancias (objetos)
	static public $begonias = 8;
	static private $petunias = 0;
	static protected $camelias = 0;
	
	function __construct($begonias,$petunias,$camelias){
		self::$begonias;
		self::$petunias;
		self::$camelias;
	}
	static public function Begonias (){
		return self::$begonias;//el self llama a las funciones estáticas
	}
	static private function Petunias (){
		return self::$petunias;
	}
	static protected function Camelias (){
		return self::$camelias;
	}
}//fin
$objPlantasOrnamentales = new PlantasOrnamentales (8,10,2);
//Jades es lo unico que se imprime, y no usa las variables definidas fuera de la clase. Es por esto que la propiedad "static" solo puede ejecutarse desde la clase, más no fuera de ella. Esto es a nivel de clase y no de instancia. 
echo 'Cantidad de begonias: ' .$objPlantasOrnamentales->Begonias();
echo '<br>';
//Fatal error: Uncaught Error: Call to private method Plantas::getElechos()
echo 'Cantidad de Petunias: ' .$objPlantasOrnamentales->Petunias();
echo '<br>';
//No se ve. Está protegida
echo 'Cantidad de camelias: ' .$objPlantasOrnamentales->Camelias();
?>