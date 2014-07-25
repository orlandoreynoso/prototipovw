 <?php

/*======================= SEGUNDA SESION =====================================  */ 

session_start();

$valido=true;

      if(isset($_POST['entrar'])){

         include('librerias/conexion-clase.php');

  
    $nombre=$_POST['usuario'];
    $contrasena=$_POST['contra'];

    echo   $consulta = "SELECT COD_PERSONA,NOMBRES FROM PERSONA WHERE COD_PERSONA = $contrasena AND NOMBRES LIKE2('$nombre')"; 



 $result = oci_parse($conn, $consulta);
         oci_execute($result);    


$filasn = oci_fetch_all($result,$results,0, -1, OCI_FETCHSTATEMENT_BY_ROW + OCI_ASSOC);
echo $filasn;

         if ($filasn<=0 || isset($_GET['nologin']) ){
             $valido = false;
             echo 'entro en el if';
         }
         else{


while (($row = oci_fetch_array($result, OCI_BOTH)) != false) {

    // Usar nombres de columna en mayúsculas para los índices del array asociativo
    echo $row[0] . " y " . $row['COD_PERSONA']   . " son lo mismo<br>\n";
    echo $row[1] . " y " . $row['NOMBRES'] . " son lo mismo<br>\n";

        $_SESSION['idusuario']= $row['COD_PERSONA'];
             $valido=true;
             //guardamos en sesion el nombre del usuario 
             $_SESSION["usuario"]=$nombre;
             header("location:main.php?login=true");
             
             echo 'entro en el ELSE';

}

oci_free_statement($result);
oci_close($conn);


        
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
    
    <header>
    </header>
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
