<?php 

include('../libs/conexion-clase.php');


$sql_productos = "SELECT E.COD_PERSONA AS ,E.USUARIO,E.COD_PUESTO,E.SALARIO_BASE,E.BONIFICACION,P.COD_PUESTO,P.DES_PUESTO
FROM EMPLEADO E,PUESTO P
WHERE E.COD_PUESTO = P.COD_PUESTO";

$stid = oci_parse($conn, $sql_productos);
oci_execute($stid);

?>
<script type="text/javascript" language="javascript" src="js/refrescar_reportes.js"></script>


            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista">
                <thead>
                    <tr>
                        <th>COD_PERSONA</th><!--Estado-->
                        <th>USUARIO</th>
                        <th>SALARIO BASE</th>
                        <th>BONIFICACION</th>
                        <th>COD_PUESTO</th>                        
                        <th>PUESTO</th>
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
                              <td>'.$row->COD_PERSONA.'</td>
                              <td>'.$row->USUARIO.'</td>
                              <td>'.$row->SALARIO_BASE.'</td>
                              <td>'.$row->BONIFICACION.'</td>
                              <td>'.$row->COD_PUESTO.'</td>                              
                              <td>'.$row->DES_PUESTO.'</td>
                        </tr>';
                      }
                    ?>
                <tbody>
            </table>

<?php 
oci_free_statement($stid);
oci_close($conn);

?>