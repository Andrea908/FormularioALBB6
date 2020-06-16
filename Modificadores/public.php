<?php
class Animales {
	public $nombre;
	public $especie;
	public $cantOjos;
	public $cantPatas;
	
	function __construct($nombre,$especie,$cantOjos,$cantPatas){
		$this->nombre=$nombre;
		$this->especie=$especie;
		$this->cantOjos=$cantOjos;
		$this->cantPatas=$cantPatas;
	}
	public function Informacion(){
		return 
		'<ul>
		<li>Nombre: <b>'.$this->nombre.'</li>
		<li>Especie: <b>'.$this->especie.'</li>
		<li>CantOjos: <b>'.$this->cantOjos.'</li>
		<li>CantPatas: <b>'.$this->cantPatas.'</li>
		</ul>';
	}
}
class Asia extends Animales {
	public $numero=200;
	public $localizacion='China';
	
	function __construct($nombre,$especie,$cantOjos,$cantPatas){
		parent::__construct($nombre,$especie,$cantOjos,$cantPatas);
	}
	public function datosExtra(){
		return 
		'<ul>
		<li>Número de especies: <b>'.$this->numero.'</li>
		<li>Localización: <b>'.$this->localizacion.'</li>
		</ul>';
	}
}
class Europa extends Asia {
	public $numero=500;
	public $localizacion='Irlanda';
	
	function __construct($nombre,$especie,$cantOjos,$cantPatas){
		parent::__construct($nombre,$especie,$cantOjos,$cantPatas);
	}
}
class Suramerica extends Europa {
	public $numero=80;
	public $localizacion='Mérida';
	
	function __construct($nombre,$especie,$cantOjos,$cantPatas){
		parent::__construct($nombre,$especie,$cantOjos,$cantPatas);
	}
}
echo "Información de <b>animales<b><br >";

echo "<b>Asia: </b>";
$ani = new Asia('Oso Panda Rojo','Mamífero',2,4);
echo $ani->Informacion();
echo "<b>Datos extra: </b>";
echo $ani->datosExtra();

echo "<b>Europa: </b>";
$ani = new Europa('Zorro','Mamífero',2,4);
echo $ani->Informacion();
echo "<b>Datos extra: </b>";
echo $ani->datosExtra();

echo "<b>Suramerica: </b>";
$ani = new Suramerica('Oso Frontino','Mamífero',2,4);
echo $ani->Informacion();
echo "<b>Datos extra: </b>";
echo $ani->datosExtra();
?>
