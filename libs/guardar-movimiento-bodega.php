<?php

include('../libs/conexion-clase.php');


$vars = $_POST;


if ($vars['ingreso'] == 'nuevo_mbodega') {

$v03 = $vars['id_bodega'];
$v04 = $vars['id_mbodega'];
$v05 = $vars['dia_in'];
$v06 = $vars['mes_in'];
$v07 = $vars['anio_in'];

$v08 = $v05."-".$v06."-".$v07;

$v09 = $vars['tipo_movimiento'];
$v10 = $vars['estado'];
$v11 = $vars['tipo_operacion'];
$v12 = $vars['usuario'];

$sql03 = "SELECT COD_EMPRESA,COD_PROYECTO,COD_BODEGA,DESC_BODEGA FROM BODEGA WHERE ESTADO_BODEGA = 'A' AND COD_BODEGA= $v03";
$consulta03 = oci_parse($conn, $sql03);
         oci_execute($consulta03);    

$max03 = oci_fetch_row($consulta03);
$v01 = $max03[0];
$v02 = $max03[1];

$sql01 = "INSERT INTO MOVIMIENTO_BODEGA (COD_EMPRESA,COD_PROYECTO,COD_BODEGA,COD_MOVIMIENTO,FEC_MOVIMIENTO,
	TIPO_MOVIMIENTO,ESTADO_MOVIMIENTO,TIPO_OPERACION,USUARIO) 
VALUES ($v01,$v02,$v03,$v04,'$v08','$v09','$v10','$v11','$v12')";

      $stid = oci_parse($conn,$sql01);

      oci_execute($stid, OCI_DEFAULT);
   
      $committed = oci_commit($conn);
  


}

else{    echo '<p class="error">Ocurrio un error al intentar recuperar los datos.</p>';  }


?>
	
<div style="clear:both;"></div>

