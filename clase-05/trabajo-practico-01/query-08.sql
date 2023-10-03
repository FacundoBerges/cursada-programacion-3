-- 8. Obtener la cantidad total del producto 1003 vendido por el usuario 104.

SELECT p.id AS 'id_producto', u.id AS 'id_usuario', SUM(v.cantidad) AS 'cantidad_vendida', SUM(p.precio * v.cantidad) AS 'total'
FROM `producto` p, `usuario` u, `venta` v
WHERE p.id = 1003 
  AND u.id = 104
  AND v.id_producto = p.id 
  AND v.id_usuario = u.id
GROUP BY u.id;