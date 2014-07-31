
<?php

		$conn = oci_pconnect('PRE','PRE', 'localhost/XE');

			if (!$conn) {
			   $m = oci_error();
			   echo $m['message'], "\n";
			   exit;
			}
			else {
			   echo "<p class='exito'>Conexión con éxito a Oracle!</p>";
			} 


?>