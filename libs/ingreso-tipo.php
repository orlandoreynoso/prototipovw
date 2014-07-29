
<article class="confirmando_info">
  
<h1>Ingresar tipo ID</h1>


<?php

include('../libs/conexion-clase.php');

$empresas = "SELECT * FROM TIPO_ID";


 $result = oci_parse($conn, $empresas);
         oci_execute($result);    


$filasn = oci_fetch_all($result,$results,0, -1, OCI_FETCHSTATEMENT_BY_ROW + OCI_ASSOC);
$filasn;

$uno = htmlentities($filasn) + 1;
?>


<script language="JavaScript" type="text/javascript" src="funcionesjq.js"></script>

<h5 class="escribiendo">Agregar nuevo tipo&nbsp;&nbsp;&raquo;&nbsp;<span class="numeral">No. <?php echo $uno; ?></span></h5>
<!-- form class="contact_form formulario"  name="formu_confi" method="post" action="libs/guardar-persona.php"  -->
<!-- form class="contact_form formulario"  name="formu_confi" method="post" -->
<form name="nuevo_dato" action="" onsubmit="guardar_tipo(); return false">
		
<div id="informacion_nuevo_cliente">
<div style="clear:both;"></div>
</div>


<table class="tabla01">
    <tr>
      <td>&nbsp;</td>      
      <td><input name="cod_tipo" type="text" size="28" required="required" value="" placeholder ="CODIGO TIPO"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>      
      <td><input name="des_id" type="text" size="28" required="required" value="" placeholder ="DESCRIPCION TIPO"/></td>
    </tr>    

    <tr>
      <td>Fecha Ingreso</td>            
        <td>  
            <select name="dia_in"  class="seleccion"  placeholder="select your beverage" >
            <option selected="selected" value="">[DIA]</option>
            <?php 
      for($dato_mes = 1; $dato_mes <= 31; $dato_mes ++){  echo '<option value="'.$dato_mes.'">'.$dato_mes.'</option>';  }
      ?>
            </select>
            &nbsp;
            <select name="mes_in">
            <option selected="selected" value="">[MES]</option>
                <option value="1">Enero</option>
                <option value="2">Febrero</option>
                <option value="3">Marzo</option>
                <option value="4">Abril</option>
                <option value="5">Mayo</option>
                <option value="6">Junio</option>
                <option value="7">Julio</option>
                <option value="8">Agosto</option>
                <option value="9">Septiembre</option>
                <option value="10">Octubre</option>
                <option value="11">Noviembre</option>
                <option value="12">Diciembre</option>
            </select>
            &nbsp;  
             <select name="anio_in">
            <option selected="selected" value="">[AÑO]</option>
            <?php 
      for($dato_year = 1920; $dato_year <= 2030; $dato_year ++){  echo '<option value="'.$dato_year.'">'.$dato_year.'</option>';  }
      ?>
            </select>
      </td>
    </tr> 
    <tr>
      <td></td>
      <td><input name="estado" type="text" size="28" placeholder="ESTADO"/></td>
    </tr>


     <tr>
      <td></td>
      <td><input name="ingreso" maxlength="60" size="30" value="nuevo_tipo" type="hidden" class="text" ></td>
     </tr>

	<tr>
    	<td></td>
      <td><input id="btn_home" name="submit" type="submit" value="Guardar" /></td>
    </tr>    

    </table>
    
  </form>


<div style="clear:both"></div>


</article>