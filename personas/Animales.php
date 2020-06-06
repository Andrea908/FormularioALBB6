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
	public function NumeroEuropa($peligroExtincion){
 		return $this->peligroExtincion;
 	}
}
class Europa extends Animales {
	public $peligroExtincion;
	
	function __construct($peligroExtincion){
		$this->peligroExtincion = $peligroExtincion;
 	}
}
?>