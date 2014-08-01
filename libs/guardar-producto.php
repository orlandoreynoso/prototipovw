<?php

include('../libs/conexion-clase.php');

$vars = $_POST;



if (isset($vars['ingreso'])) {


      if(empty($vars['ingreso'])){

      echo '<p>La variable esta vacia</p>';

      }
      else
      {


if ($vars['ingreso'] == 'nuevo_producto') {

$v01 = $vars['id_producto'];
$v02 = $vars['descripcion'];
$v03 = $vars['id_marca'];
$v04 = $vars['tipo_producto'];
$v05 = $vars['es_servicio'];
$v06 = $vars['precio'];
/*

CREATE OR REPLACE PROCEDURE prc_crea_producto (
   p_id                  IN       VARCHAR2,
   p_des_producto        IN       VARCHAR2,
   p_cod_marca           IN       NUMBER,
   p_cod_tipo_producto   IN       NUMBER,
   p_es_servicio         IN       VARCHAR2,
   p_precio              IN       NUMBER,
   v_correlativo         OUT      NUMBER,
   p_cod_msg             OUT      VARCHAR2,
   p_des_msg             OUT      VARCHAR2
)
 */




$sql  = "begin prc_crea_producto(:p_id,:p_des_producto,:p_cod_marca,:p_cod_tipo_producto,:p_es_servicio,:p_precio,:v_correlativo,:p_cod_msg,:p_des_msg); end;";

$stid = oci_parse($conn,$sql);

oci_bind_by_name($stid, ':p_id', $v01);
oci_bind_by_name($stid, ':p_des_producto', $v02);
oci_bind_by_name($stid, ':p_cod_marca', $v03);
oci_bind_by_name($stid, ':p_cod_tipo_producto', $v04);
oci_bind_by_name($stid, ':p_es_servicio', $v05);
oci_bind_by_name($stid, ':p_precio', $v06);
oci_bind_by_name($stid, ':v_correlativo', $v07);
oci_bind_by_name($stid, ':p_cod_msg', $v08);
oci_bind_by_name($stid, ':p_des_msg', $v09, 40);


oci_execute($stid);
echo '<p>--</p>';
echo $v07;
echo '<p>--</p>';
echo $v08;
echo '<p>--</p>';
echo $v09;

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

