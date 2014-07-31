<?php 


function traducefecha2($dfechac)
    {
		
    $dfechac = strtotime($dfechac); // convierte la fecha de formato mm/dd/yyyy a marca de tiempo
    $diasemana=date("w", $dfechac);// optiene el n?mero del dia de la semana. El 0 es domingo
       switch ($diasemana)
       {
       case "0":
          $diasemana="Domingo";
          break;
       case "1":
          $diasemana="Lunes";
          break;
       case "2":
          $diasemana="Martes";
          break;
       case "3":
          $diasemana="Mi&eacute;rcoles";
          break;
       case "4":
          $diasemana="Jueves";
          break;
       case "5":
          $diasemana="Viernes";
          break;
       case "6":
          $diasemana="S&aacute;bado";
          break;
       }
	   
    $dia=date("d",$dfechac); // d?a del mes en n?mero
    $mes=date("m",$dfechac); // n?mero del mes de 01 a 12
       switch($mes)
       {
       case "01":
          $mes="Enero";
          break;
       case "02":
          $mes="Febrero";
          break;
       case "03":
          $mes="Marzo";
          break;
       case "04":
          $mes="Abril";
          break;
       case "05":
          $mes="Mayo";
          break;
       case "06":
          $mes="Junio";
          break;
       case "07":
          $mes="Julio";
          break;
       case "08":
          $mes="Agosto";
          break;
       case "09":
          $mes="Septiembre";
          break;
       case "10":
          $mes="Octubre";
          break;
       case "11":
          $mes="Noviembre";
          break;
       case "12":
          $mes="Diciembre";
          break;
       }
    $ano = date("Y",$dfechac); // optenemos el a?o en formato 4 digitos
    $dfechac = $dia." de ".$mes." de ".$ano; // unimos el resultado en una unica cadena	
    return $dfechac; //enviamos la fecha al programa
    }	



?>