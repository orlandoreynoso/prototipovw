CREATE OR REPLACE PROCEDURE prc_crea_empresa (
   p_cod_empresa    IN       NUMBER,
   p_des_empresa    IN       VARCHAR2,   
   p_direccion      IN       VARCHAR2,   
   p_identificacion IN       VARCHAR2,   
   p_estado         IN       VARCHAR2,
   v_correlativo    OUT      NUMBER,
   p_cod_msg        OUT      VARCHAR2,
   p_des_msg        OUT      VARCHAR2
)
IS
BEGIN
   p_cod_msg := '0';
   p_des_msg := 'Proceso Exitoso';

   IF p_des_empresa IS NOT NULL
   THEN
      BEGIN
         SELECT sec_empresa.NEXTVAL
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
            INSERT INTO empresa
                 VALUES (v_correlativo, p_des_empresa, p_direccion,
                         p_identificacion, 'A'); 
  
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
END prc_crea_empresa; 
