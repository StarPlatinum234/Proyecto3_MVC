-- Vista new
CREATE VIEW database_overview AS

SELECT 'alumnos' AS 'Tabla',
COUNT (*) AS 'Registros' 
FROM 'alumnos' 
UNION ALL

SELECT 'calificaciones' AS 'Tabla',
COUNT (*) AS 'Registros' 
FROM 'calificaciones' 
UNION ALL

SELECT 'especialidad' AS 'Tabla',
COUNT (*) AS 'Registros' 
FROM 'especialidad' 
UNION ALL

SELECT 'generacion' AS 'Tabla', 
COUNT (*) AS 'Registros'
FROM 'generacion'
UNION ALL

SELECT 'grupos' AS 'Tabla', 
COUNT (*) AS 'Registros'
FROM 'grupos'
UNION ALL

SELECT 'materias' AS 'Tabla', 
COUNT (*) AS 'Registros'
FROM 'materias'
UNION ALL

SELECT 'periodo' AS 'Tabla', 
COUNT (*) AS 'Registros'
FROM 'periodo'
UNION ALL

SELECT 'planteles' AS 'Tabla', 
COUNT (*) AS 'Registros'
FROM 'planteles'
UNION ALL