<?php

$vars = $_POST;
$codigo_x =  $vars['valor_neto1'];

//include('conexion-clase.php');
//echo $codigo_x;

switch($codigo_x){

	case 1:
	include('../reporte-empresa.php');
	break;


	case 2:
	include('../reporte-proyecto.php');
	break;


	case 100:
	include('../ingreso-persona.php');
	break;


	default :
	echo ' <h3>Seleccione una opcion GUARDAR</h3>';
	break;

}


?>