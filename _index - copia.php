<?php


session_start();
$valido=true;
      if(isset($_POST['entrar'])){
         /*Entra solo si se presiona el boton entrar*/
         //datos de acceso

		 include('librerias/conexion-clase.php');
		 $conn = new Conexion();
  

    $nombre=$_POST['usuario'];
    $contrasena=$_POST['contra'];
  echo   $consulta="select COD_PERSONA,NOMBRES from persona WHERE COD_PERSONA = $contrasena AND NOMBRES LIKE2('$nombre')";


$stid = oci_parse($con, $consulta);
oci_execute($stid);

echo "<table border='1'>\n";
while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    echo "<tr>\n";
    foreach ($row as $item) {
        echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "") . "</td>\n";
    }
    echo "</tr>\n";
}
echo "</table>\n";



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

        <footer>

		<p>&copy; Copyright 2014 <a href="#">GTsistemas</a>. Todos los derechos reservados.</p>
        </footer>



	</section>

	<footer>
		<p><a href="https://twitter.com/orlandoreynoso">@orlandoreynoso</a></p>
	</footer>
</body>
</html>
		