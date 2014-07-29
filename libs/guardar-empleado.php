<?php

include('../libs/conexion-clase.php');

$vars = $_POST;

echo 'Recibiendo datos de tipo.';


if ($vars['ingreso'] == 'nuevo_empleado') {

  echo '<p>Ingreso a guardar</p>';

echo $consulta  = "INSERT INTO EMPLEADO (COD_PERSONA,USUARIO,CLAVE,ESTADO,COD_PUESTO,SALARIO_BASE,BONIFICACION,COD_ID_DEFAULT) VALUES(:v01_bv, :v02_bv,:v03_bv, :v04_bv, :v05_bv, :v06_bv, :v07_bv, :v08_bv)";

$stid = oci_parse($conn,$consulta);

echo $v01 = $vars['id_persona'];
echo $v02 = $vars['usuario'];
$v03 = $vars['clave'];
$v04 = $vars['estado'];
echo '<p>----</p>';
echo $v05 = $vars['id_puesto'];
echo '<p>...</p>';
$v06 = $vars['salario_base'];
$v07 = $vars['bonificacion'];
$v08 = $vars['id_puesto'];


oci_bind_by_name($stid, ":v01_bv", $v01);
oci_bind_by_name($stid, ":v02_bv", $v02);
oci_bind_by_name($stid, ":v03_bv", $v03);
oci_bind_by_name($stid, ":v04_bv", $v04);
oci_bind_by_name($stid, ":v05_bv", $v05);
oci_bind_by_name($stid, ":v06_bv", $v06);
oci_bind_by_name($stid, ":v07_bv", $v07);
oci_bind_by_name($stid, ":v08_bv", $v08);

    oci_execute($stid, OCI_DEFAULT);

    
    // Inicia transaccion
    $committed = oci_commit($conn);

    if (!$committed) {
        $error = oci_error($conn);
        echo 'Commit failed. Oracle reports: ' . $error['message'];
    }
    else{
      echo '<p class="exito">Empleado agregado satisfactoriamente.</p>';
    }

}

else{
   echo '<p class="error">Ocurrio un error al intentar recuperar los datos.</p>';
}

	
?>
	
<div style="clear:both;"></div>

