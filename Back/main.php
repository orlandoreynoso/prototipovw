
<?php

session_start(); 

$var2 =  $_SESSION['userid']; 
		echo $var2;
	 

	
	
	if(!empty($_SESSION['userid'])){ 
		/* La funcion empty() devuelve verdadero si el argumento posee un valor vacio, 
		al usar !empty() devuelve verdadero no solo si la variable fue declarada sino  
		ademas si contiene algun valor no nulo. 
		*/ 
		echo 'Te haz logueado como :'.$_SESSION['userid']; 
		echo 'Haz logrado el acceso a una pagina segura'; 
	}
	else{ 
		echo 'No estas logueado	'; 
		echo 'Esta pagina es restringida!'; 
		$var =  $_SESSION['userid']; 
		echo $var;
	} 
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

	<div class="page-full-width cf">

		<ul id="nav" class="fl">
			<div class="conap"><img src="img/conap.jpg" /></div>
			<li class="v-sep"><a href="#" class="round button dark menu-user image-left">Inicio sesion: <strong><?php echo $_SESSION["userid"]; ?></strong></a></li>
			<li><a href="#" class="round button dark menu-logoff image-left">Log out</a></li>
		</ul> <!-- end nav -->

		<div class="kff"><img src="img/kfw.jpg" /></div>

	</div> <!-- end full-width -->

	</header>
	<nav></nav>
	<section>
		<h1>Hola</h1>

	</section>

	<footer>
		<p><a href="https://twitter.com/orlandoreynoso">@orlandoreynoso</a></p>
	</footer>
</body>
</html>
		