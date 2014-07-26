CREATE OR REPLACE PROCEDURE PRE.prc_agrega_producto_bodega (
   p_cod_empresa    IN       NUMBER,
   p_cod_proyecto   IN       NUMBER,
   p_cod_mov_bod    IN       NUMBER,
   p_cod_producto   IN       VARCHAR2,
   p_cantidad       IN       NUMBER,
   p_cod_bodega     IN       NUMBER,
   p_cod_msg        OUT      VARCHAR2,
   p_des_msg        OUT      VARCHAR2
)
IS
   v_existe_prod   NUMBER := 0;
BEGIN
   p_cod_msg := '0';

   IF p_cod_mov_bod IS NOT NULL
   THEN
      BEGIN
         INSERT INTO detalle_movimiento_bodega
              VALUES (p_cod_mov_bod, p_cod_producto, p_cantidad, NULL);
      EXCEPTION
         WHEN OTHERS
         THEN
            p_cod_msg := '-53';
            p_des_msg := 'No se pudo realizar el insert';
      END;
   END IF;

   IF p_cod_msg = '0'
   THEN
      BEGIN
         SELECT COUNT (1)
           INTO v_existe_prod
           FROM detalle_bodega
          WHERE cod_bodega = p_cod_bodega AND cod_producto = p_cod_producto;
      EXCEPTION
         WHEN OTHERS
         THEN
            v_existe_prod := 0;
      END;

      IF v_existe_prod = 0
      THEN
         BEGIN
            INSERT INTO detalle_bodega
                        (cod_empresa, cod_proyecto, cod_bodega,
                         cod_producto, cantidad_actual, fecha_movimiento,
                         estado_producto
                        )
                 VALUES (p_cod_empresa, p_cod_proyecto, p_cod_bodega,
                         p_cod_producto, p_cantidad, SYSDATE,
                         'A'
                        );
         EXCEPTION
            WHEN OTHERS
            THEN
               p_cod_msg := '-53';
               p_des_msg := 'No se pudo realizar el insert';
         END;
      ELSE
         BEGIN
            UPDATE detalle_bodega
               SET cantidad_actual = cantidad_actual + p_cantidad,
                   fecha_movimiento = SYSDATE
             WHERE cod_bodega = p_cod_bodega AND cod_producto = p_cod_producto;
         EXCEPTION
            WHEN OTHERS
            THEN
               p_cod_msg := '-53';
               p_des_msg := 'No se pudo realizar el insert';
         END;
      END IF;

      IF p_cod_msg = '0'
      THEN
         COMMIT;
         p_des_msg := 'Proceso Exitoso';
         p_cod_msg := '0';
      ELSE
         ROLLBACK;
      END IF;
   END IF;
END prc_agrega_producto_bodega; 
/

