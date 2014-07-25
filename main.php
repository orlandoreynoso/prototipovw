<?php
session_start();
//manejamos en sesion el nombre del usuario que se ha logeado
if (!isset($_SESSION["usuario"])){
    header("location:index.php?nologin=false");
}
$_SESSION["usuario"];

?>

<!doctype html>
<html lang="en">
<head>

	<!-- Optimize for mobile devices -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta charset="UTF-8">
	<title>Marfin 2.14</title>

<!-- =========== MANEJO DE LA PAGINACION  ===================================== -->
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <!--    FORMATO DE TABLAS    -->
        <link type="text/css" href="css/paginacion-demo_table.css" rel="stylesheet" />
        <!--    FORMATO DE TABLAS    -->    
        <!--    ESTILO GENERAL   -->
        <link type="text/css" href="css/paginacion-style.css" rel="stylesheet" />
        <!--    ESTILO GENERAL    -->

<!-- =========== MANEJO DE PLANTILLAS  PARA LOS FORMULARIOS ===================================== -->
    <!-- incluyo el archivo que tiene mis funciones javascript -->
<!-- script type="text/javascript" src="js/funcionesforms.js"></script -->
	<!-- incluyo el framework css , blueprint. -->
<link rel="stylesheet" type="text/css" href="css/screen-plantilla.css" />
<link rel="stylesheet" type="text/css" href="css/style-plantilla.css" />
    <!-- incluyo mis estilos css -->

<link rel="stylesheet" type="text/css" href="css/mc.css" />

<!-- incluyo el archivo que tiene mis funciones javascript -->
<!-- ================= FUNCION PARA MANEJAR  FUNCIONES DENTRO DEL ENTORNO =================  -->
<script type="text/javascript" src="js/funcionesjq.js"></script>
<link rel="stylesheet" type="text/css" href="css/main.css">

<script>
$(function() {
  if ($.browser.msie && $.browser.version.substr(0,1)<7)
  {
    $('li').has('ul').mouseover(function(){
        $(this).children('ul').css('visibility','visible');
        }).mouseout(function(){
        $(this).children('ul').css('visibility','hidden');
        })
  }
}); 

/* Mobile */
$('#menu-wrap').prepend('<div id="menu-trigger">Menu</div>');       
$("#menu-trigger").on("click", function(){
    $("#menu").slideToggle();
});

// iPad
var isiPad = navigator.userAgent.match(/iPad/i) != null;
if (isiPad) $('#menu ul').addClass('no-transition');

</script>           
</head>
<body>


<header id="top-bar">

	<div class="page-full-width cf">

		<ul id="nav" class="fl">
			<div class="conap"><img src="img/medical-pills-pot-icon.png" /></div>
			<li class="v-sep"><a href="#" class="round button dark menu-user">Inicio sesion: <strong><?php echo $_SESSION["usuario"]; ?></strong></a></li>
			<li><a href="logout.php" class="round button dark menu-logoff image-left">Log out</a></li>
		</ul> <!-- end nav -->

		<div class="kff"><img src="img/kfw.jpg" /></div>

	</div> <!-- end full-width -->


<!-- ================================================================== -->

		<div class="container">	
	<ul id="menu">
    <li><a href="#" class="inicio">Inicio</a></li>
    <li><a href="#" class="config">Configuracion</a>
        <ul>
            <li>
              <a href="#">Sistema</a>
              <ul>
                   <li><a href="#">Dimensional</a></li>
              </ul>
            </li>
            <li>
              <a href="#">Areas Protegidas</a>
              <ul>
                   <li><a href="#" onClick="mostrar_contenido(5); return false;">Pais</a></li>
                   <li><a href="#" onClick="mostrar_contenido(6); return false;">Region</a></li>
                   <li><a href="#" onClick="mostrar_contenido(7); return false;">Tipo Categoria</a></li>
                   <li><a href="#" onClick="mostrar_contenido(8); return false;">Tipo Area Protegida</a></li>
                   <li><a href="#">Tamaño</a></li>
                   <li><a href="#">Fase</a></li>
                   <li><a href="#">Extension</a></li>
                   <li><a href="#">Ubicacion</a></li>
                   <li><a href="#">Area Protegida</a></li>
              </ul>
            </li>    
            <li>
              <a href="#">Catalogo</a>
              <ul>
                   <li><a href="#">Vida Util</a></li>
                   <li><a href="#">Prorrateo Vehiculos</a></li>
                   <li><a href="#">Grupo</a></li>
                   <li><a href="#">Subgrupo</a></li>
                   <li><a href="#">Renglon</a></li>
                   <li><a href="#">Programa</a></li>
                   <li><a href="#">Renglon Especial</a></li>
              </ul>
            </li>   
            <li>
              <a href="#">Administracion</a>
              <ul>
                   <li><a href="#">Usuarios y Objetos</a></li>
                   <li><a href="#">Datos</a></li>
                   <li><a href="#">Formularios</a></li>
              </ul>
            </li>                                  
      </ul>
    </li>    
    <li><a href="#">Ingreso de Datos</a>
      <ul>
            <li>
              <a href="#">Gastos de Operacion</a>
              <ul>
                   <li><a href="#">Servicios Basicos</a></li>
                   <li><a href="#">Transportes</a></li>
                   <li><a href="#">Mantenimientos</a></li>
              </ul>
            </li>  
            <li>
              <a href="#">Gastos de Salarios</a>
              <ul>
                   <li><a href="#">Administrativos</a></li>
                   <li><a href="#">Operativos</a></li>
              </ul>
            </li>   
            <li>
              <a href="#">Capacitaciones</a>
              <ul>
                   <li><a href="#">Nacionales</a></li>
                   <li><a href="#">Internacionales</a></li>
              </ul>
            </li>     
            <li>
              <a href="#">Inversiones</a>
              <ul>
                   <li><a href="#">Infraestructura</a></li>
                   <li><a href="#">Equipo</a></li>
                   <li><a href="#">Proyectos</a></li>
              </ul>
            </li>   
            <li>
              <a href="#">Vehiculos</a>
              <ul>
                   <li><a href="#">Terrestres</a></li>
                   <li><a href="#">Marinos</a></li>
              </ul>
            </li>  
            <li>
              <a href="#">Ingresos Recurrentes</a>
              <ul>
                   <li><a href="#">Proyectos</a></li>
                   <li><a href="#">Gobierno</a></li>
                    <li><a href="#">Mercado</a></li>
              </ul>
            </li>            
            <li>
              <a href="#">Ingresos No Recurrentes</a>
              <ul>
                   <li><a href="#">Proyectos</a></li>
                   <li><a href="#">Mercado</a></li>
              </ul>
            </li>                                             
      </ul>
    </li>
    <li><a href="#">Procesos y Consultas</a>
      <ul>
            <li>
              <a href="#">Proyecciones</a>
              <ul>
                   <li><a href="#">Egresos e  Ingresos</a></li>
              </ul>
            </li>    
            <li>
              <a href="#">Consultas</a>
              <ul>
                   <li><a href="#">Filtro Brecha</a></li>
              </ul>
            </li>                
      </ul>
    </li>
    <li><a href="#">Reportes</a>
      <ul>
            <li>
              <a href="#">Generales</a>
              <ul>
                   <li><a href="#">Trazabilidad</a></li>
              </ul>
            </li>       
      </ul>
    </li>
</ul>

</div><!-- /container -->

</header>

<!-- ================================================================== -->



<!-- ====================== MAIN ====================================== -->


<!-- ====== DERECHA  ============== -->
<div id="derecha">
	<div id="formulariogenerico" >
	
	</div>
<div style="clear:both;"></div>
</div>
<!-- ================================================================== -->
	<!-- FOOTER -->
    
<footer>
    <p>&copy; Copyright 2014&nbsp;&nbsp; <a href="#">AREA DE SISTEMAS</a>. &nbsp;&nbsp;Todos los derechos reservados.</p>
</footer>

<!-- ================================================================== -->

</body>
</html>