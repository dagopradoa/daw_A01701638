SET DATEFORMAT dmy;
SELECT SUM(cantidad)  as 'Cantidad', SUM((M.Costo+M.Costo*M.PorcentajeImpuesto/100)*cantidad) as 'Importe total'
FROM Materiales M, Entregan E
WHERE E.clave=M.clave
AND E.fecha BETWEEN '01/01/1997' AND '31/12/1997'
--546.00|44789.472

SELECT P.RazonSocial, COUNT(E.rfc) as 'Entregas', SUM((M.Costo+M.Costo*M.PorcentajeImpuesto/100)*cantidad) as 'Importe total'
FROM Materiales M, Entregan E, Proveedores P
WHERE E.clave=M.clave 
AND P.rfc =E.rfc
GROUP BY P.RazonSocial
--8 filas
--Alvin|15|794295.20

SELECT M.clave, M.descripcion, SUM(cantidad) as 'Cantidad Entregada', MIN(cantidad) as 'Minima',MAX(cantidad) as 'Maxima', (m.Costo+m.Costo*m.PorcentajeImpuesto/100)*SUM(cantidad) as 'Importe total'
FROM Materiales M, entregan E
WHERE M.Clave=E.Clave
GROUP BY M.clave, M.Descripcion,M.Costo,M.PorcentajeImpuesto
HAVING AVG(cantidad)>400
--15 filas
--1010|Varilla 4/32|1718.00|532.00|667.00|201560.914000

SELECT P.RazonSocial,M.Clave,M.descripcion, AVG(cantidad) as 'Promedio'
FROM Proveedores P, Entregan E,Materiales M
WHERE E.RFC=P.RFC 
AND M.Clave=E.Clave
GROUP BY P.RazonSocial,M.Clave,M.descripcion
HAVING AVG(cantidad)<500
--41 filas
--La fragua|1000|Varilla3/16|142.00

SELECT P.RazonSocial,M.Clave,M.descripcion, AVG(cantidad) as 'Promedio'
from Proveedores P, Entregan E,Materiales M
WHERE E.RFC=P.RFC 
AND M.Clave=E.Clave
GROUP BY P.RazonSocial,M.Clave,M.descripcion
HAVING AVG(cantidad)<370 
OR AVG(cantidad)>450
ORDER BY 'Promedio'
--34 filas
--La fragua|1000|Varilla3/16|142.00

INSERT INTO Materiales VALUES('1431','Varilla 3/4','150','1.16')
INSERT INTO Materiales VALUES('1432','Pinza pelacables','475','1.16')
INSERT INTO Materiales VALUES('1433','Arcilla','30','2.03')
INSERT INTO Materiales VALUES('1434','Marmolina','40','1.40')
INSERT INTO Materiales VALUES('1435','Marmol','1500','2.50')

SELECT *
FROM Materiales

SELECT clave, descripcion
FROM Materiales
WHERE clave NOT IN(SELECT clave 
				   FROM entregan)
--5 filas
--1431|Varilla3/4

SELECT DISTINCT P.RazonSocial
from Proveedores P, entregan E, Proyectos PR
WHERE E.RFC=P.RFC  
AND PR.Numero=e.Numero 
AND PR.Denominacion='Vamos Mexico'
AND P.RazonSocial IN (SELECT P.RazonSocial
					FROM Proveedores P, entregan E, Proyectos PR
					WHERE E.RFC=P.RFC 
					AND PR.Numero=E.Numero 
					AND PR.Denominacion='Queretaro Limpio')
--La fragua

SELECT descripcion
FROM materiales
WHERE clave NOT IN (SELECT clave 
					FROM entregan E, Proyectos P
					WHERE P.Numero=E.Numero 
					AND P.Denominacion='CIT Yucatan')
--45 filas
--Varilla 3/16

SELECT RazonSocial, AVG(cantidad) as 'Promedio'
FROM Proveedores P, Entregan E
WHERE E.RFC=P.RFC
GROUP BY RazonSocial
HAVING AVG(cantidad) > (SELECT AVG(cantidad) 
						FROM entregan
						WHERE RFC='VAGO780901')
--No existe esa razon social

SET DATEFORMAT dmy;
SELECT p.rfc, RazonSocial
FROM Proveedores P, entregan E, Proyectos PR
WHERE E.RFC= P.RFC 
AND PR.Numero=E.Numero
AND PR.Denominacion='Infonavit Durango' 
AND fecha BETWEEN '01/01/2000' AND '31/12/2000'
GROUP BY P.RFC, RazonSocial
having SUM(cantidad)>(SELECT SUM(cantidad) 
					  FROM Proveedores P, entregan E, Proyectos PR
					  WHERE E.RFC= P.RFC 
					  AND PR.Numero=E.Numero
					  AND PR.Denominacion='Infonavit Durango' 
					  AND fecha BETWEEN '01/01/2001' AND '31/12/2001')
--No se puede, solo hay un proveedor en 2000 y uno en 2001 y el de 2001 entrego más
