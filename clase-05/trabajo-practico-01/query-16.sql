-- 16. Cambiar el stock a 0 de todos los productos cuyas cantidades de stock sean menores a 20 inclusive.

UPDATE `producto` p
SET p.stock = 0, fecha_de_modificacion = CURDATE()
WHERE p.stock <= 20;