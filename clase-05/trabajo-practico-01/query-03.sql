-- 3. Obtener todas las compras en los cuales la cantidad esté entre 6 y 10 inclusive.

SELECT *
FROM `venta` v
WHERE v.cantidad >= 6 AND v.cantidad <= 10;