
<h1>Ingresar Persona</h1>

<table class="confirmando_info">
	<tr class="regresar">
    	<td><span class="retornar">&raquo;</span><a href="<?php echo WB_URL; ?>/menu.php" >Menu</a></td>    
    	<td><span class="retornar">&raquo;</span><a href="<?php echo WB_URL; ?>/ingresar.php?dat=201&cat=2" >Nuevo</a></td>
    	<td><span class="retornar">&raquo;</span><a href="<?php echo WB_URL; ?>/buscar.php?dat=205&cat=2" >Buscar</a></td>        
       	<td><span class="retornar">&raquo;</span><a href="<?php echo WB_URL; ?>/listar.php?dat=204&cat=2" >Listar</a></td>                
    </tr>
</table>	
 

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

$uno = htmlentities($filasn[0]) + 1;
?>




<h5 class="escribiendo">Agregar nueva persona&nbsp;&nbsp;&raquo;&nbsp;<span class="numeral">Confirmando No. <?php echo $uno; ?></span></h5>
<form class="contact_form" name="formu_confi" method="post" action="libs/guardar-persona.php" >
		
<div id="informacion_nuevo_cliente">
<div style="clear:both;"></div>
</div>

    <table class="datos-basicos" >
      <tr>
       <td>CODIGO PERSONA&nbsp;<span class="red"> (*) </span></td -->
       <td><input name="cod_persona" type="text" size="28" required="required" value="" placeholder ="CODIGO PERSONA"/></td>
      </tr>              
                  
      <tr>
        <td>NOMBRES&nbsp;<span class="red"> (*) </span></td>
        <td><input name="nombres" type="text" size="28" autofocus="autofocus" required="required" placeholder ="NOMBRES"/></td>        
        <td>APELLIDOS&nbsp;<span class="red"> (*) </span></td>
        <td><input name="apellidos" type="text" size="28" required="required" placeholder ="APELLIDOS"/></td> 
     </tr>   

      <tr>
	 <td>FECHA INGRESO <span class="red">*</span>
        <td>	
            <select name="dia_in">
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
        <td>ESTADO&nbsp;<span class="red"> (*) </span></td>
        <td><input name="estado" type="text" size="28"/></td>
      </tr>
      
      <tr>
       <td>DIRECCION&nbsp;<span class="red"> (*) </span></td>
        <td colspan="3"><textarea class="textarea1" name="direccion" cols="40" rows="1"></textarea></td>
      </tr>      

      <tr>
      	<td><input name="ingreso" maxlength="60" size="30" value="nueva_persona" type="hidden" class="text" ></td>
      </tr>



	<tr>
    	<td></td>
       	<td><input id="btn_home" name="submit" type="submit" value="GUARDAR"/></td>
    </tr>    
    </table>
    
  </form>


<div style="clear:both"></div>


