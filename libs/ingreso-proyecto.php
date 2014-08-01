
<article class="confirmando_info">
  
<h1>Nuevo producto</h1>


<?php

include('../libs/conexion-clase.php');


?>


<script language="JavaScript" type="text/javascript" src="funcionesjq.js"></script>

<form name="nuevo_dato" action="" onsubmit="guarda_producto(); return false">

<div id="informacion_nuevo_cliente">
<div style="clear:both;"></div>
</div>


<table class="tabla01">

    <tr>
      <td>COD PRODUCTO: </td>
      <td><input name="id_producto" type="text" size="28" required="required" value="COD20"/></td>
    </tr>

    <tr>
      <td>NOMBRE PRODUCTO: </td>
      <td><input name="descripcion" type="text" size="28" placeholder="NOMBRE"/></td>
    </tr>
    <tr>

    <tr>
        <td>MARCA: </td>
        <td> 
            <select name="id_marca"  class="seleccion">
            <option selected="selected" value="">[MARCA]</option>
            <?php 

echo $sql04 = "SELECT COD_MARCA,DESCRIPCION FROM MARCA_PRODUCTO";
$consulta04 = oci_parse($conn, $sql04);
         oci_execute($consulta04);

while (($row04 = oci_fetch_row($consulta04)) != false) {
  echo '<option value="'.$row04[0].'">'.$row04[1].'</option>';
}

oci_free_statement($consulta04);

    ?>
      </td>
    </tr>
    <tr>
        <td>TIPO PRODUCTO: </td>
        <td> 
            <select name="tipo_producto"  class="seleccion">
            <option selected="selected" value="">[TIPO PRODUCTO]</option>
            <?php 

echo $sql04 = "SELECT COD_TIPO_PRODUCTO,DES_TIPO_PRODUCTO 
FROM TIPO_PRODUCTO 
WHERE ESTADO_TIP_PROD = 'A'";
$consulta04 = oci_parse($conn, $sql04);
         oci_execute($consulta04);

while (($row04 = oci_fetch_row($consulta04)) != false) {
  echo '<option value="'.$row04[0].'">'.$row04[1].'</option>';
}

oci_free_statement($consulta04);

    ?>
      </td>
    </tr> 

    <tr>
      <td>ES SERVICIO: </td>
      <td><input name="es_servicio" type="text" size="28" required="required"  placeholder="S = SALIDA, E = ENTRADA"  /></td>
    </tr>
    <tr>

    <tr>
      <td>PRECIO: </td>
      <td><input name="precio" type="text" size="28" placeholder="PRECIO" required="required" /></td>
    </tr>
    <tr>

    <tr>
      <td></td>
      <td><input name="ingreso" maxlength="60" size="30" value="nuevo_producto" type="hidden" class="text" ></td>
     </tr>

  <tr>
      <td></td>
      <td><input id="btn_home" name="submit" type="submit" value="Guardar" /></td>
    </tr>

    </table>
  </form>


<div style="clear:both"></div>


</article>