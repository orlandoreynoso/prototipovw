<?php

include('../libs/conexion-clase.php');

$vars = $_POST;

echo 'Recibiendo datos de puesto.';


if ($vars['ingreso'] == 'nuevo_puesto') {

  echo '<p>Ingreso a guardar</p>';


$stid = oci_parse($conn,"INSERT INTO PUESTO (COD_PUESTO, DES_PUESTO,ESTADO) 
  VALUES(:v01_bv, :v02_bv,:v03_bv)");

$v01 = $vars['cod_puesto'];
$v02 = $vars['descripcion'];
$v03 = $vars['estado'];

oci_bind_by_name($stid, ":v01_bv", $v01);
oci_bind_by_name($stid, ":v02_bv", $v02);
oci_bind_by_name($stid, ":v03_bv", $v03);


    oci_execute($stid, OCI_DEFAULT);

    
    // Inicia transaccion
    $committed = oci_commit($conn);

    if (!$committed) {
        $error = oci_error($conn);
        echo 'Commit failed. Oracle reports: ' . $error['message'];
    }
    else{
      echo '<p class="exito">Puesto agregado satisfactoriamente.</p>';
    }

}

else{
   echo '<p  class="error">Ocurrio un error al intentar recuperar los datos.</p>';
}

	
?>
	
<div style="clear:both;"></div>

