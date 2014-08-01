
<article class="confirmando_info">
  
<h1>Nueva sucursal</h1>


<?php

include('../libs/conexion-clase.php');


/*====== ID MAXIMO DE TIPO =============*/

$sql01 = "SELECT MAX(COD_PROYECTO + 1) AS CP FROM PROYECTO";
$consulta01 = oci_parse($conn, $sql01);
         oci_execute($consulta01);    


$max01 = oci_fetch_row($consulta01);
$max01[0];


?>

<script language="JavaScript" type="text/javascript" src="funcionesjq.js"></script>

<form name="nuevo_dato" action="" onsubmit="guardar_proyecto(); return false">

<div id="informacion_nuevo_cliente">
<div style="clear:both;"></div>
</div>


<table class="tabla01">

    <tr>
      <td>COD SUCURSAL</td>      
      <td><input name="id_sucursal" type="text" size="28" required="required" value="<?php echo $max01[0]; ?>" /></td>
    </tr>

    <tr>
        <td>FARMACIA: </td>
        <td> 
            <select name="id_farmacia"  class="seleccion">
            <option selected="selected" value="">[FARMACIA]</option>
            <?php 

            echo $sql04 = "SELECT COD_EMPRESA,NOM_EMPRESA FROM EMPRESA";
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
      <td>NOMBRE SUCURSAL</td>            
      <td>
        <input name="nombre_sucursal" type="text" size="28" autofocus="autofocus" required="required" placeholder ="NOMBRES"/>
      </td>      
    </tr>
    
    <tr>
      <td>DIRECCION</td>
      <td><textarea  name="direccion" cols="40" rows="1" placeholder="DIRECCION" required="required"></textarea></td>
    </tr>

    <tr>
      <td></td>
      <td><input name="ingreso" maxlength="60" size="30" value="nuevo_proyecto" type="hidden" class="text" ></td>
     </tr>

  <tr>
      <td></td>
      <td><input id="btn_home" name="submit" type="submit" value="Guardar" /></td>
    </tr>

    </table>
  </form>


<div style="clear:both"></div>


</article>