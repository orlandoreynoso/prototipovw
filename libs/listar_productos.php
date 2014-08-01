<?php 

include('../libs/conexion-clase.php');
include('../libs/fecha01.php');
include('../libs/fecha02.php');


$sql_productos = "SELECT 
MB.COD_MOVIMIENTO, MB.FEC_MOVIMIENTO,MB.TIPO_MOVIMIENTO,
MB.ESTADO_MOVIMIENTO,MB.TIPO_OPERACION,MB.USUARIO,
DMB.CANTIDAD,
P.ID_PRODUCTO,P.DES_PRODUCTO,P.PRECIO_PRODUCTO,
E.NOM_EMPRESA, PRO.NOM_PROYECTO
FROM MOVIMIENTO_BODEGA MB, DETALLE_MOVIMIENTO_BODEGA DMB, PRODUCTO P, EMPRESA E,PROYECTO PRO
WHERE 
DMB.COD_PRODUCTO = P.COD_PRODUCTO AND
MB.COD_MOVIMIENTO  = DMB.COD_MOVIMIENTO AND
MB.COD_PROYECTO = PRO.COD_PROYECTO";


$stid = oci_parse($conn, $sql_productos);
oci_execute($stid);



?>
<script type="text/javascript" language="javascript" src="js/refrescar_reportes.js"></script>


            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista">
                <thead>
                    <tr>
                        <th>COD MOV.</th>
                        <th>FECHA</th>
                        <th>TIPO MOV.</th>                                                
                        <th>ESTADO MOV.</th>
                        <th>TIPO OPERACION.</th>                                                
                        <th>CANTIDAD</th>              
                        <th>CODIGO PRODUCTO</th>
                        <th>DES. PROD.</th>
                        <th>PRECIO</th>                                                
                        <th>FARMACIA</th>
                        <th>SUCURSAL</th>                                                
                        <th>USUARIO</th>                        
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
                              <td>'.$row->COD_MOVIMIENTO.'</td>
                              <td>'.$row->FEC_MOVIMIENTO.'</td>
                              <td>'.$row->TIPO_MOVIMIENTO.'</td>
                              <td>'.$row->ESTADO_MOVIMIENTO.'</td>
                              <td>'.$row->TIPO_OPERACION.'</td>                              
                              <td>'.$row->CANTIDAD.'</td>
                              <td>'.$row->ID_PRODUCTO.'</td>
                              <td>'.$row->DES_PRODUCTO.'</td>
                              <td>'.$row->PRECIO_PRODUCTO.'</td>
                              <td>'.$row->NOM_EMPRESA.'</td>
                              <td>'.$row->NOM_PROYECTO.'</td>                              
                              <td>'.$row->USUARIO.'</td>                              
                        </tr>';
                      }
                    ?>
                <tbody>
            </table>

<?php 
oci_free_statement($stid);
oci_close($conn);

?>