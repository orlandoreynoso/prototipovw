<?php

include('../libs/conexion-clase.php');

$vars = $_POST;

if ($vars['ingreso'] == 'nueva_bodega') {

$v01 = $vars['id_bodega'];
$v02 = $vars['id_empresa'];
$v03 = $vars['id_proyecto'];
$v04 = $vars['nom_bodega'];
$v05 = $vars['direccion'];

$v06 = $vars['dia_in'];
$v07 = $vars['mes_in'];
$v08 = $vars['anio_in'];

$v09 = $v06."-".$v07."-".$v08;
$v10 = $vars['estado'];



 $sql01 = "INSERT INTO BODEGA (COD_EMPRESA, COD_PROYECTO,COD_BODEGA,DESC_BODEGA,UBICACION,FEC_CREACION,ESTADO_BODEGA) 
VALUES ($v02,$v03,$v01,'$v04','$v05', '$v09','$v10')";


    /*$consulta  = "INSERT INTO EMPLEADO (COD_PERSONA,USUARIO,CLAVE,ESTADO,COD_PUESTO,SALARIO_BASE,BONIFICACION,COD_ID_DEFAULT)  
    VALUES($v01,'".$v02."','".$v03."','".$v04."',$v05,$v06,$v07,$v08)"; */

      $stid = oci_parse($conn,$sql01);

      oci_execute($stid, OCI_DEFAULT);
   
      // Inicia transaccion
      $committed = oci_commit($conn);
  


}

else{    echo '<p class="error">Ocurrio un error al intentar recuperar los datos.</p>';  }

	
?>
	
<div style="clear:both;"></div>

