<?php 

include('../libs/conexion-clase.php');
include('../libs/fecha01.php');
include('../libs/fecha02.php');


$sql_productos = "SELECT COD_PERSONA,DESCRIPCION,FEC_INGRESO,ESTADO FROM CLIENTE";


$stid = oci_parse($conn, $sql_productos);
oci_execute($stid);



?>
<script type="text/javascript" language="javascript" src="js/refrescar_reportes.js"></script>


            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista">
                <thead>
                    <tr>
                        <th>COD CLIENTE</th>
                        <th>NOMBRE</th>
                        <th>ESTADO</th>                                                
                        <th>FECHA INGRESO</th>                        
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
                              <td>'.$row->DESCRIPCION.'</td>
                              <td>'.$row->ESTADO.'</td>
                              <td>'.$row->FEC_INGRESO.'</td>                                                            
                        </tr>';
                      }
                    ?>
                <tbody>
            </table>

<?php 
oci_free_statement($stid);
oci_close($conn);

?>