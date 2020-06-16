<?php
class Animales {
  //puedo ingesar a la varible habitat desde su clase padre, pero no por su hija
  protected $habitat;
  	
  	function __construct($habitat){
  		$this->habitat=$habitat;
  	}
  	protected function especie(){
  		return 'Aves';
  	}
    public function setHabitat($habitat){
      $this->habitat=$habitat;
    }
    public function getHabitat(){
      return $this->habitat;
    }
} 
class Aves extends Animales {
	public $nombre='Pingüino';
 	
 	public function espcieNombre($nombre){
 		return $this->nombre;
 	}
}
$esp = new Aves('Pingüino');
echo "<b>Nombre</b>: ".$esp->nombre."";
$esp->setHabitat('Ártico');
echo ", <b>Habitat</b>: ".$esp->getHabitat()."";
/*, Habitat: ".$pingüino->habitat."";   Cannot access protected property
Pingüino::$habitat*/
?>