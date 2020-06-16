<?php
class Animales {
	private $nombre = 'Mantis';
	
	function __construct($nombre){
		$this->nombre=$nombre;
	}
	public function setNombre($nombre){
		$this->nombre=$nombre;
	}
	public function getNombre(){
		return $this->nombre;
	}
}
class Insecto extends Animales {
	private $nombre;

	public function setInsecto($nombre){
		$this->insecto=$insecto;
	}
	public function getInsecto(){
		return $this->insecto=$insecto;
	}
}
$ani = new Insecto(0);
$ani->setNombre('Mantis');
echo $ani->getNombre();
?>