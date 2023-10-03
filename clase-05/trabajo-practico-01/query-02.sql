-- 2. Obtener los detalles completos de todos los productos líquidos.

SELECT *
FROM `producto` p
WHERE p.tipo = 'liquido';