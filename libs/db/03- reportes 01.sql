INSERT INTO MOVIMIENTO_BODEGA 
(COD_EMPRESA,COD_PROYECTO,COD_BODEGA,COD_MOVIMIENTO,FEC_MOVIMIENTO,
TIPO_MOVIMIENTO,ESTADO_MOVIMIENTO,TIPO_OPERACION,
USUARIO) VALUES (1,4,2,5,'17-2-1935','0','A','R','OREYNOSO')

SELECT * FROM MOVIMIENTO_BODEGA
SELECT * FROM BODEGA
SELECT * FROM EMPLEADO
SELECT * FROM PUESTO WHERE COD_PUESTO = 1

SELECT E.COD_PERSONA AS ,E.USUARIO,E.COD_PUESTO,E.SALARIO_BASE,E.BONIFICACION,P.COD_PUESTO,P.DES_PUESTO 
FROM EMPLEADO E,PUESTO P WHERE E.COD_PUESTO = P.COD_PUESTO

SELECT * FROM PUESTO