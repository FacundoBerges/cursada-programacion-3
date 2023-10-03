-- 4. Obtener la cantidad total de todos los productos vendidos.

SELECT SUM(v.cantidad) AS 'cantidad_vendidos'
FROM `venta` v;