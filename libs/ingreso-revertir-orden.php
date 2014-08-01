
<article class="confirmando_info">
  
<h1>Revertir orden de compra</h1>
<h1>&nbsp;</h1>


<?php

include('../libs/conexion-clase.php');


session_start();

if (!isset($_SESSION["usuario"])){
    header("location:index.php?nologin=false");
}

$usuario_registrado = $_SESSION["usuario"];

/*====== ID MAXIMO DE TIPO =============*/
/*
$sql01 = "SELECT MAX(COD_ORDEN+1) AS ID_OC FROM ORDEN_COMPRA";
$consulta01 = oci_parse($conn, $sql01);
         oci_execute($consulta01);    


$max01 = oci_fetch_row($consulta01);
$max01[0];  
*/

?>


<script language="JavaScript" type="text/javascript" src="funcionesjq.js"></script>

<form name="nuevo_dato" action="" onsubmit="revertir_orden(); return false">
    
<div id="informacion_nuevo_cliente">
<div style="clear:both;"></div>
</div>


<table class="tabla01">

    <tr>
        <td>CODIGO DE ORDEN: </td>            
        <td>  
            <select name="id_orden"  class="seleccion">
            <option selected="selected" value="">[ORDEN]</option>
            <?php 


echo $sql04 = "SELECT COD_ORDEN FROM ORDEN_COMPRA ORDER BY COD_ORDEN ASC";
$consulta04 = oci_parse($conn, $sql04);
         oci_execute($consulta04);    

while (($row04 = oci_fetch_row($consulta04)) != false) {
  echo '<option value="'.$row04[0].'">'.$row04[0].'</option>';
}

oci_free_statement($consulta04);

    ?>
      
      </td>
    </tr> 	
	

    <tr>
      <td></td>
      <td><input name="ingreso" maxlength="60" size="30" value="revertir_orden" type="hidden" class="text" ></td>
     </tr>

  <tr>
      <td></td>
      <td><input id="btn_home" name="submit" type="submit" value="Guardar" /></td>
    </tr>    

    </table>
    
  </form>


<div style="clear:both"></div>


</article>