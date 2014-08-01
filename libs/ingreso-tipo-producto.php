
<article class="confirmando_info">

<h1>Nuevo Tipo Producto</h1>


<?php

include('../libs/conexion-clase.php');


/*====== ID MAXIMO DE TIPO =============*/

$sql01 = "SELECT MAX(COD_TIPO_PRODUCTO + 1 ) AS ID_TP FROM TIPO_PRODUCTO";
$consulta01 = oci_parse($conn, $sql01);
         oci_execute($consulta01);


$max01 = oci_fetch_row($consulta01);
$max01[0];

?>


<script language="JavaScript" type="text/javascript" src="funcionesjq.js"></script>

<form name="nuevo_dato" action="" onsubmit="guardar_tipo_producto(); return false">
    
<div id="informacion_nuevo_cliente">
<div style="clear:both;"></div>
</div>


<table class="tabla01">

    <tr>
      <td>ID TIPO PRODUCTO: </td>
      <td><input name="id_tp" type="text" size="28" required="required" value="<?php echo $max01[0]; ?>"/></td>
    </tr>

    <tr>
      <td>DESCRIPCION: </td>
      <td><input name="descripcion" type="text" size="28" placeholder="DESCRIPCION" required="required" /></td>
    </tr>
    <tr>

    <tr>
      <td></td>
      <td><input name="ingreso" maxlength="60" size="30" value="nuevo_tipo_producto" type="hidden" class="text" ></td>
     </tr>

  <tr>
      <td></td>
      <td><input id="btn_home" name="submit" type="submit" value="Guardar" /></td>
    </tr>

    </table>
  </form>


<div style="clear:both"></div>


</article>