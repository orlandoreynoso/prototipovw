<?php
session_start();

if (!isset($_SESSION["usuario"])){
    header("location:index.php?nologin=false");
}
$_SESSION["usuario"];

?>

<!doctype html>
<html lang="es">
<head>

	<!-- Optimize for mobile devices -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta charset="UTF-8">
	<title>Prototipo VW</title>

<!-- =========== MANEJO DE LA PAGINACION  ===================================== -->
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <!--    FORMATO DE TABLAS    -->
        <link type="text/css" href="css/paginacion-demo_table.css" rel="stylesheet" />
        <!--    FORMATO DE TABLAS    -->    
        <!--    ESTILO GENERAL   -->
        <link type="text/css" href="css/paginacion-style.css" rel="stylesheet" />
        <!--    ESTILO GENERAL    -->

<!-- =========== MANEJO DE PLANTILLAS  PARA LOS FORMULARIOS ===================================== -->

<link rel="stylesheet" type="text/css" href="css/menu.css" />

<!-- incluyo el archivo que tiene mis funciones javascript -->
<!-- ================= FUNCION PARA MANEJAR  FUNCIONES DENTRO DEL ENTORNO =================  -->
<script type="text/javascript" src="js/funcionesjq.js"></script>
<link rel="stylesheet" type="text/css" href="css/main.css">
          
</head>
<body>


<header>

		<div class="logo_medicine"><img src="img/medical-pills-pot-icon.png" /></div>

	<div class="usuario">
          <a href="#" class="btn_usuario botones icono-usuario">Inicio sesion: <strong><?php echo $_SESSION["usuario"]; ?></strong></a>
          <a href="logout.php" class="btn_salir botones icono-salir">Log out</a>    
    </div>

</header>