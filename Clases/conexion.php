

<?php
 class Conexion extends mysqli{
public $cad=array('localhost','practica','esneyder','1234');

	public function __construct(){
      parent::__construct($this->cad[0],$this->cad[1],$this->cad[2],$this->cad[3]);
	  if (mysqli_connect_error()){
	  	die('No se a logrado la conexión con el servidor');
	  }
	}
 }


?>