<?php

include('../libs/conexion-clase.php');

$vars = $_POST;

if ($vars['ingreso'] == 'nuevo_empleado') {

$v01 = $vars['id_persona'];
$v02 = $vars['usuario'];
$v03 = $vars['clave'];
$v04 = $vars['estado'];
$v05 = $vars['id_puesto'];
$v06 = $vars['salario_base'];
$v07 = $vars['bonificacion'];
$v08 = $vars['cod_id'];



$sql01 = "SELECT PERSONA.COD_PERSONA,PERSONA.NOMBRES,EMPLEADO.COD_PERSONA 
FROM PERSONA,EMPLEADO 
WHERE PERSONA.COD_PERSONA = EMPLEADO.COD_PERSONA 
AND  EMPLEADO.COD_PERSONA = ".$v01."";

$consulta01 = oci_parse($conn, $sql01);
         oci_execute($consulta01);    


$max01 = oci_fetch_row($consulta01);
$max01[0];


if($max01[0] == $v01){

  echo '<p class="error">Erro al intentar crear al Empleado, ya está asignado a '.$max01[1].'</p>';
}

else{

    $consulta  = "INSERT INTO EMPLEADO (COD_PERSONA,USUARIO,CLAVE,ESTADO,COD_PUESTO,SALARIO_BASE,BONIFICACION,COD_ID_DEFAULT)  
    VALUES($v01,'".$v02."','".$v03."','".$v04."',$v05,$v06,$v07,$v08)";

      $stid = oci_parse($conn,$consulta);

      oci_execute($stid, OCI_DEFAULT);
   
      // Inicia transaccion
      $committed = oci_commit($conn);
  
}

}

else{    echo '<p class="error">Ocurrio un error al intentar recuperar los datos.</p>';  }

	
?>
	
<div style="clear:both;"></div>

