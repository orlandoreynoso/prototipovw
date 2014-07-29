<?php 

include('../libs/conexion-clase.php');


//$empresas = "SELECT * FROM PROYECTO";

$sql_productos = "SELECT * FROM PERSONA";

$stid = oci_parse($conn, $sql_productos);
oci_execute($stid);

?>
<script type="text/javascript" language="javascript" src="js/lista_personas.js"></script>


            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista">
                <thead>
                    <tr>
                        <th>COD_PERSONA</th><!--Estado-->
                        <th>NOMBRES</th>
                        <th>APELLIDOS</th>
                        <th>FEC_INGRESO</th>
                        <th>ESTADO</th>
                        <th>DIRECCION</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th></th>
                        <th></th>
                    </tr>
                </tfoot>
                  <tbody>
                    <?php

                      while (($row = oci_fetch_object($stid)) != false) {
                        echo '<tr>
                              <td>'.$row->COD_PERSONA.'</td>
                              <td>'.$row->NOMBRES.'</td>
                              <td>'.$row->APELLIDOS.'</td>
                              <td>'.$row->FEC_INGRESO.'</td>
                              <td>'.$row->ESTADO.'</td>
                              <td>'.$row->DIRECCION.'</td>
                        </tr>';
                      }
                    ?>
                <tbody>
            </table>

<?php 
oci_free_statement($stid);
oci_close($conn);

?>