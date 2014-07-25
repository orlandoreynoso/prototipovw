<?php
session_start();
//manejamos en sesion el nombre del usuario que se ha logeado
if (!isset($_SESSION["usuario"])){
    header("location:index.php?nologin=false");

    echo 'llego aqui en main';
}
$_SESSION["usuario"];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Prototipo VW</title>
<!-- =========== MANEJO DE LA PAGINACION  ===================================== -->
<script type="text/javascript" src="js/jquery.js"></script>
        <!--    FORMATO DE TABLAS    -->
        <link type="text/css" href="css/paginacion-demo_table.css" rel="stylesheet" />
        <!--    FORMATO DE TABLAS    -->    
        <!--    ESTILO GENERAL   -->
        <link type="text/css" href="css/paginacion-style.css" rel="stylesheet" />
        <!--    ESTILO GENERAL    -->

<!-- =========== MANEJO DE PLANTILLAS  PARA LOS FORMULARIOS ===================================== -->
    <!-- incluyo la libreria jQuery -->
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <!-- incluyo el archivo que tiene mis funciones javascript -->
<script type="text/javascript" src="js/funcionesforms.js"></script>
	<!-- incluyo el framework css , blueprint. -->
<link rel="stylesheet" type="text/css" href="css/screen-plantilla.css" />
<link rel="stylesheet" type="text/css" href="css/style-plantilla.css" />
    <!-- incluyo mis estilos css -->

<link rel="stylesheet" type="text/css" href="css/makepeace.css" />

<!-- incluyo el archivo que tiene mis funciones javascript -->
<!-- ================= FUNCION PARA MANEJAR  FUNCIONES DENTRO DEL ENTORNO =================  -->
<script type="text/javascript" src="js/funcionesjq.js"></script>
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	
	<header>

	<div class="page-full-width cf">

		<ul id="nav" class="fl">
			<div class="conap"><img src="img/conap.jpg" /></div>
			<li class="v-sep"><a href="#" class="round button dark menu-user image-left">Inicio sesion: <strong><?php echo $_SESSION["usuario"]; ?></strong></a></li>
			<li><a href="#" class="round button dark menu-logoff image-left">Log out</a></li>
		</ul> <!-- end nav -->

		<div class="kff"><img src="img/kfw.jpg" /></div>

	</div> <!-- end full-width -->

	</header>
	<nav></nav>
	<section>



<?php
// Create connection to Oracle
$conn = oci_connect("PROYFINAL", "PROYFINAL", "localhost/XE");
if (!$conn) {
   $m = oci_error();
   echo $m['message'], "\n";
   exit;
}
else {
   echo "Conexión con éxito a Oracle!";
}
// Close the Oracle connection
oci_close($conn);
?>

	</section>

	<footer>
		<p><a href="https://twitter.com/orlandoreynoso">@orlandoreynoso</a></p>
	</footer>
</body>
</html>
		