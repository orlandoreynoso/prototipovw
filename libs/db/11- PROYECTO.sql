SELECT * FROM EMPRESA
SELECT COD_EMPRESA,NOM_EMPRESA FROM EMPRESA
SELECT * FROM PROYECTO
SELECT COD_EMPRESA,COD_PROYECTO,NOM_PROYECTO,DIRECCION,ESTADO FROM PROYECTO

SELECT MAX(COD_PROYECTO + 1) AS CP FROM PROYECTO 
