<?php

include('../libs/conexion-clase.php');


$vars = $_POST;


if ($vars['ingreso'] == 'agregar_producto_bodega') {

/*
  "id_mb" : id_mb,   
  "id_producto" : id_producto, 
  "cantidad" : cantidad,
  "precio_u" : precio_u,   
  "ingreso" : ingreso
*/

$v04 = $vars['id_mb'];
$v05 = $vars['id_producto'];
$v06 = $vars['cantidad'];


$sql03 = "SELECT COD_EMPRESA,COD_PROYECTO,COD_BODEGA,COD_MOVIMIENTO FROM MOVIMIENTO_BODEGA WHERE COD_MOVIMIENTO = $v04";
$consulta03 = oci_parse($conn, $sql03);
         oci_execute($consulta03);

$max03 = oci_fetch_row($consulta03);
$v01 = $max03[0];
$v02 = $max03[1];
$v03 = $max03[2];

$sql  = "begin prc_agrega_producto_bodega(:p_cod_empresa,:p_cod_proyecto,:p_cod_mov_bod,:p_cod_producto,:p_cantidad,:p_cod_bodega,:p_cod_msg,:p_des_msg); end;";

$stid = oci_parse($conn,$sql);

oci_bind_by_name($stid, ':p_cod_empresa', $v01);
oci_bind_by_name($stid, ':p_cod_proyecto', $v02);
oci_bind_by_name($stid, ':p_cod_mov_bod', $v04);
oci_bind_by_name($stid, ':p_cod_producto', $v05);
oci_bind_by_name($stid, ':p_cantidad', $v06);
oci_bind_by_name($stid, ':p_cod_bodega', $v03);
oci_bind_by_name($stid, ':p_cod_msg', $v07);
oci_bind_by_name($stid, ':p_des_msg', $v08,40);

oci_execute($stid);
echo '<p>--</p>';
echo $v07;
echo '<p>--</p>';
echo $v08;

oci_free_statement($stid);
oci_close($conn);


}

else{    echo '<p class="error">Ocurrio un error al intentar recuperar los datos.</p>';  }


?>
	
<div style="clear:both;"></div>

