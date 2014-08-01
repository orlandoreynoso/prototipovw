
<article class="confirmando_info">
  
<h1>Nueva farmacia</h1>


<?php

include('../libs/conexion-clase.php');

$sql_maxi_persona = "SELECT MAX(COD_EMPRESA+1) AS CE FROM EMPRESA";
$consulta_max_persona = oci_parse($conn, $sql_maxi_persona);
         oci_execute($consulta_max_persona);    


$max_persona = oci_fetch_row($consulta_max_persona);
$max_persona[0];


?>


<script language="JavaScript" type="text/javascript" src="funcionesjq.js"></script>

<form name="nuevo_dato" action="" onsubmit="guardar_empresa(); return false">
		
<div id="informacion_nuevo_cliente">
<div style="clear:both;"></div>
</div>


<table class="tabla01">
    <tr>
      <td>ID FARMACIA: </td>      
      <td><input name="id_farmacia" type="text" size="28" required="required" value="<?php echo $max_persona[0]; ?>" placeholder ="CODIGO PERSONA"/></td>
    </tr>
    <tr>
      <td>NOMBRE</td>            
      <td>
        <input name="nombre_farmacia" type="text" size="28" autofocus="autofocus" required="required" placeholder ="NOMBRES"/>
      </td>      
    </tr>
    
    <tr>
      <td>DIRECCION</td>
      <td><textarea  name="direccion" cols="40" rows="1" placeholder="DIRECCION" required="required"></textarea></td>
    </tr>

    <tr>
      <td>IDENTIFICAION LEGAL</td>
      <td><textarea  name="id_legal" cols="40" rows="1" placeholder="IDENTIFICAION LEGAL" required="required"></textarea></td>
    </tr>

     <tr>
      <td></td>
      <td><input name="ingreso" maxlength="60" size="30" value="nueva_farmacia" type="hidden" class="text" ></td>
     </tr>

	   <tr>
    	<td></td>
      <td><input id="btn_home" name="submit" type="submit" value="Guardar" /></td>
      </tr>    

    </table>
    
  </form>


<div style="clear:both"></div>


</article>