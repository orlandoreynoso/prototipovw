<?php

$vars = $_POST;
$codigo_x =  $vars['valor_neto1'];

//include('conexion-clase.php');
//echo $codigo_x;

switch($codigo_x){

	case 5:
	include('../forms/pais/index.php');
	break;

    case 6:
    include('../forms/region/index.php');
    break;
	
    case 7:
    include('../forms/tipocat/index.php');
    break;	
	
    case 8:
    include('../forms/tipoap/index.php');
    break;		

	default :
	echo ' <h3>Seleccione una opcion GUARDAR</h3>';
	break;

}


?>
