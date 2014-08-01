
<article class="confirmando_info">
  
<h1>Ingresar Persona</h1>


<?php

include('../libs/conexion-clase.php');

$empresas = "SELECT * FROM PERSONA";


 $result = oci_parse($conn, $empresas);
         oci_execute($result);    


$filasn = oci_fetch_all($result,$results,0, -1, OCI_FETCHSTATEMENT_BY_ROW + OCI_ASSOC);
$filasn;

$uno = htmlentities($filasn) + 1;

/*====== ID MAXIMO DE PERSONA =============*/

$sql_maxi_persona = "SELECT MAX(COD_PERSONA + 1) AS ID_PERSONA FROM PERSONA";
$consulta_max_persona = oci_parse($conn, $sql_maxi_persona);
         oci_execute($consulta_max_persona);    


$max_persona = oci_fetch_row($consulta_max_persona);
$max_persona[0];


?>


<script language="JavaScript" type="text/javascript" src="funcionesjq.js"></script>

<form name="nuevo_empleado" action="" onsubmit="guardar_persona(); return false">
		
<div id="informacion_nuevo_cliente">
<div style="clear:both;"></div>
</div>


<table class="tabla01">
    <tr>
      <td>ID PERSONA: </td>      
      <td><input name="cod_persona" type="text" size="28" required="required" value="<?php echo $max_persona[0]; ?>" placeholder ="CODIGO PERSONA"/></td>
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
      <td><input name="estado" type="text" size="28" placeholder="ESTADO" value="A"/></td>
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
      <td><input id="btn_home" name="submit" type="submit" value="Guardar" /></td>
    </tr>    

    </table>
    
  </form>


<div style="clear:both"></div>


</article>