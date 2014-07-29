<?php

include('../libs/conexion-clase.php');

$vars = $_POST;

echo 'Recibiendo datos de persona.';


if ($vars['ingreso'] == 'nueva_persona') {

  echo '<p>Ingreso a guardar</p>';


$stid = oci_parse($conn,"INSERT INTO PERSONA (COD_PERSONA, NOMBRES,APELLIDOS,FEC_INGRESO,ESTADO,DIRECCION) 
  VALUES(:v01_bv, :v02_bv,:v03_bv, :v07_bv,:v08_bv, :v09_bv)");

$v01 = $vars['cod_persona'];
$v02 = $vars['nombres'];
$v03 = $vars['apellidos'];
$v04 = $vars['dia_in'];
$v05 = $vars['mes_in'];
$v06 = $vars['anio_in'];
$v07 = $v04."-".$v05."-".$v06;
$v08 = $vars['estado'];
$v09 = $vars['direccion'];

oci_bind_by_name($stid, ":v01_bv", $v01);
oci_bind_by_name($stid, ":v02_bv", $v02);
oci_bind_by_name($stid, ":v03_bv", $v03);
oci_bind_by_name($stid, ":v07_bv", $v07);
oci_bind_by_name($stid, ":v08_bv", $v08);
oci_bind_by_name($stid, ":v09_bv", $v09);


    oci_execute($stid, OCI_DEFAULT);

    
    // Inicia transaccion
    $committed = oci_commit($conn);

    if (!$committed) {
        $error = oci_error($conn);
        echo 'Commit failed. Oracle reports: ' . $error['message'];
    }
    else{
      echo '<p class="exito">Persona agregada satisfactoriamente.</p>';
    }

}

else{
   echo '<p class="error">Ocurrio un error al intentar recuperar los datos.</p>';
}

	
?>
	
<div style="clear:both;"></div>

