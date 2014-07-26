CREATE OR REPLACE PROCEDURE PRE.prc_retira_producto_bodega (
   p_cod_empresa    IN       NUMBER,
   p_cod_proyecto   IN       NUMBER,
   p_cod_bodega     IN       NUMBER,
   p_cod_producto   IN       VARCHAR2,
   p_cod_mov_bod    IN       NUMBER,
   p_cantidad       IN       NUMBER,
   p_cod_msg        OUT      VARCHAR2,
   p_des_msg        OUT      VARCHAR2
)
IS
   v_existencia   NUMBER := 0;
BEGIN
   p_cod_msg := '0';
   p_des_msg := 'Proceso Exitoso';

   IF p_cod_mov_bod IS NOT NULL
   THEN
      BEGIN
         INSERT INTO detalle_movimiento_bodega
              VALUES ( p_cod_mov_bod,
                      p_cod_producto, p_cantidad, NULL);
      EXCEPTION
         WHEN OTHERS
         THEN
            p_cod_msg := '-53';
            p_des_msg := 'No se pudo agregar el detalle del movimiento';
      END;
   END IF;

   IF p_cod_msg = '0'
   THEN
      BEGIN
         BEGIN
            SELECT cantidad_actual - p_cantidad
              INTO v_existencia
              FROM detalle_bodega
             WHERE cod_bodega = p_cod_bodega 
               AND cod_proyecto = p_cod_proyecto
               AND cod_empresa = p_cod_empresa
               AND cod_producto = p_cod_producto;
         END;

         IF v_existencia >= 0
         THEN
            UPDATE detalle_bodega
               SET cantidad_actual = cantidad_actual - p_cantidad,
                   fecha_movimiento = SYSDATE
             WHERE cod_bodega = p_cod_bodega 
               AND cod_proyecto = p_cod_proyecto
               AND cod_empresa = p_cod_empresa
               AND cod_producto = p_cod_producto;
         ELSE
            p_cod_msg := '-55';
            p_des_msg := 'La existencia no es suficiente';
         END IF;
      EXCEPTION
         WHEN OTHERS
         THEN
            p_cod_msg := '-54';
            p_des_msg := 'No se logro actualizar la bodega';
      END;

      IF p_cod_msg = '0'
      THEN
         COMMIT;
      ELSE
         ROLLBACK;
      END IF;
   END IF;
END prc_retira_producto_bodega; 
/

