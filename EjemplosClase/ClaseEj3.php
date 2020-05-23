<?php

class Lunas {

    public $Tierra = 0;
    public $Marte = 0;
    public $Jupiter = 0;
    
    function __construct($numLunas1, $numLunas2, $numLunas3){
        $this->Tierra=$numLunas1;
        $this->Marte=$numLunas2;
        $this->Jupiter=$numLunas3;
    }
    public function Tierra (){
        return $this->Tierra;
    }
    public function Marte (){
        return $this->Marte;
    }
    public function Jupiter (){
        return $this->Jupiter;
    }
}//fin clase lunas

$objLunas = new Lunas (1,2,53);
echo 'En la Tierra hay: '.$objLunas->Tierra(); echo ' lunas';
echo '<br>';
echo 'En Marte hay: ' .$objLunas->Marte(); echo ' lunas';
echo '<br>';
echo 'En Jupiter hay: ' .$objLunas->Jupiter(); echo ' lunas';
?>