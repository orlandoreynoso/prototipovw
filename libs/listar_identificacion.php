<?php 

include('../libs/conexion-clase.php');


$sql_productos = "SELECT COD_ID,DES_ID,FEC_INGRESO,ESTADO_ID FROM TIPO_ID";

$stid = oci_parse($conn, $sql_productos);
oci_execute($stid);

?>
<script type="text/javascript" language="javascript" src="js/refrescar_reportes.js"></script>


            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista">
                <thead>
                    <tr>
                        <th>COD IDENTIFICACION</th>
                        <th>DESCRIPCION</th>
                        <th>FECHA INGRESO</th>
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
                              <td>'.$row->COD_ID.'</td>
                              <td>'.$row->DES_ID.'</td>
                              <td>'.$row->FEC_INGRESO.'</td>
                              <td>'.$row->ESTADO_ID.'</td>
                        </tr>';
                      }
                    ?>
                <tbody>
            </table>

<?php 
oci_free_statement($stid);
oci_close($conn);

?>