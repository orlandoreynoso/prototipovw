<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Prototipo VW</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
	<header>
		<h1>PROTOTIPO</h1>
		<p>VW consorcio</p>
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
		