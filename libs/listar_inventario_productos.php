<?php 

include('../libs/conexion-clase.php');


$sql_productos = "SELECT E.NOM_EMPRESA,PRO.NOM_PROYECTO,B.DESC_BODEGA,DB.FECHA_MOVIMIENTO,
P.ESTADO_PRODUCTO,P.ID_PRODUCTO,P.DES_PRODUCTO,DB.CANTIDAD_ACTUAL,P.PRECIO_PRODUCTO
FROM DETALLE_BODEGA DB,PRODUCTO P,BODEGA B,PROYECTO PRO,EMPRESA E
WHERE DB.COD_PRODUCTO = P.COD_PRODUCTO AND
B.COD_BODEGA = DB.COD_BODEGA AND
PRO.COD_PROYECTO  = DB.COD_PROYECTO AND
E.COD_EMPRESA = DB.COD_EMPRESA";

$stid = oci_parse($conn, $sql_productos);
oci_execute($stid);

?>
<script type="text/javascript" language="javascript" src="js/refrescar_reportes.js"></script>


            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista">
                <thead>
                    <tr>
                        <th>FARMACIA</th><!--Estado-->
                        <th>SUCURSAL</th>
                        <th>BODEGA</th>
                        <th>FECHA MOV.</th>
                        <th>ESTADO</th>
                        <th>COD PRODUCTO</th>
                        <th>DESCRIPCION</th>                        
                        <th>CANTIDA ACTUAL</th>
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
                              <td>'.$row->NOM_EMPRESA.'</td>
                              <td>'.$row->NOM_PROYECTO.'</td>
                              <td>'.$row->DESC_BODEGA.'</td>
                              <td>'.$row->FECHA_MOVIMIENTO.'</td>
                              <td>'.$row->ESTADO_PRODUCTO.'</td>
                              <td>'.$row->ID_PRODUCTO.'</td>
                              <td>'.$row->DES_PRODUCTO.'</td>
                              <td>'.$row->CANTIDAD_ACTUAL.'</td>
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