<?php

include('../libs/conexion-clase.php');

// include('./config.php');

$vars = $_POST;

echo 'lelgo aqui en guardar persona.';

if($vars['ingreso'] == 100)
{

  echo '<p>Saludos igresaste al if</p>';

}
if ($vars['ingreso'] == 'nueva_persona') {
  echo '<p>Saludos igresaste al 2DO if</p>';


$stid = oci_parse($conn,"INSERT INTO PERSONA (COD_PERSONA, NOMBRES,APELLIDOS,FEC_INGRESO,ESTADO,DIRECCION) 
  VALUES(:v01_bv, :v02_bv,:v03_bv, :v07_bv,:v08_bv, :v09_bv)");

$v01 = $vars['cod_persona'];
$v02 = $vars['nombres'];
$v03 = $vars['apellidos'];
$v04 = $vars['dia_in'];
$v05 = $vars['mes_in'];
$v06 = $vars['anio_in'];
$v07 = $v04."-".$v05."-".$v06;
$v08 = $vars['estado'];
$v09 = $vars['direccion'];

oci_bind_by_name($stid, ":v01_bv", $v01);
oci_bind_by_name($stid, ":v02_bv", $v02);
oci_bind_by_name($stid, ":v03_bv", $v03);
oci_bind_by_name($stid, ":v07_bv", $v07);
oci_bind_by_name($stid, ":v08_bv", $v08);
oci_bind_by_name($stid, ":v09_bv", $v09);
oci_execute($stid);
  
echo '<p>-----------</p>';


}

else{
   echo '<p>Saludos igresaste al else</p>';
}

/*

if($vars['libro']== ""){

echo 'Debe llenar el Libro';
exit();} 


elseif($vars['folio']=="")
{
echo 'Debe llenar el Campo Folio';
exit();
}

elseif($vars['nombre']=="")
{
	
echo 'Debe llenar el Campo Nombre';
exit();

}


else {  


// include('fecha02.php');
include('funcion-fecha1.php');
include('funcion-fecha2.php');
include('funcion-fecha3.php');



 //  $recibo = $vars['no_recibo'];
   $vparroquia = $vars['parroquia'];       
   $vlibro = $vars['libro'];
   $vfolio = $vars['folio'];
   $vpartida = $vars['partida'];   
   $vnombre = addslashes($vars['nombre']);
   $vapellido = addslashes($vars['apellido']);   
   $vanio = $vars['anio_nac'];   
   $vmes = $vars['mes_nac'];   
   $vdia = $vars['dia_nac'];
   $vedadc = $vars['edadconfirmacion'];   
   $vlugar = addslashes($vars['lugarbautizo']);   
   $vpadre = addslashes($vars['padre']);
   $vmadre = addslashes($vars['madre']);
   $vpadrinos = addslashes($vars['padrinos']);
   $vministro = addslashes($vars['ministro']);
   $vparroco = $vars['parroco'];  
   $vmargen = $vars['margen'];     
   
   $fecha_regis = date("Y-m-d H:i:s");
   $categoria = 2;
   */
/*..... INCIAN MIS TRANSACCIONES ...............................*/
/*
$sql = "SET AUTOCOMMIT=0;";
mysql_query( "BEGIN" );
$sql = "START TRANSACTION";

mysql_query($sql) or die ($texto_error1);


$vfechac = ''.$vanio.'-'.$vmes.'-'.$vdia.'';

/*......................................................................*//*

$sql = "INSERT INTO cop_confirmacion (idcategoria,libro,folio,acta,parroquia,nombre,apellido,fechac,edadc,padre,madre,lugar_bautismo,padrinos,ministro,parroco,margen,registro) VALUES ($categoria,'$vlibro','$vfolio','$vpartida','$vparroquia','$vnombre','$vapellido','$vfechac','$vedadc','$vpadre','$vmadre','$vlugar','$vpadrinos','$vministro','$vparroco','$vmargen','$fecha_regis')"; 

$query = mysql_query($sql);

/*....................*//*
	if( $query ){
		
			mysql_query( "COMMIT" );
			

   $vnombre = $vars['nombre'];
   $vapellido = $vars['apellido'];   
   $vlugar = $vars['lugarbautizo'];   
   $vpadre = $vars['padre'];
   $vmadre = $vars['madre'];
   $vpadrinos = $vars['padrinos'];
   $vministro = $vars['ministro'];
	
   $vfechac = traducefecha2($vfechac);
   $fecha_regis = traducefecha2($fecha_regis);
	
include('constancia-confirmacion.php');
include('./libhe/conexion.php');
echo '
<p>&nbsp;</p>
<div id="informacion_nuevo_cliente">';
include('./libhe/ultimo_agregado_confirmacion.php');
echo '</div>';


		exit();
		
		} else {
		
			mysql_query( "ROLLBACK" );
		echo '<h5 class="error">Ocurrio un error al guardar los datos, porfavor vuelva a intentarlo.</h5>';
		exit();
}


}/*... FINALIZA EL ELSE DE QUE TODOS LOS DATOS DEL FORMULARIO FUERON VALIDADOS.....*/
	
	?>
	
<div style="clear:both;"></div>

