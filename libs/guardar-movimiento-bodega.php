<?php

include('../libs/conexion-clase.php');


$vars = $_POST;


if ($vars['ingreso'] == 'nuevo_mbodega') {

$v03 = $vars['id_bodega'];
$v04 = $vars['tipo_movimiento'];
$v05 = $vars['tipo_operacion'];

$sql03 = "SELECT COD_EMPRESA,COD_PROYECTO,COD_BODEGA,DESC_BODEGA FROM BODEGA WHERE ESTADO_BODEGA = 'A' AND COD_BODEGA= $v03";
$consulta03 = oci_parse($conn, $sql03);
         oci_execute($consulta03);

$max03 = oci_fetch_row($consulta03);
$v01 = $max03[0];
$v02 = $max03[1];

$sql  = "begin prc_crea_mov_bodega(:p_cod_empresa,:p_cod_proyecto,:p_cod_bodega,:p_tipo_mov,:p_tipo_op,:v_correlativo,:p_cod_msg,:p_des_msg	); end;";

$stid = oci_parse($conn,$sql);

oci_bind_by_name($stid, ':p_cod_empresa', $v01);
oci_bind_by_name($stid, ':p_cod_proyecto', $v02);
oci_bind_by_name($stid, ':p_cod_bodega', $v03);
oci_bind_by_name($stid, ':p_tipo_mov', $v04);
oci_bind_by_name($stid, ':p_tipo_op', $v05);
oci_bind_by_name($stid, ':v_correlativo', $v06);
oci_bind_by_name($stid, ':p_cod_msg', $v07);
oci_bind_by_name($stid, ':p_des_msg', $v08,40);

oci_execute($stid);
echo '<p>--</p>';
echo $v06;
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

