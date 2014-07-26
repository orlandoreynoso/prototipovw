CREATE OR REPLACE PROCEDURE PRE.prc_crea_bodega (
   p_cod_empresa    IN       NUMBER,
   p_cod_proyecto   IN       NUMBER,
   p_des_bodega     IN       VARCHAR2,
   p_ubicacion      IN       VARCHAR2,
   v_correlativo    OUT      NUMBER,
   p_cod_msg        OUT      VARCHAR2,
   p_des_msg        OUT      VARCHAR2
)
IS
BEGIN
   p_cod_msg := '0';
   p_des_msg := 'Proceso Exitoso';

   IF p_des_bodega IS NOT NULL
   THEN
      BEGIN
         SELECT sec_bodega.NEXTVAL
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
            INSERT INTO bodega
                 VALUES (p_cod_empresa, p_cod_proyecto, v_correlativo,
                         p_des_bodega, p_ubicacion,sysdate, 'A');
         EXCEPTION
            WHEN OTHERS
            THEN
               v_correlativo := 0;
               p_cod_msg := '-53';
               p_des_msg := 'No se pudo agregar el detalle del movimiento';
         END;
      END IF;
   END IF;

   IF v_correlativo <> 0
   THEN
      COMMIT;
   ELSE
      ROLLBACK;
   END IF;
END prc_crea_bodega; 
/

