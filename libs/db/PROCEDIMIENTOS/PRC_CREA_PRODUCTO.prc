CREATE OR REPLACE PROCEDURE PRE.prc_crea_producto (
   p_id                  IN       VARCHAR2,
   p_des_producto        IN       VARCHAR2,
   p_cod_marca           IN       NUMBER,
   p_cod_tipo_producto   IN       NUMBER,
   p_es_servicio         IN       VARCHAR2,
   p_precio              IN       NUMBER,
   v_correlativo         OUT      NUMBER,
   p_cod_msg             OUT      VARCHAR2,
   p_des_msg             OUT      VARCHAR2
)
IS
BEGIN
   p_cod_msg := '0';
   p_des_msg := 'Proceso Exitoso';

   IF p_des_producto IS NOT NULL AND p_cod_tipo_producto IS NOT NULL
   THEN
      BEGIN
         SELECT sec_producto.NEXTVAL
           INTO v_correlativo
           FROM DUAL;
      EXCEPTION
         WHEN OTHERS
         THEN
            v_correlativo := 0;
            p_cod_msg := '-56';
            p_des_msg := 'No existe la secuencia para el correlativo';
      END;

      IF v_correlativo <> 0
      THEN
         BEGIN
            INSERT INTO producto
                 VALUES (v_correlativo, p_id, p_des_producto,
                         p_cod_tipo_producto, p_es_servicio, p_precio, 'A',
                         SYSDATE, p_cod_marca);
         EXCEPTION
            WHEN OTHERS
            THEN
               v_correlativo := 0;
               p_cod_msg := '-53';
               p_des_msg := 'No se pudo agregar el producto';
         END;
      END IF;
   END IF;

   IF v_correlativo <> 0
   THEN
      COMMIT;
   ELSE
      ROLLBACK;
   END IF;
END prc_crea_producto; 
/

