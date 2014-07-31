<?php 

include('../libs/conexion-clase.php');


$sql_productos = "SELECT COD_EMPRESA,COD_PROYECTO,COD_BODEGA,CANTIDAD_MINIMA,CANTIDAD_MAXIMA,CANTIDAD_ACTUAL,
FECHA_MOVIMIENTO,PRODUCTO.ESTADO_PRODUCTO AS ESTADO,ID_PRODUCTO,DES_PRODUCTO,PRECIO_PRODUCTO
FROM 
DETALLE_BODEGA,PRODUCTO
WHERE DETALLE_BODEGA.COD_PRODUCTO = PRODUCTO.COD_PRODUCTO";

$stid = oci_parse($conn, $sql_productos);
oci_execute($stid);

?>
<script type="text/javascript" language="javascript" src="js/refrescar_reportes.js"></script>


            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista">
                <thead>
                    <tr>
                        <th>COD_EMPRESA</th><!--Estado-->
                        <th>COD_PROYECTO</th>
                        <th>COD_BODEGA</th>
                        <th>CANT. MININA</th>
                        <th>CANT. MAXINA</th>
                        <th>CANTIDA ACTUAL</th>
                        <th>FECHA MOV.</th>
                        <th>ESTADO</th>
                        <th>COD PRODUCTO</th>
                        <th>DESCRIPCION</th>
                        <th>PRECIO</th>
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
                              <td>'.$row->COD_EMPRESA.'</td>
                              <td>'.$row->COD_PROYECTO.'</td>
                              <td>'.$row->COD_BODEGA.'</td>
                              <td>'.$row->CANTIDAD_MINIMA.'</td>
                              <td>'.$row->CANTIDAD_MAXIMA.'</td>
                              <td>'.$row->CANTIDAD_ACTUAL.'</td>
                              <td>'.$row->FECHA_MOVIMIENTO.'</td>
                              <td>'.$row->ESTADO.'</td>
                              <td>'.$row->ID_PRODUCTO.'</td>
                              <td>'.$row->DES_PRODUCTO.'</td>
                              <td>'.$row->PRECIO_PRODUCTO.'</td>
                        </tr>';
                      }
                    ?>
                <tbody>
            </table>

<?php 
oci_free_statement($stid);
oci_close($conn);


?>