
<article class="confirmando_info">
  
<h1>Movimiento Bodega</h1>


<?php

include('../libs/conexion-clase.php');



session_start();

if (!isset($_SESSION["usuario"])){
    header("location:index.php?nologin=false");
}

$usuario_registrado = $_SESSION["usuario"];

/*====== ID MAXIMO DE TIPO =============*/

$sql01 = "SELECT MAX(COD_MOVIMIENTO+1) AS ID_MBODEGA FROM MOVIMIENTO_BODEGA";
$consulta01 = oci_parse($conn, $sql01);
         oci_execute($consulta01);    


$max01 = oci_fetch_row($consulta01);
$max01[0];

?>


<script language="JavaScript" type="text/javascript" src="funcionesjq.js"></script>

<form name="nuevo_dato" action="" onsubmit="guarda_movimiento_bodega(); return false">
    
<div id="informacion_nuevo_cliente">
<div style="clear:both;"></div>
</div>


<table class="tabla01">

    <tr>
      <td>ID MOVIMIENTO: </td>      
      <td><input name="id_mbodega" type="text" size="28" required="required" value="<?php echo $max01[0]; ?>"/></td>
    </tr>


    <tr>
        <td>BODEGA: </td>            
        <td>  
            <select name="id_bodega"  class="seleccion">
            <option selected="selected" value="">[BODEGA]</option>
            <?php 


echo $sql04 = "SELECT COD_EMPRESA,COD_PROYECTO,COD_BODEGA,DESC_BODEGA FROM BODEGA WHERE ESTADO_BODEGA = 'A'";
$consulta04 = oci_parse($conn, $sql04);
         oci_execute($consulta04);    

while (($row04 = oci_fetch_row($consulta04)) != false) {
  echo '<option value="'.$row04[2].'">'.$row04[3].'</option>';
}

oci_free_statement($consulta04);

    ?>
      
      </td>
    </tr> 

 
    <tr>
      <td>TIPO MOVIMIENTO: </td>
      <td><input name="tipo_movimiento" type="text" size="28" placeholder="I= IN O = OUT"/></td>
    </tr>
    <tr>


    <tr>
      <td>TIPO OPERACION: </td>      
      <td><input name="tipo_operacion" type="text" size="28" placeholder="S=SALIDA R= RESERVA"/></td>
    </tr>

    <tr>
      <td></td>
      <td><input name="ingreso" maxlength="60" size="30" value="nuevo_mbodega" type="hidden" class="text" ></td>
     </tr>

  <tr>
      <td></td>
      <td><input id="btn_home" name="submit" type="submit" value="Guardar" /></td>
    </tr>    

    </table>
    
  </form>


<div style="clear:both"></div>


</article>