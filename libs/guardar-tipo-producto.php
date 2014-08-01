<?php

include('../libs/conexion-clase.php');

$vars = $_POST;



if (isset($vars['ingreso'])) {


      if(empty($vars['ingreso'])){

      echo '<p>La variable esta vacia</p>';

      }
      else
      {


if ($vars['ingreso'] == 'nuevo_tipo_producto') {

// $v01 = $vars['id_tp'];
$v02 = $vars['descripcion'];

$sql  = "begin PRC_CREA_TIPO_PRODUCTO(:P_DESC,:P_CORR,:P_COD_MSG,:P_DES_MSG); end;";

$stid = oci_parse($conn,$sql);

oci_bind_by_name($stid, ':P_DESC', $v02);
oci_bind_by_name($stid, ':P_CORR', $v03);
oci_bind_by_name($stid, ':P_COD_MSG', $v04);
oci_bind_by_name($stid, ':P_DES_MSG', $v05, 40);

oci_execute($stid);

echo '<p>--</p>';
echo $v03;
echo '<p>--</p>';
echo $v04;
echo '<p>--</p>';
echo $v05;

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

