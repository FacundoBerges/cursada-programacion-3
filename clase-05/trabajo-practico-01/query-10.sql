-- 10. Obtener los datos completos de los usuarios cuyos nombres contengan la letra ‘u’.

SELECT *
FROM `usuario` u
WHERE u.nombre LIKE '%u%'
  OR  u.apellido LIKE '%u%';