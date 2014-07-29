
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

/*====== ID MAXIMO DE PUESTO =============*/

$sql_maxi_puesto = "SELECT MAX(COD_PUESTO + 1) AS ID_PUESTO FROM PUESTO";
$consulta_max_puesto = oci_parse($conn, $sql_maxi_puesto);
         oci_execute($consulta_max_puesto);    


$max_puesto = oci_fetch_row($consulta_max_puesto);
$max_puesto[0];

?>


<script language="JavaScript" type="text/javascript" src="funcionesjq.js"></script>

<form name="nuevo_dato" action="" onsubmit="guardar_puesto(); return false">
		
<div id="informacion_nuevo_cliente">
<div style="clear:both;"></div>
</div>


<table class="tabla01">
    <tr>
      <td>CODIGO PUESTO: </td>      
      <td><input name="cod_puesto" type="text" size="28" required="required" value="<?php echo $max_puesto[0]; ?>" placeholder ="CODIGO PUESTO"/></td>
    </tr>

    <tr>
      <td></td>
      <td><input name="descripcion"  placeholder="DESCRIPCION" size="28" autofocus="autofocus" required="required" /></td>
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