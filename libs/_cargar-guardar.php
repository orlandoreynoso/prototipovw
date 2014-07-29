<?php

$vars = $_POST;
echo $codigo_x =  $vars['valor_guardar'];

//include('conexion-clase.php');
//echo $codigo_x;

switch($codigo_x){

	case 1:
	include('../libs/guardar-persona.php');
	break;


	default :
	echo ' <h3>Seleccione una opcion GUARDAR</h3>';
	break;

}


?>
