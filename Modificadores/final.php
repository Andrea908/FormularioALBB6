<?php
class Animales {
	public $especie;
	public $nombre;
	public $cantOjos;
	public $cantPatas;
	
	function __construct($especie,$nombre,$cantOjos,$cantPatas){
		$this->especie=$especie;
		$this->nombre=$nombre;
		$this->cantOjos=$cantOjos;
		$this->cantPatas=$cantPatas;
	}
	final public function Datos(){
		return '
		<br><b>Datos</b><br>
		Especie: '.$this->especie.'<br>
		Nombre: '.$this->nombre.'<br>
		Cantidad de ojos: '.$this->cantOjos.'<br>
		cantidad de patas: '.$this->cantPatas.'<br>';
	}
}
class Lobo extends Animales {
	public $localidad = 'Siberia';
	
	function __construct($especie,$nombre,$cantOjos,$cantPatas){
		parent::__construct($especie,$nombre,$cantOjos,$cantPatas);
	}
	public function Localidad(){
		return $this->localidad;
	}
}
$ani = new Lobo('Siberiano','Lobo',2,4);
echo $ani->Datos();
echo "Localidad: ".$ani->localidad()."";
?>