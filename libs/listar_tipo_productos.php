<?php 

include('../libs/conexion-clase.php');
include('../libs/fecha01.php');
include('../libs/fecha02.php');


$sql_productos = "SELECT COD_TIPO_PRODUCTO,DES_TIPO_PRODUCTO, ESTADO_TIP_PROD FROM TIPO_PRODUCTO WHERE ESTADO_TIP_PROD = 'A'";


$stid = oci_parse($conn, $sql_productos);
oci_execute($stid);


?>
<script type="text/javascript" language="javascript" src="js/refrescar_reportes.js"></script>


            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista">
                <thead>
                    <tr>
                        <th>COD TIPO</th>
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
                              <td>'.$row->COD_TIPO_PRODUCTO.'</td>
                              <td>'.$row->DES_TIPO_PRODUCTO.'</td>
                              <td>'.$row->ESTADO_TIP_PROD.'</td>
                        </tr>';
                      }
                    ?>
                <tbody>
            </table>

<?php 
oci_free_statement($stid);
oci_close($conn);

?>