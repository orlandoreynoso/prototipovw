SELECT * FROM PRODUCTO
SELECT * FROM MARCA_PRODUCTO
SELECT * FROM TIPO_PRODUCTO

SELECT 
P.ID_PRODUCTO,P.DES_PRODUCTO,P.COD_TIPO_PRODUCTO,TP.DES_TIPO_PRODUCTO,
P.ES_SERVICIO,P.PRECIO_PRODUCTO,P.ESTADO_PRODUCTO,
P.FECHA_CREACION,M.COD_MARCA,M.DESCRIPCION
FROM PRODUCTO P, MARCA_PRODUCTO M, TIPO_PRODUCTO TP
WHERE
P.COD_MARCA = M.COD_MARCA AND 
P.COD_TIPO_PRODUCTO  = TP.COD_TIPO_PRODUCTO