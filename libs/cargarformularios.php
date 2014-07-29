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


	case 3:
	include('../reporte-productos.php');
	break;

	case 4:
	include('../libs/reporte-personas.php');
	break;

	case 100:
	include('../libs/ingreso-persona.php');
	break;

	case 101:
	include('../libs/ingreso-puesto.php');
	break;

	case 102:
	include('../libs/ingreso-tipo.php');
	break;	

	default :
	echo ' <h3>Seleccione una opcion GUARDAR</h3>';
	break;

}


?>
