<?PHP 

function traducefecha($vfechac)
    {
		
    $vfechac = strtotime($vfechac); // convierte la fecha de formato mm/dd/yyyy a marca de tiempo
    $viasemana=date("w", $vfechac);// optiene el n�mero del dia de la semana. El 0 es domingo
       switch ($viasemana)
       {
       case "0":
          $viasemana="Domingo";
          break;
       case "1":
          $viasemana="Lunes";
          break;
       case "2":
          $viasemana="Martes";
          break;
       case "3":
          $viasemana="Mi&eacute;rcoles";
          break;
       case "4":
          $viasemana="Jueves";
          break;
       case "5":
          $viasemana="Viernes";
          break;
       case "6":
          $viasemana="S&aacute;bado";
          break;
       }
	   
    $via=date("d",$vfechac); // d�a del mes en n�mero
    $mes=date("m",$vfechac); // n�mero del mes de 01 a 12
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
    $ano = date("Y",$vfechac); // optenemos el a�o en formato 4 digitos
	//   $vfechac = $viasemana.", ".$via." de ".$mes." de ".$ano; 
	// unimos el resultado en una unica cadena
    // $vfechac = "el d&iacute;a ".$via." de ".$mes." del a&ntilde;o ".$ano; 
    $vfechac = $via." de ".$mes." de ".$ano; // unimos el resultado en una unica cadena		
	// unimos el resultado en una unica cadena	
    return $vfechac; //enviamos la fecha al programa
    }		
	


?>