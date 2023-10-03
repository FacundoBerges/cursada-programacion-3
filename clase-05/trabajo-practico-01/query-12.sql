-- 12. Obtener los usuarios registrados antes del 2021.

SELECT *
FROM `usuario` u
WHERE u.fecha_de_registro < '2021-1-1';