<?php 

include('../libs/conexion-clase.php');

$empresas = "SELECT * FROM EMPRESA";

$stid = oci_parse($conn, $empresas);
oci_execute($stid);

?>

<script type="text/javascript" language="javascript" src="js/lista_empresas.js"></script>



            <table cellpadding="0" cellspacing="0" border="0" class="display" id="tabla_lista">
                <thead>
                    <tr>
                        <th>COD_EMPRESA</th><!--Estado-->
                        <th>NOM_EMPRESA</th>
                        <th>DIRECCION</th>
                        <th>IDENTIFICACION_LEGAL</th>
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
                          // Use nombres de atributo en mayúsculas para cada columna estándar de Oracle

                        echo '<tr>
                              <td>'.$row->COD_EMPRESA.'</td>
                              <td>'.$row->NOM_EMPRESA.'</td>
                              <td>'.$row->DIRECCION.'</td>
                              <td>'.$row->IDENTIFICACION_LEGAL.'</td>
                              <td>'.$row->ESTADO.'</td>
                        </tr>';    
                      }
                    ?>
                <tbody>
            </table>

<?php 
oci_free_statement($stid);
oci_close($conn);


echo '-------------------------------------------------------------------';
?>