-- 5. Mostrar los primeros 3 números de productos que se han enviado.

SELECT *
FROM `producto` p
ORDER BY p.id
LIMIT 3;