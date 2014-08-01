<?php 

include('../libs/conexion-clase.php');


$sql_productos = "SELECT COD_PUESTO,DES_PUESTO,ESTADO FROM PUESTO";

$stid = oci_parse($conn, $sql_productos);
oci_execute($stid);

?>
<script type="text/javascript" language="javascript" src="js/refrescar_reportes.js"></script>


            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista">
                <thead>
                    <tr>
                        <th>COD PUESTO</th>
                        <th>DESCRIPCION</th>
                        <th>ESTADO</th>
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
                              <td>'.$row->COD_PUESTO.'</td>
                              <td>'.$row->DES_PUESTO.'</td>
                              <td>'.$row->ESTADO.'</td>
                              </tr>';
                      }
                    ?>
                <tbody>
            </table>

<?php 
oci_free_statement($stid);
oci_close($conn);

?>