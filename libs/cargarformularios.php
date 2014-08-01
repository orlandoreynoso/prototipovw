<?php

$vars = $_POST;
$codigo_x =  $vars['valor_neto1'];

//include('conexion-clase.php');
//echo $codigo_x;

switch($codigo_x){

/*===== REPORTES ====================*/
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

	case 5:
	include('../libs/reporte-empleados.php');
	break;

	case 6:
	include('../libs/reporte-bodegas.php');
	break;

	case 7:
	include('../libs/reporte-movimiento-bodega.php');
	break;

	case 8:
	include('../libs/reporte-ventas.php');
	break;

	case 9:
	include('../libs/reporte-clientes.php');
	break;	

	case 10:
	include('../libs/reporte-ordenes.php');
	break;	

/*===== INGRESO DE DATOS ====================*/

	case 100:
	include('../libs/ingreso-persona.php');
	break;

	case 101:
	include('../libs/ingreso-puesto.php');
	break;

	case 102:
	include('../libs/ingreso-tipo.php');
	break;	

	case 103:
	include('../libs/ingreso-empleado.php');
	break;

	/*==== Bodegas ===============*/
	case 201:
	include('../libs/ingreso-bodega.php');
	break;

	/*=========== PRODUCTO =====================*/

	case 301:
	include('../libs/ingreso-tipo-producto.php');
	break;

	case 302:
	include('../libs/ingreso-producto.php');
	break;

	/*=========== COMPRAS =======================*/

	case 401:
	include('../libs/ingreso-orden-compra.php');
	break;

	/* =============================================*/

	case 203:
	include('../libs/ingreso-movimiento-bodega.php');
	break;	

	default :
	echo ' <h3>Seleccione una opcion GUARDAR</h3>';
	break;

}


?>
