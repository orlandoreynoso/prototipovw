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
 
     include('librerias/conexion-clase.php');


echo     $nombre = 'ORLANsdsfDO';
echo     $contrasena = '100';

echo   $consulta = "SELECT COD_PERSONA,NOMBRES FROM PERSONA WHERE COD_PERSONA = $contrasena AND NOMBRES LIKE2('$nombre')";

// echo '<p>... oci parce....</p>';

 $stid = oci_parse($conn, $consulta);
         oci_execute($stid);    

echo '<p>...........</p>';
echo ' <table>
         <tr>
             <td>ID</td>
             <td>NOMBRES</td>             
         </tr>
         ';

$iNumFilas = oci_fetch_all($stid,$results,0, -1, OCI_FETCHSTATEMENT_BY_ROW + OCI_ASSOC);
$iNumFilas;

 if ($iNumFilas != 0) {
     echo 'Si encontro datos';
    for ($i = 0; $i < $iNumFilas; $i++) {

    echo '
             <tr>
                 <td>   '.$results[$i]["COD_PERSONA"].'</td>
                 <td>   '.$results[$i]["NOMBRES"].'</td>             
             </tr>    
             ';

          }


echo oci_free_statement($stid);
oci_close($conn);

    /*OCIFreeStatement($stid);
    OCILogoff($conn);  */

    echo '</table>'; 

 }
 else
 {
     echo 'NO EXISTEN DATOS';

 }



?>

    </section>

    <footer>
        <p><a href="https://twitter.com/orlandoreynoso">@orlandoreynoso</a></p>
    </footer>
</body>
</html>
