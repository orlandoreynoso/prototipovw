CREATE OR REPLACE PROCEDURE PRE.prc_crea_mov_bodega (
   p_cod_empresa    IN       NUMBER,
   p_cod_proyecto   IN       NUMBER,
   p_cod_bodega     IN       VARCHAR2,
   p_tipo_mov       IN       VARCHAR2,
   p_tipo_op        IN       VARCHAR2,
   v_correlativo    OUT      NUMBER,
   p_cod_msg        OUT      VARCHAR2,
   p_des_msg        OUT      VARCHAR2
)
IS
   v_errm   VARCHAR2 (500);
BEGIN
   p_cod_msg := '0';
   p_des_msg := 'Proceso Exitoso';

   IF p_cod_bodega IS NOT NULL
   THEN
      BEGIN
         SELECT sec_mov_bodega.NEXTVAL
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
            INSERT INTO movimiento_bodega
                 VALUES (p_cod_empresa, p_cod_proyecto, p_cod_bodega,
                         v_correlativo, SYSDATE, p_tipo_mov, 'A',
                         p_tipo_op, user);
         EXCEPTION
            WHEN OTHERS
            THEN
               v_correlativo := 0;
               p_cod_msg := '-53';
               p_des_msg := 'No se pudo agregar el movimiento';
         END;
      END IF;
   END IF;

   IF v_correlativo <> 0
   THEN
      COMMIT;
   ELSE
      ROLLBACK;
   END IF;
END prc_crea_mov_bodega; 
/

