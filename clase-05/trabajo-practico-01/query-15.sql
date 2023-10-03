-- 15. Cambiar los precios de los productos de tipo sólido a 66,60.

UPDATE `producto` p
SET p.precio = 66.60, p.fecha_de_modificacion = CURDATE()
WHERE LOWER(p.tipo) = LOWER('solido');