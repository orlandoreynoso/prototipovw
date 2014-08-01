<?php

include('../libs/conexion-clase.php');


$vars = $_POST;


if ($vars['ingreso'] == 'aplicar_orden') {


$v04 = $vars['id_orden'];


$sql03 = "SELECT COD_EMPRESA,COD_PROYECTO,COD_BODEGA,COD_ORDEN FROM ORDEN_COMPRA WHERE COD_ORDEN = $v04";


$consulta03 = oci_parse($conn, $sql03);
         oci_execute($consulta03);    

$max03 = oci_fetch_row($consulta03);

$v01 = $max03[0];
$v02 = $max03[1];
$v03 = $max03[2];

$sql  = "begin prc_aplica_orden(:p_cod_empresa,:p_cod_proyecto,:p_cod_bodega,:p_cod_orden); end;";

$stid = oci_parse($conn,$sql);

oci_bind_by_name($stid, ':p_cod_empresa', $v01);
oci_bind_by_name($stid, ':p_cod_proyecto', $v02);
oci_bind_by_name($stid, ':p_cod_bodega', $v03);
oci_bind_by_name($stid, ':p_cod_orden', $v04);

oci_execute($stid);

oci_free_statement($stid);
oci_close($conn);

echo '<p> Listo </p>';



}

else{    echo '<p class="error">Ocurrio un error al intentar recuperar los datos.</p>';  }


?>
	
<div style="clear:both;"></div>

