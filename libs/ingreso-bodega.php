
<article class="confirmando_info">
  
<h1>Nueva bodega</h1>


<?php

include('../libs/conexion-clase.php');

$sql01 = "SELECT MAX(COD_BODEGA+1) AS ID_BODEGA FROM BODEGA";
$consulta01 = oci_parse($conn, $sql01);
         oci_execute($consulta01);    


$max01 = oci_fetch_row($consulta01);
$max01[0];

?>


<script language="JavaScript" type="text/javascript" src="funcionesjq.js"></script>

<form name="nuevo_dato" action="" onsubmit="guardar_bodega(); return false">
		
<div id="informacion_nuevo_cliente">
<div style="clear:both;"></div>
</div>


<table class="tabla01">

    <tr>
      <td>ID BODEGA: </td>      
      <td><input name="id_bodega" type="text" size="28" required="required" value="<?php echo $max01[0]; ?>"/></td>
    </tr>

    <tr>
        <td>SUCURSAL: </td>            
        <td>  
            <select name="id_proyecto"  class="seleccion">
            <option selected="selected" value="">[SUCURSAL]</option>
            <?php 


/*====== ID MAXIMO DE TIPO =============*/

$sql03 = "SELECT COD_EMPRESA,COD_PROYECTO,NOM_PROYECTO FROM PROYECTO WHERE ESTADO = 'A'";
$consulta03 = oci_parse($conn, $sql03);
         oci_execute($consulta03);    

while (($row03 = oci_fetch_row($consulta03)) != false) {
  echo '<option value="'.$row03[1].'">'.$row03[2].'</option>';
}


oci_free_statement($consulta02);


      ?>
      
      </td>
    </tr> 


    <tr>
      <td>NOMBRE BODEGA: </td>      
      <td><input name="nom_bodega" type="text" size="28" required="required" value="" placeholder ="NOMBRE BODEGA"/></td>
    </tr>
    <tr>
      <td>DIRECCION: </td>
      <td><textarea name="direccion" cols="40" rows="1" placeholder="DIRECCION"></textarea></td>
    </tr>
    <tr>
      <td>FECHA DE CREACION</td>            
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
      <td><input name="ingreso" maxlength="60" size="30" value="nueva_bodega" type="hidden" class="text" ></td>
     </tr>

	<tr>
    	<td></td>
      <td><input id="btn_home" name="submit" type="submit" value="Guardar" /></td>
    </tr>    

    </table>
    
  </form>


<div style="clear:both"></div>


</article>