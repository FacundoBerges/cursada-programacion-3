-- 5. Mostrar los primeros 3 números de productos que se han enviado.

SELECT DISTINCT *
FROM `producto` p
ORDER BY p.fecha_de_venta
LIMIT 3;