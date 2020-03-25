<?php
    class clasedb{
    	private $db;
    	public function conectar(){
                           //o mysql_connect o pconnet
    		$con = mysql_connect("localhost:8080/127.0.0.1", "root", "", "programacion") or die ("No se pudo conectar con Mysql");

    		return $this->db;

    	}
    }
?>