CREATE OR REPLACE PROCEDURE PRE.prc_crea_persona (
   p_id_prsona     IN       VARCHAR2,
   p_nombre        IN       VARCHAR2,
   p_apellido      IN       VARCHAR2,
   p_direccion     IN       VARCHAR2,
   v_correlativo   OUT      NUMBER,
   p_cod_msg       OUT      VARCHAR2,
   p_des_msg       OUT      VARCHAR2
)
IS
BEGIN
   p_cod_msg := '0';
   p_des_msg := 'Proceso Exitoso';

   IF p_id_prsona IS NOT NULL
   THEN
      BEGIN
         SELECT sec_persona.NEXTVAL
           INTO v_correlativo
           FROM DUAL;
      EXCEPTION
         WHEN OTHERS
         THEN
            v_correlativo := 0;
            p_cod_msg := '-56';
            p_des_msg := 'No existe la secuencia para el correlativo';
      END;

      BEGIN
         INSERT INTO persona
              VALUES (v_correlativo, p_nombre, p_apellido, SYSDATE, 'A',
                      p_direccion);
      EXCEPTION
         WHEN OTHERS
         THEN
            v_correlativo := 0;
            p_cod_msg := '-53';
            p_des_msg := 'No se pudo agregar la persona';
      END;
   END IF;

   IF p_cod_msg = '0'
   THEN
      COMMIT;
   ELSE
      ROLLBACK;
   END IF;
END prc_crea_persona; 
/

