<?php
    class clasedb{
    	private $db;
    	public function conectar(){
                           //o mysql_connect o pconnet
    		$this->db= new mysql_connect("localhost8080", "root", "", "programacion") or die ("No se pudo conectar con Mysql");

    		return $this->db;

    	}
    }
?>