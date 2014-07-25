    <?php

session_start();


$valido = true;

if(isset($_POST['entrar'])){
         /*Entra solo si se presiona el boton entrar*/
         //datos de acceso

     include('librerias/conexion-clase.php');
     $coneccion = new Conexion();

echo     $nombre = $_POST['usuario'];
echo     $contrasena = $_POST['contra'];

 echo   $consulta="SELECT COD_PERSONA,NOMBRES FROM PERSONA WHERE COD_PERSONA = $contrasena AND NOMBRES LIKE2('$nombre')";

echo 'Aqui el sql <br>';
echo    $result = oci_parse($coneccion->getConexion(), $consulta);
echo 'aqui viene el execute <br>';      
      echo  oci_execute($result);
echo 'otro ejecute<br>';
echo oci_execute($result, OCI_DEFAULT);
echo 'otro ejecute rows<br>';
echo $row2 = oci_num_rows($result) . " rows deleted.<br />\n";
echo 'otro ejecute commit <br>';
echo oci_commit($coneccion->getConexion());
echo 'otro ejecute freee<br>';
echo oci_free_statement($result);
echo 'otro ejecute<br>';



//$row = oci_fetch_array($result, OCI_ASSOC+OCI_RETURN_NULLS);


//      echo    $filasn =  oci_num_rows($result);

echo 'aqui viene las condicionales<br>';

         if ($row2 == 0 ){

                 $valido=false;

                 echo 'Entro en el IF';

 echo   $consulta="SELECT COD_PERSONA,NOMBRES FROM PERSONA WHERE COD_PERSONA = $contrasena AND NOMBRES LIKE2('$nombre')";


echo 'Aqui el sql <br>';
echo    $result = oci_parse($coneccion->getConexion(), $consulta);
oci_execute($result);
echo 'Aqui el  $dato <br>';
echo '- - - - - ';
$row = oci_fetch_array($result, OCI_ASSOC+OCI_RETURN_NULLS);
echo $row;
echo '- - - - - ';
echo 'Aqui el  $dato finalizo <br>';
echo "<table border='1'>\n";
while ($row = oci_fetch_array($result, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";



            echo '___________________________________';
         }

         else{

            $rowsresult = oci_fetch_array($result, OCI_NUM);

            $_SESSION['idusuario']= $rowsresult['COD_PERSONA'];
            $valido = true;
            //guardamos en sesion el nombre del usuario 
            //$_SESSION["usuario"]=$nombre;
            $_SESSION['idusuario']= $rowsresult['NOMBRES'];
            header("location:main.php?login=true");

            echo 'ENTRO EN EL ELSE';
         }

       }      



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Prototipo VW</title>
	<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>	
	<link rel="stylesheet" href="css/login.css" />     

</head>
<body>
	
	<header></header>
	<nav></nav>

<section>

    <div id="contenido_form">
    <div>
        <form action="index.php" method="post">
            <input id="usuario"  name="usuario" type="text" placeholder="usuario" class="icon-usuario" ><br>
            <input id="contra" name="contra" type="password" placeholder="password" class="icon-clave"><br>
            <input name="entrar" type="submit" value="ENTRAR">
            <?php if ($valido==false) {
                echo '<p>Datos incorrectos <br/><a href="index.php">Intente de nuevo</a></p>';
            }?>
        </form>

        <div style="clear:both;"></div>        
    </div>
        
        <div style="clear:both;"></div>        
    </div>    


    
</section>

	<footer>
		<p><a href="https://twitter.com/orlandoreynoso">@orlandoreynoso</a></p>
	</footer>
</body>
</html>
		