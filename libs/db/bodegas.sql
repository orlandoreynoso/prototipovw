SELECT MAX(COD_BODEGA+1) AS ID_BODEGA FROM BODEGA

SELECT * FROM BODEGA
SELECT COD_EMPRESA,NOM_EMPRESA FROM EMPRESA WHERE ESTADO = 'A'

SELECT * FROM PROYECTO
SELECT COD_EMPRESA,COD_PROYECTO,NOM_PROYECTO FROM PROYECTO WHERE ESTADO = 'A'

SELECT * FROM EMPRESA
SELECT COD_EMPRESA,NOM_EMPRESA FROM EMPRESA WHERE ESTADO = 'A'

INSERT INTO BODEGA (COD_EMPRESA, COD_PROYECTO,COD_BODEGA,DESC_BODEGA,UBICACION,FEC_CREACION,ESTADO_BODEGA) 
VALUES (82,20,52,'LABORATORIO PRODUCTOS DENTALES','SANTA ROSA', '10-12-2000','A');

SELECT MAX(COD_BODEGA+1) AS ID_BODEGA FROM BODEGA

INSERT INTO BODEGA (COD_EMPRESA, COD_PROYECTO,COD_BODEGA,DESC_BODEGA,UBICACION,FEC_CREACION,ESTADO_BODEGA) 
VALUES (100,100,53,'JUPITER','ZONA 2, SANTA ROSA', '18-5-2014','A')