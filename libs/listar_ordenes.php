<?php 

include('../libs/conexion-clase.php');

$sql_productos = "SELECT 
OC.COD_EMPRESA,OC.COD_PROYECTO,OC.COD_BODEGA,OC.COD_ORDEN,OC.COD_MOVIMIENTO_BOD,OC.IND_APLICADA,
OC.AFECTA_BODEGA,OC.ESTADO,OC.USUARIO,OC.COD_PROVEEDOR,
E.NOM_EMPRESA,
P.NOM_PROYECTO,
PRO.DESCRIPCION,
B.DESC_BODEGA
FROM ORDEN_COMPRA OC,EMPRESA E,PROYECTO P, PROVEEDOR PRO,BODEGA B
WHERE 
P.COD_PROYECTO = OC.COD_PROYECTO AND
B.COD_BODEGA = OC.COD_BODEGA AND
E.COD_EMPRESA = OC.COD_EMPRESA";


$stid = oci_parse($conn, $sql_productos);
oci_execute($stid);

?>
<script type="text/javascript" language="javascript" src="js/refrescar_reportes.js"></script>


            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista">
                <thead>
                    <tr>
                        <th>COD ORDEN</th>
                        <th>IND. APLI.</th>
                        <th>AFECTA BOD.</th>                                                
                        <th>ESTADO</th>
                        <th>SUCURSAL</th>                                                                        
                        <th>NOMBRE PROVEEDOR</th>                        
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
                              <td>'.$row->COD_ORDEN.'</td>
                              <td>'.$row->IND_APLICADA.'</td>
                              <td>'.$row->AFECTA_BODEGA.'</td>
                              <td>'.$row->ESTADO.'</td>
                              <td>'.$row->NOM_PROYECTO.'</td>
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