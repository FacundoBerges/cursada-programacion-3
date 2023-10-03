-- 7. Indicar el monto (cantidad * precio) por cada una de las ventas.

SELECT v.id AS 'id_venta', SUM(p.precio * v.cantidad) AS 'monto'
FROM `venta` v, `producto` p
WHERE v.id_producto = p.id
GROUP BY v.id;