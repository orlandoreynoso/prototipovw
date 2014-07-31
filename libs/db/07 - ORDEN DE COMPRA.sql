SELECT 
OC.COD_EMPRESA,OC.COD_PROYECTO,OC.COD_BODEGA,OC.COD_ORDEN,OC.COD_MOVIMIENTO_BOD,OC.IND_APLICADA,
OC.AFECTA_BODEGA,OC.ESTADO,OC.USUARIO,OC.COD_PROVEEDOR,
E.NOM_EMPRESA,
P.NOM_PROYECTO,
PRO.DESCRIPCION,
B.DESC_BODEGA
FROM ORDEN_COMPRA OC,EMPRESA E,PROYECTO P, PROVEEDOR PRO,BODEGA B
WHERE P.COD_PROYECTO = OC.COD_PROYECTO AND
B.COD_BODEGA = OC.COD_BODEGA

SELECT * FROM ORDEN_COMPRA
SELECT * FROM MOVIMIENTO_BODEGA
SELECT * FROM EMPRESA
SELECT * FROM PROYECTO
SELECT * FROM PROVEEDOR
SELECT COD_PERSONA,DESCRIPCION FROM PROVEEDOR WHERE ESTADO = 'A'
UPDATE PROVEEDOR SET DESCRIPCION = 'HOSPITAL ANGELES' WHERE COD_PERSONA = 1000

SELECT * FROM EMPRESA
SELECT MAX(COD_ORDEN+1) AS ID_OC FROM ORDEN_COMPRA
