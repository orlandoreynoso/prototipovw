
<?php

		$conn = oci_pconnect('PROYFINAL','PROYFINAL', 'localhost/XE');

			if (!$conn) {
			   $m = oci_error();
			   echo $m['message'], "\n";
			   exit;
			}
			else {
			   echo "Conexión con éxito a Oracle!";
			  //  $this->con = $conect;
			} 


/*
class Conexion  
// se declara una clase para hacer la conexion con la base de datos
{
	var $con;

	function Conexion()
	{


		$conect = oci_pconnect('PROYFINAL','PROYFINAL', 'localhost/XE');

			if (!$conect) {
			   $m = oci_error();
			   echo $m['message'], "\n";
			   exit;
			}
			else {
			   echo "Conexión con éxito a Oracle!";
			    $this->con = $conect;
			} 

		
	}

	function getConexion() // devuelve la conexion
	{
		return $this->con;
	}
	
	function Close()  // cierra la conexion
	{
		oci_close($this->con);
	}	

}      */




?>