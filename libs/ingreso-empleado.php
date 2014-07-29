
<article class="confirmando_info">
  
<h1>Ingresar empleado</h1>


<?php

include('../libs/conexion-clase.php');

/*====== ID MAXIMO DE TIPO =============*/

$sql01 = "SELECT MAX(COD_ID + 1) AS COD_TIPO FROM TIPO_ID";
$consulta01 = oci_parse($conn, $sql01);
         oci_execute($consulta01);    


$max01 = oci_fetch_row($consulta01);
$max01[0];

?>


<script language="JavaScript" type="text/javascript" src="funcionesjq.js"></script>

<form name="nuevo_dato" action="" onsubmit="guardar_empleado(); return false">
		
<div id="informacion_nuevo_cliente">
<div style="clear:both;"></div>
</div>


<table class="tabla01">

    <tr>
        <td>PERSONA</td>            
        <td>  
            <select name="id_persona"  class="seleccion"  placeholder="select your beverage" >
            <option selected="selected" value="">[PERSONA]</option>
            <?php 


/*====== ID MAXIMO DE TIPO =============*/

$sql02 = "SELECT COD_PERSONA,NOMBRES FROM PERSONA WHERE ESTADO = '1'";
$consulta02 = oci_parse($conn, $sql02);
         oci_execute($consulta02);    

while (($row02 = oci_fetch_row($consulta02)) != false) {
  echo '<option value="'.$row02[0].'">'.$row02[1].'</option>';
}


oci_free_statement($consulta02);


      ?>
      
      </td>
    </tr> 


    <tr>
      <td>USUARIO</td>      
      <td><input name="usuario" type="text" size="28" required="required" value="" placeholder ="usuario"/></td>
    </tr>
    <tr>
      <td>CLAVE</td>      
      <td><input name="clave" type="password" size="28" required="required" value="" placeholder ="clave"/></td>
    </tr>

    <tr>
      <td></td>
      <td><input name="estado" type="text" size="28" placeholder="ESTADO"/></td>
    </tr>


    <tr>       <td>PUESTO</td>            
        <td>  
            <select name="id_puesto"  class="seleccion" >
            <option selected="selected" value="">[PUESTO]</option>
            <?php 


/*====== ID MAXIMO DE TIPO =============*/

$sql03 = "SELECT COD_PUESTO,DES_PUESTO FROM PUESTO WHERE ESTADO = '1'";
$consulta03 = oci_parse($conn, $sql03);
         oci_execute($consulta03);    

while (($row03 = oci_fetch_row($consulta03)) != false) {
  echo '<option value="'.$row03[0].'">'.$row03[1].'</option>';
}


oci_free_statement($consulta03);

      ?>
      
      </td>
    </tr> 

    <tr>
      <td>SALARIO BASE</td>      
      <td><input name="salario_base" type="number" size="28" required="required" value="" /></td>
    </tr>
    <tr>
      <td>BONIFICAION</td>      
      <td><input name="bonificacion" type="number" size="28" required="required" value="" /></td>
    </tr>

    <tr>       <td>TIPO ID</td>            
        <td>  
            <select name="id_puesto"  class="seleccion" >
            <option selected="selected" value="">[TIPO ID]</option>
            <?php 


/*====== ID MAXIMO DE TIPO_ID =============*/

$sql04 = "SELECT COD_ID, DES_ID FROM TIPO_ID WHERE ESTADO_ID = '1'";
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
      <td></td>
      <td><input name="ingreso" maxlength="60" size="30" value="nuevo_empleado" type="hidden" class="text" ></td>
     </tr>

	<tr>
    	<td></td>
      <td><input id="btn_home" name="submit" type="submit" value="Guardar" /></td>
    </tr>    

    </table>
    
  </form>


<div style="clear:both"></div>


</article>