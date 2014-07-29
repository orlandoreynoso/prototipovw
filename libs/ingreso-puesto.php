
<article class="confirmando_info">
  
<h1>Ingresar Puesto</h1>


<?php

include('../libs/conexion-clase.php');

$empresas = "SELECT * FROM PUESTO";


 $result = oci_parse($conn, $empresas);
         oci_execute($result);    


$filasn = oci_fetch_all($result,$results,0, -1, OCI_FETCHSTATEMENT_BY_ROW + OCI_ASSOC);
$filasn;

$uno = htmlentities($filasn) + 1;
?>


<script language="JavaScript" type="text/javascript" src="funcionesjq.js"></script>

<h5 class="escribiendo">Agregar nuevo puesto&nbsp;&nbsp;&raquo;&nbsp;<span class="numeral">No. <?php echo $uno; ?></span></h5>
<!-- form class="contact_form formulario"  name="formu_confi" method="post" action="libs/guardar-persona.php"  -->
<!-- form class="contact_form formulario"  name="formu_confi" method="post" -->
<form name="nuevo_dato" action="" onsubmit="guardar_puesto(); return false">
		
<div id="informacion_nuevo_cliente">
<div style="clear:both;"></div>
</div>


<table class="tabla01">
    <tr>
      <td>&nbsp;</td>      
      <td><input name="cod_puesto" type="text" size="28" required="required" value="" placeholder ="CODIGO PUESTO"/></td>
    </tr>

    <tr>
      <td></td>
      <td><textarea name="descripcion" cols="40" rows="1" placeholder="DESCRIPCION"></textarea></td>
    </tr>
    <tr>
      <td></td>
      <td><input name="estado" type="text" size="28" placeholder="ESTADO"/></td>
    </tr>


     <tr>
      <td></td>
      <td><input name="ingreso" maxlength="60" size="30" value="nuevo_puesto" type="hidden" class="text" ></td>
     </tr>

	<tr>
    	<td></td>
      <td><input id="btn_home" name="submit" type="submit" value="Guardar" /></td>
    </tr>    

    </table>
    
  </form>


<div style="clear:both"></div>


</article>