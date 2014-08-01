<?php

$vars = $_POST;
$codigo_x =  $vars['valor_neto1'];

//include('conexion-clase.php');
//echo $codigo_x;

switch($codigo_x){

/*===== REPORTES ====================*/
	case 1:
	include('../libs/reporte-empresa.php');
	break;

	case 2:
	include('../libs/reporte-proyecto.php');
	break;

	case 3:
	include('../libs/reporte-inventario-productos.php');
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

	case 104:
	include('../libs/reporte-puestos.php');
	break;

	case 105:
	include('../libs/reporte-identificacion.php');
	break;

	case 106:
	include('../libs/ingreso-empresa.php');
	break;	

	case 107:
	include('../libs/ingreso-proyecto.php');
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

	case 303:
	include('../libs/reporte-productos.php');
	break;

	case 304:
	include('../libs/reporte-tipo-productos.php');
	break;	
	/*=========== COMPRAS =======================*/

	case 401:
	include('../libs/ingreso-orden-compra.php');
	break;


	case 402:
	include('../libs/ingreso-aplica-orden.php');
	break;

	case 403:
	include('../libs/ingreso-revertir-orden.php');
	break;

	case 404:
	include('../libs/reporte-ordenes.php');
	break;



	/* =============================================*/

	case 203:
	include('../libs/ingreso-movimiento-bodega.php');
	break;	

/*========================================================*/
	case 801:
	include('../libs/ingreso-producto-bodega.php');
	break;	

	case 802:
	include('../libs/ingreso-producto-bodega-quitar.php');
	break;	

	case 803:
	include('../libs/reporte-movimientos.php');
	break;	

/*========================================================*/
	default :
	echo ' <h3>Seleccione una opcion GUARDAR</h3>';
	break;

}


?>
