<?php
session_start();
$valido=true;
      if(isset($_POST['entrar'])){
         /*Entra solo si se presiona el boton entrar*/
         //datos de acceso
		 include('librerias/conexion-clase.php');
		 $coneccion = new Conexion();
  
    $nombre=$_POST['usuario'];
    $contrasena=$_POST['contra'];
    $consulta="select administrador,password from administradores where administrador='$nombre' AND password='$contrasena'";
         $result=mysql_query($consulta,$coneccion->getConexion()) or die (mysql_error());
         $filasn= mysql_num_rows($result);
         if ($filasn<=0 || isset($_GET['nologin']) ){
             $valido=false;
         }else{
        $rowsresult=mysql_fetch_array($result);
        $_SESSION['idusuario']= $rowsresult['id'];
             $valido=true;
             //guardamos en sesion el nombre del usuario 
             $_SESSION["usuario"]=$nombre;
             header("location:main.php?login=true");
         }
      }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Marfin2014</title>
<!--  ======= PARA EFECTOS DEL LOGIN =========================== -->
<link rel="stylesheet" href="css/loginmarfin.css" />     
<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>

<!-- ====================================================== -->
        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
<!-- ================================================================== -->	

    <body>

		<div id="contenido_form">
		<div>
        <form action="index.php" method="post">
            <input id="usuario"  name="usuario" type="text" placeholder="usuario"><br>
            <input id="contra" name="contra" type="password" placeholder="password"><br>
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
    </body>
</html>

