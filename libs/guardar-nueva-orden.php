<?php

include('../libs/conexion-clase.php');


$vars = $_POST;


if ($vars['ingreso'] == 'nueva_orden') {


$v03 = $vars['id_bodega'];
$v04 = $vars['id_orden'];
$v05 = $vars['ind_aplicada'];
$v06 = $vars['afecta_bodega'];
$v07 = $vars['estado'];
$v08 = $vars['usuario'];
$v09 = $vars['id_proveedor'];


$sql03 = "SELECT COD_EMPRESA,COD_PROYECTO,COD_BODEGA,DESC_BODEGA FROM BODEGA WHERE ESTADO_BODEGA = 'A' AND COD_BODEGA= $v03";
$consulta03 = oci_parse($conn, $sql03);
         oci_execute($consulta03);    

$max03 = oci_fetch_row($consulta03);
$v01 = $max03[0];
$v02 = $max03[1];

$sql01 = "INSERT INTO ORDEN_COMPRA (COD_EMPRESA,COD_PROYECTO,COD_BODEGA,COD_ORDEN,
	IND_APLICADA,AFECTA_BODEGA,ESTADO,USUARIO,COD_PROVEEDOR) 
VALUES ($v01,$v02,$v03,$v04,'$v05','$v06','$v07','$v08','$v09')";

      $stid = oci_parse($conn,$sql01);

      oci_execute($stid, OCI_DEFAULT);
   
      $committed = oci_commit($conn);
  


}

else{    echo '<p class="error">Ocurrio un error al intentar recuperar los datos.</p>';  }


?>
	
<div style="clear:both;"></div>

