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

 echo   $consulta = "SELECT COD_PERSONA,NOMBRES FROM PERSONA WHERE COD_PERSONA = $contrasena AND NOMBRES LIKE2('$nombre')";
 echo '<p>... oci parce....</p>';
 echo    $result = oci_parse($conn, $consulta);
 echo '<p>... oci execture....</p>';
      echo  oci_execute($result);
 echo '<p>............</p>';    

$nrows = oci_fetch_all($result, $res);

echo "$nrows filas obtenidas<br>\n";
//var_dump($res);



oci_free_statement($result);
oci_close($conn);

        ?>

    </section>

    <footer>
        <p><a href="https://twitter.com/orlandoreynoso">@orlandoreynoso</a></p>
    </footer>
</body>
</html>
