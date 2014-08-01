<?php

include('../libs/conexion-clase.php');

$vars = $_POST;

echo '-- 1 ---';

if (isset($vars['ingreso'])) {


      if(empty($vars['ingreso'])){

      echo '<p>La variable esta vacia</p>';

      }
      else
      {


echo '-- 2 ---';

if ($vars['ingreso'] == 'nueva_farmacia') {

echo '-- 3 ---';


$v01 = $vars['id_farmacia'];
$v02 = $vars['nombre_farmacia'];
$v03 = $vars['direccion'];
$v04 = $vars['id_legal'];
$v05 = 'E';

$sql  = "begin prc_crea_empresa(:p_cod_empresa,:p_des_empresa,:p_direccion,:p_identificacion,:p_estado,:v_correlativo,:p_cod_msg,:p_des_msg); end;";

$stid = oci_parse($conn,$sql);

oci_bind_by_name($stid, ':p_cod_empresa', $v01);
oci_bind_by_name($stid, ':p_des_empresa', $v02);
oci_bind_by_name($stid, ':p_direccion', $v03);
oci_bind_by_name($stid, ':p_identificacion', $v04);
oci_bind_by_name($stid, ':p_estado', $v05);
oci_bind_by_name($stid, ':v_correlativo', $v06);
oci_bind_by_name($stid, ':p_cod_msg', $v07);
oci_bind_by_name($stid, ':p_des_msg', $v08, 40);


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

else{

    echo '<p class="error">Ocurrio un error al intentar recuperar los datos.</p>';
}

      }

}

else{

     echo '<p>No está definida la variable para agregar nuevo tipo de producto.</p>';
}


?>
<div style="clear:both;"></div>

