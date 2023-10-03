-- 18. Eliminar a todos los usuarios que no han vendido productos.

DELETE FROM `usuario` u
WHERE u.id NOT IN (
    SELECT v.id_usuario 
    FROM `venta` v
);