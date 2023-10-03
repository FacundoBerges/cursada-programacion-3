-- 9. Obtener todos los números de los productos vendidos por algún usuario de ‘Avellaneda’.

SELECT p.id AS 'id_producto', p.codigo_de_barra AS 'numero_producto'
FROM `producto` p, `usuario` u, `venta` v
WHERE LOWER(u.localidad) = LOWER('Avellaneda') 
  AND u.id = v.id_usuario
  AND p.id = v.id_producto;