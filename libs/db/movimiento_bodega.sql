SELECT * FROM MOVIMIENTO_BODEGA order by COD_MOVIMIENTO

SELECT MAX(COD_MOVIMIENTO+1) AS ID_MBODEGA FROM MOVIMIENTO_BODEGA

SELECT * FROM BODEGA
SELECT COD_BODEGA,DESC_BODEGA FROM BODEGA WHERE ESTADO_BODEGA = 'A'

SELECT COD_EMPRESA,COD_PROYECTO,COD_BODEGA,DESC_BODEGA 
FROM BODEGA 
WHERE 
ESTADO_BODEGA = 'A' AND COD_BODEGA= 53

SELECT COD_PERSONA,USUARIO FROM EMPLEADO WHERE ESTADO = 'A'
SELECT * FROM PROYECTO

INSERT INTO MOVIMIENTO_BODEGA (COD_EMPRESA,COD_PROYECTO,COD_BODEGA,COD_MOVIMIENTO,FEC_MOVIMIENTO,USUARIO_REGISTRA,TIPO_MOVIMIENTO,USUARIO_MOVIMIENTO,ESTADO_MOVIMIENTO,TIPO_OPERACION) 
VALUES (100,100,53,60,'17-2-1934','OREYNOSO','1','OREYNOSO','A','1')

SELECT COD_EMPRESA,COD_PROYECTO,COD_BODEGA,DESC_BODEGA FROM BODEGA WHERE ESTADO_BODEGA = 'A' AND COD_BODEGA= 52