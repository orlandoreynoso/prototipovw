
<article class="confirmando_info">
  
<h1>Ingresar Persona</h1>


<?php /*

require('./libhe/conexion.php'); 
	   
 $Resultado=mysql_query("SELECT COUNT(idconfirmacion) as numeral FROM cop_confirmacion ORDER BY numeral",$con);	   
 $MostrarDato=mysql_fetch_array($Resultado);
 $uno = htmlentities($MostrarDato[0]) + 1;
 */

?>

<?php

include('../libs/conexion-clase.php');

$empresas = "SELECT * FROM PERSONA";


 $result = oci_parse($conn, $empresas);
         oci_execute($result);    


$filasn = oci_fetch_all($result,$results,0, -1, OCI_FETCHSTATEMENT_BY_ROW + OCI_ASSOC);
$filasn;

$uno = htmlentities($filasn) + 1;
?>




<h5 class="escribiendo">Agregar nueva persona&nbsp;&nbsp;&raquo;&nbsp;<span class="numeral">No. <?php echo $uno; ?></span></h5>
<!-- form class="contact_form formulario"  name="formu_confi" method="post" action="libs/guardar-persona.php"  -->
<form class="contact_form formulario"  name="formu_confi" method="post">
		
<div id="informacion_nuevo_cliente">
<div style="clear:both;"></div>
</div>


<table class="tabla01">
    <tr>
      <td>&nbsp;</td>      
      <td><input name="cod_persona" type="text" size="28" required="required" value="" placeholder ="CODIGO PERSONA"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>            
      <td>
        <input name="nombres" type="text" size="28" autofocus="autofocus" required="required" placeholder ="NOMBRES"/>
        <input name="apellidos" type="text" size="28" required="required" placeholder ="APELLIDOS"/>
      </td>      
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
      <td><textarea class="textarea1" name="direccion" cols="40" rows="1" placeholder="DIRECCION"></textarea></td>
    </tr>

     <tr>
      <td></td>
      <td><input name="ingreso" maxlength="60" size="30" value="nueva_persona" type="hidden" class="text" ></td>
     </tr>

	<tr>
    	<td></td>
      <td><input id="btn_home" name="submit" type="submit" value="GUARDAR" onClick="guardar(1,nueva_persona); return false;"/></td>
    </tr>    

    </table>
    
  </form>


<div style="clear:both"></div>


</article>