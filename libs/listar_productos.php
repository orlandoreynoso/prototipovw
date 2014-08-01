<?php 

include('../libs/conexion-clase.php');
include('../libs/fecha01.php');
include('../libs/fecha02.php');


$sql_productos = "SELECT 
P.ID_PRODUCTO,P.DES_PRODUCTO,P.COD_TIPO_PRODUCTO,TP.DES_TIPO_PRODUCTO,
P.ES_SERVICIO,P.PRECIO_PRODUCTO,P.ESTADO_PRODUCTO,
P.FECHA_CREACION,M.COD_MARCA,M.DESCRIPCION
FROM PRODUCTO P, MARCA_PRODUCTO M, TIPO_PRODUCTO TP
WHERE
P.COD_MARCA = M.COD_MARCA AND 
P.COD_TIPO_PRODUCTO  = TP.COD_TIPO_PRODUCTO";


$stid = oci_parse($conn, $sql_productos);
oci_execute($stid);



?>
<script type="text/javascript" language="javascript" src="js/refrescar_reportes.js"></script>


            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista">
                <thead>
                    <tr>
                        <th>COD PRODUCTO</th>
                        <th>DESCRIPCION</th>
                        <th>COD TIPO PROD.</th>
                        <th>DESCRIPCION.</th>
                        <th>ESTADO SERVICIO</th>
                        <th>PRECIO</th>
                        <th>ESTADO PRODUCTO</th>
                        <th>FECHA CREACION</th>
                        <th>COD. MARCA</th>
                        <th>DESCRIPCION</th>
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
                              <td>'.$row->ID_PRODUCTO.'</td>
                              <td>'.$row->DES_PRODUCTO.'</td>
                              <td>'.$row->COD_TIPO_PRODUCTO.'</td>
                              <td>'.$row->DES_TIPO_PRODUCTO.'</td>
                              <td>'.$row->ES_SERVICIO.'</td>
                              <td>'.$row->PRECIO_PRODUCTO.'</td>
                              <td>'.$row->ESTADO_PRODUCTO.'</td>
                              <td>'.$row->FECHA_CREACION.'</td>
                              <td>'.$row->COD_MARCA.'</td>
                              <td>'.$row->DESCRIPCION.'</td>
                        </tr>';
                      }
                    ?>
                <tbody>
            </table>

<?php 
oci_free_statement($stid);
oci_close($conn);

?>