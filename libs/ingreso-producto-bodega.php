
<article class="confirmando_info">
  
<h1>Agregar producto a bodega</h1>
<h1>&nbsp;</h1>


<?php

include('../libs/conexion-clase.php');



session_start();

if (!isset($_SESSION["usuario"])){
    header("location:index.php?nologin=false");
}

$usuario_registrado = $_SESSION["usuario"];

/*====== ID MAXIMO DE TIPO =============*/

$sql01 = "SELECT MAX(COD_ORDEN+1) AS ID_OC FROM ORDEN_COMPRA";
$consulta01 = oci_parse($conn, $sql01);
         oci_execute($consulta01);    


$max01 = oci_fetch_row($consulta01);
$max01[0];

?>


<script language="JavaScript" type="text/javascript" src="funcionesjq.js"></script>

<form name="nuevo_dato" action="" onsubmit="guardar_producto_bodega(); return false">
    
<div id="informacion_nuevo_cliente">
<div style="clear:both;"></div>
</div>


<table class="tabla01">

   <tr>
        <td>MOVIMIENTO BODEGA: </td>            
        <td>  
            <select name="id_mb"  class="seleccion">
            <option selected="selected" value="">[MOVIMIENTO BODEGA]</option>
            <?php 


$sql04 = "SELECT COD_EMPRESA,COD_PROYECTO,COD_BODEGA,COD_MOVIMIENTO FROM MOVIMIENTO_BODEGA ORDER BY COD_MOVIMIENTO ASC ";
$consulta04 = oci_parse($conn, $sql04);
         oci_execute($consulta04);    

while (($row04 = oci_fetch_row($consulta04)) != false) {
  echo '<option value="'.$row04[3].'">'.$row04[3].'</option>';
}

oci_free_statement($consulta04);

    ?>
      
      </td>
    </tr> 	
	
   <tr>
        <td>PRODUCTO: </td>            
        <td>  
            <select name="id_producto"  class="seleccion">
            <option selected="selected" value="">[PRODUCTO]</option>
            <?php 


$sql05 = "SELECT COD_PRODUCTO,ID_PRODUCTO,DES_PRODUCTO FROM PRODUCTO";
$consulta05 = oci_parse($conn, $sql05);
         oci_execute($consulta05);    

while (($row05 = oci_fetch_row($consulta05)) != false) {
  echo '<option value="'.$row05[0].'">'.$row05[2].'</option>';
}

oci_free_statement($consulta05);

    ?>
      
      </td>
    </tr>   


 
    <tr>
      <td>CANTIDAD: </td>
      <td><input name="cantidad" type="text" size="28" /></td>
    </tr>
    <tr>

    <tr>
      <td></td>
      <td><input name="ingreso" maxlength="60" size="30" value="agregar_producto_bodega" type="hidden" class="text" ></td>
     </tr>

  <tr>
      <td></td>
      <td><input id="btn_home" name="submit" type="submit" value="Guardar" /></td>
    </tr>    

    </table>
    
  </form>


<div style="clear:both"></div>


</article>