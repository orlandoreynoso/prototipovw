<?php

include('../libs/conexion-clase.php');

$vars = $_POST;

echo 'Recibiendo datos de tipo.';


if ($vars['ingreso'] == 'nuevo_tipo') {

  echo '<p>Ingreso a guardar</p>';

$consulta  = "INSERT INTO TIPO_ID (COD_ID,DES_ID,FEC_INGRESO,ESTADO_ID) VALUES(:v01_bv, :v02_bv,:v06_bv, :v07_bv)";

$stid = oci_parse($conn,$consulta);

$v01 = $vars['cod_tipo'];
$v02 = $vars['des_id'];

$v03 = $vars['dia_in'];
$v04 = $vars['mes_in'];
$v05 = $vars['anio_in'];

$v06 = $v03."-".$v04."-".$v05;
$v07 = $vars['estado'];


oci_bind_by_name($stid, ":v01_bv", $v01);
oci_bind_by_name($stid, ":v02_bv", $v02);
oci_bind_by_name($stid, ":v06_bv", $v06);
oci_bind_by_name($stid, ":v07_bv", $v07);

    oci_execute($stid, OCI_DEFAULT);

    
    // Inicia transaccion
    $committed = oci_commit($conn);

    if (!$committed) {
        $error = oci_error($conn);
        echo 'Commit failed. Oracle reports: ' . $error['message'];
    }
    else{
      echo '<p class="exito">Tipo agregado satisfactoriamente.</p>';
    }

}

else{
   echo '<p class="error">Ocurrio un error al intentar recuperar los datos.</p>';
}

	
?>
	
<div style="clear:both;"></div>

