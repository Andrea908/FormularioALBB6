<?php
abstract class Animales {
	public $ojos = 2;
	public $patas = 2;

	public function Especie(){
		return 'Nival';
	}
}
class Buho extends Animales {
	public $buho = 'Buho';
	
	public function ojos(){
		return $this->ojos;
	}
	public function patas(){
		return $this->patas;
	}
}
$buho = new Buho;
$buho->ojos();
$buho->patas();
$especie=$buho->Especie();

echo "<b>Animal</b>: ".$buho->buho.", <b>Especie</b>: ".$especie.", <b>Cantidad de ojos</b>: ".$buho->ojos.", <b>Cantidad de patas</b>: ".$buho->patas."";
