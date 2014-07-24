<?php 
 
     include('librerias/conexion-clase.php');
    // $coneccion = new Conexion();

//while ($row = oci_fetch_row($result)) {
/*

    echo "<tr>\n";
    ECHO $row[0];
    echo "</tr>\n";
    echo "<tr>\n";
    ECHO $row[1];
    echo "</tr>\n"; 
*/

//while ($row = oci_fetch_array($result, OCI_ASSOC+OCI_RETURN_NULLS)) {

/*
    echo "<tr>\n";
    ECHO $row['COD_PERSONA'];
    echo "</tr>\n";
    echo "<tr>\n";
    ECHO $row['NOMBRES'];
    echo "</tr>\n";  
*/

/*
while (($row = oci_fetch_object($result)) != false) {
    // Use nombres de atributo en mayúsculas para cada columna estándar de Oracle
    echo $row->ID . "<br>\n";
    echo $row->DESCRIPTION . "<br>\n"; 
}

*/

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prototipo VW</title>

</head>
<body>
    
    <header>
    </header>
    <nav></nav>
    <section>
        <h1>Hola</h1>
        <?php 
 
//     include('librerias/conexion-clase.php');
  //   $con = new Conexion();

echo     $nombre = 'ORLANsdsfDO';
echo     $contrasena = '100';

 // echo   $consulta = "SELECT COD_PERSONA,NOMBRES FROM PERSONA WHERE COD_PERSONA = $contrasena AND NOMBRES LIKE2('$nombre')";
 echo   $consulta = "SELECT * FROM PERSONA";
 echo '<p>... oci parce....</p>';
 echo    $stid = oci_parse($conn, $consulta);
 echo '<p>... oci execture....</p>';
   //   echo  oci_execute($result);

 
oci_execute($stid);

while (($row = oci_fetch_array($stid, OCI_RETURN_NULLS)) != false) {
 echo    $ncols = oci_num_fields($stid);
    for ($col = 1; $col <= $ncols; $col++) {
       echo  var_dump(oci_field_is_null($stid, $col));
    }    
}



/*

oci_execute($stid, OCI_DESCRIBE_ONLY); // Use OCI_DESCRIBE_ONLY if not fetching rows
 echo '<p>...........</p>';
$ncols = oci_num_rows($stid);

 echo '<p>...........</p>';
echo ' <table>
         <tr>
             <td>I</td>
             <td>N</td>             
         </tr>
         ';
for ($i = 1; $i <= $ncols; $i++) {
echo '
         <tr>
             <td>   '.$i.'</td>
             <td>   '.$ncols.'</td>             
         </tr>    
         ';
}

echo '</table>'; */




        ?>

    </section>

    <footer>
        <p><a href="https://twitter.com/orlandoreynoso">@orlandoreynoso</a></p>
    </footer>
</body>
</html>
