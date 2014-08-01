<?php 

include('../libs/conexion-clase.php');


$sql_productos = "SELECT MB.COD_MOVIMIENTO,E.NOM_EMPRESA,P.NOM_PROYECTO,B.DESC_BODEGA,MB.FEC_MOVIMIENTO,MB.ESTADO_MOVIMIENTO,MB.TIPO_OPERACION,MB.USUARIO
FROM MOVIMIENTO_BODEGA MB,EMPRESA E,PROYECTO P,BODEGA B WHERE MB.COD_BODEGA = B.COD_BODEGA AND MB.COD_PROYECTO = P.COD_PROYECTO AND MB.COD_EMPRESA = E.COD_EMPRESA ORDER BY MB.COD_MOVIMIENTO";

$stid = oci_parse($conn, $sql_productos);
oci_execute($stid);

?>
<script type="text/javascript" language="javascript" src="js/refrescar_reportes.js"></script>


            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista">
                <thead>
                    <tr>
                        <th>COD MOVIMIENTO</th><!--Estado-->
                        <th>FARMACIA</th>
                        <th>SUCURSAL</th>
                        <th>BODEGA</th>
                        <th>FECHA MOV.</th>
                        <th>ESTADO</th>
                        <th>TIPO OPERACION</th>                        
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
                              <td>'.$row->NOM_EMPRESA.'</td>
                              <td>'.$row->NOM_PROYECTO.'</td>
                              <td>'.$row->DESC_BODEGA.'</td>
                              <td>'.$row->ESTADO_MOVIMIENTO.'</td>
                              <td>'.$row->TIPO_OPERACION.'</td>
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