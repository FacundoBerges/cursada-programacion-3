-- 6. Mostrar los nombres del usuario y los nombres de los productos de cada venta.

SELECT v.id AS 'id_venta', u.nombre AS 'nombre_usuario', u.apellido AS 'apellido_usuario', p.nombre AS 'nombre_producto'
FROM `venta` v, `usuario` u, `producto` p
WHERE v.id_usuario = u.id 
  AND v.id_producto = p.id;