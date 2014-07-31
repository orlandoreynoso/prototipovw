<?php 

include('../libs/conexion-clase.php');


$sql_productos = "SELECT B.COD_EMPRESA,B.COD_PROYECTO,B.COD_BODEGA,B.DESC_BODEGA,B.UBICACION,B.ESTADO_BODEGA,
E.COD_EMPRESA,E.NOM_EMPRESA,P.COD_PROYECTO,P.NOM_PROYECTO
FROM BODEGA B,EMPRESA E, PROYECTO P
WHERE 
B.COD_EMPRESA = E.COD_EMPRESA AND
B.COD_PROYECTO = P.COD_PROYECTO";

$stid = oci_parse($conn, $sql_productos);
oci_execute($stid);

?>
<script type="text/javascript" language="javascript" src="js/refrescar_reportes.js"></script>


            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista">
                <thead>
                    <tr>
                        <th>COD_BODEGA</th><!--Estado-->
                        <th>NOMBRE</th>
                        <th>UBICACION</th>
                        <th>NOM. FARMACIA</th>
                        <th>SUCURSAL</th>                        
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
                              <td>'.$row->COD_BODEGA.'</td>
                              <td>'.$row->DESC_BODEGA.'</td>
                              <td>'.$row->UBICACION.'</td>
                              <td>'.$row->NOM_EMPRESA.'</td>
                              <td>'.$row->NOM_PROYECTO.'</td>                              
                              <td>'.$row->ESTADO_BODEGA.'</td>
                        </tr>';
                      }
                    ?>
                <tbody>
            </table>

<?php 
oci_free_statement($stid);
oci_close($conn);

?>